<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class TestimonialController extends Controller
{
    /**
     * Initialize the constructor
     */
    public function __construct(){
        $this->prefix = 'testimonial';
    }

    public function __destruct()
    {
        unset($this->prefix);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $prefix = $this->prefix;
        if ($request->ajax()) {
            $data = Testimonial::select('*');
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

        return view('admin-views.testimonial.index',compact('prefix'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $prefix = $this->prefix;
        return view('admin-views.testimonial.create',compact('prefix'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $imagePath = '';
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'place' => 'required'
        ]);

        if ($image = $request->file('image_path')) {
            $destinationPath = 'uploads/testimonial/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $imagePath = $profileImage;
        }

        $create = new Testimonial();
        $create->name = $request->name;
        $create->description = $request->description;
        $create->place = $request->place;
        $create->image_path = $imagePath;
        $create->save();
        if($create){
            return redirect()->route('admin.'.$this->prefix.'.index')->with('success','Testimonial Added Successfully.');
        }else{
            return redirect()->route('admin.'.$this->prefix.'.index')->with('error','Error in adding Testimonial.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $prefix = $this->prefix;
        $data = Testimonial::where('id',(int)$id)->first();
        return view('admin-views.testimonial.create',compact('data','prefix'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $imagePath = "";
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'place' => 'required'
        ]);

        if ($image = $request->file('image_path')) {
            $destinationPath = 'uploads/testimonial/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $imagePath = $profileImage;
        }

        $update = Testimonial::find($id);
        $update->name = $request->name;
        $update->description = $request->description;
        $update->place = $request->place;
        if($imagePath != ""){
            $update->image_path = $imagePath;
        }
        $update->save();

        if($update){
            return redirect()->route('admin.'.$this->prefix.'.index')->with('success','Testimonial Updated Successfully.');
        }else{
            return redirect()->route('admin.'.$this->prefix.'.index')->with('error','Error in updating Testimonial.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        $id = (int)$request->id;
        $delete = Testimonial::where('id',$id)->delete();
        if($delete){
            return response()->json(array('result' => true, 'message' => 'Testimonial Deleted Successfully.'));
        }else{
            return response()->json(array('result' => false, 'message' => 'Error In Deleting Testimonial.'));
        }
    }

    public function deleteImage(Request $request)
    {
        $id = (int)$request->id;
        $deleteImage = Testimonial::where('id',$id)->update(['image_path' => NULL]);
        if($deleteImage){
            return response()->json(array('result' => true, 'message' => 'Image Deleted Successfully.'));
        }else{
            return response()->json(array('result' => false, 'message' => 'Error In Deleting Image.'));
        }
    }
}
