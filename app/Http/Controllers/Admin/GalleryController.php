<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Guizoxxv\LaravelMultiSizeImage\MultiSizeImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Pawlox\VideoThumbnail\VideoThumbnail;
use Yajra\DataTables\DataTables;

class GalleryController extends Controller
{
    public function __construct(){
        $this->prefix = 'gallery';
    }

    public function __destruct()
    {
        unset($this->prefix);
    }

    public function index(Request $request)
    {
        $prefix = $this->prefix;
        if ($request->ajax()) {
            $data = Gallery::select('*');
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $btn = '<a href="'.admin_url($this->prefix).'/edit/'.$row->id.'" title="Edit"><i class="fa fa-edit fa-lg"></i></a>';
                    $btn .= '<a href="javascript:void(0)" class="text-danger delete_button" data-id="'.$row->id.'" title="Delete" style="padding-left: 7px"><i class="fa fa-trash fa-lg"></i></a>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('admin-views.'.$this->prefix.'.index',compact('prefix'));
    }

    public function create()
    {
        $prefix = $this->prefix;
        return view('admin-views.'.$this->prefix.'.create',compact('prefix'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'order' => 'required',
        ]);

        try {
            $imagePath = '';
            if ($image = $request->file('image_path')) {
                $destinationPath = 'uploads/gallery/';
                $galleryImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $galleryImage);
                $imagePath = $galleryImage;
                if ($request->type == 'video') {
                    $video = new VideoThumbnail();
                    $video->createThumbnail(
                        public_path($destinationPath . $galleryImage),
                        public_path($destinationPath . 'thumbnails/' . $galleryImage),
                        $galleryImage,
                        2,
                    );
                } else{
                    $fullPath = $destinationPath.$imagePath;
                    $multiSizeImage = new MultiSizeImage();
                    $multiSizeImage->processImage($fullPath, 'uploads/gallery/thumbnails/');
                }
            }

            $create = new Gallery();
            $create->title = $request->title;
            $create->type = $request->type;
            $create->order = $request->order;
            $create->image_path = $imagePath;
            $create->save();

            if ($create) {
                return redirect()->route('admin.' . $this->prefix . '.index')->with('success', 'Gallery Added Successfully.');
            } else {
                return redirect()->route('admin.' . $this->prefix . '.index')->with('error', 'Error in adding Gallery.');
            }
        } catch (\Exception $e) {
            // Log the error message
            Log::error('Error in storing gallery: ' . $e);

            return redirect()->route('admin.' . $this->prefix . '.index')->with('error', 'An error occurred while adding the gallery.');
        }
    }

    public function edit($id)
    {
        $prefix = $this->prefix;
        $data = Gallery::where('id',(int)$id)->first();
        return view('admin-views.gallery.create',compact('data','prefix'));
    }

    public function update(Request $request, $id)
    {
        $imagePath = "";
        $request->validate([
            'order' => 'required',
        ]);

        if ($image = $request->file('image_path')) {
            $destinationPath = 'uploads/gallery/';
            $galleryImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $galleryImage);
            $imagePath = $galleryImage;
            if ($request->type == 'video') {
                $video = new VideoThumbnail();
                $video->createThumbnail(
                    public_path($destinationPath . $galleryImage),
                    public_path($destinationPath . 'thumbnails/' . $galleryImage),
                    $galleryImage,
                    2,
                );
            } else{
                $fullPath = $destinationPath.$imagePath;
                $multiSizeImage = new MultiSizeImage();
                $multiSizeImage->processImage($fullPath, 'uploads/gallery/thumbnails/');
            }
        }

        $update = Gallery::find($id);
        $update->title = $request->title;
        $update->type = $request->type;
        $update->order = $request->order;
        if($imagePath != ""){
            $update->image_path = $imagePath;
        }
        $update->save();

        if($update){
            return redirect()->route('admin.'.$this->prefix.'.index')->with('success','Gallery Updated Successfully.');
        }else{
            return redirect()->route('admin.'.$this->prefix.'.index')->with('error','Error in updating Gallery.');
        }
    }

    public function delete(Request $request)
    {
        $id = (int)$request->id;
        $gallery = Gallery::find($id);
        if(file_exists('uploads/gallery/'.$gallery->image_path)){
            unlink('uploads/gallery/'.$gallery->image_path);
        }
        if(file_exists('uploads/gallery/thumbnails/'.convertImageName($gallery->image_path))){
            unlink('uploads/gallery/thumbnails/'.convertImageName($gallery->image_path));
        }
        $gallery->delete();
        if($gallery){
            return response()->json(array('result' => true, 'message' => 'Gallery Deleted Successfully.'));
        }else{
            return response()->json(array('result' => false, 'message' => 'Error In Deleting Gallery.'));
        }
    }

    public function deleteImage(Request $request)
    {
        $id = (int)$request->id;
        $deleteImage = Gallery::where('id',$id)->update(['image_path' => NULL]);
        if($deleteImage){
            return response()->json(array('result' => true, 'message' => 'Image Deleted Successfully.'));
        }else{
            return response()->json(array('result' => false, 'message' => 'Error In Deleting Image.'));
        }
    }
}
