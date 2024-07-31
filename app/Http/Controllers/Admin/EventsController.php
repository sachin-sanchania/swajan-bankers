<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Events;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class EventsController extends Controller
{
    /**
     * Initialize the constructor
     */
    public function __construct(){
        $this->prefix = 'events';
    }

    public function __destruct()
    {
        unset($this->prefix);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {
        $prefix = $this->prefix;
        if ($request->ajax()) {
            $data = Events::select('*');
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

        return view('admin-views.events.index',compact('prefix'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $prefix = $this->prefix;
        return view('admin-views.events.create',compact('prefix'));
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
            'title' => 'required',
            'description' => 'required',
            'date' => 'required'
        ]);

        if ($image = $request->file('image_path')) {
            $destinationPath = 'uploads/events/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $imagePath = $profileImage;
        }

        $create = new Events();
        $create->title = $request->title;
        $create->description = $request->description;
        $create->place = $request->place;
        $create->date = date("Y-m-d",strtotime($request->date));
        $create->time = date("H:i",strtotime($request->time));
        $create->image_path = $imagePath;
        $create->status = 0;
        $create->save();
        if($create){
            return redirect()->route('admin.'.$this->prefix.'.index')->with('success','Events Added Successfully.');
        }else{
            return redirect()->route('admin.'.$this->prefix.'.index')->with('error','Error in adding Events.');
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
        $data = Events::where('id',(int)$id)->first();
        return view('admin-views.events.create',compact('data','prefix'));
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
            'title' => 'required',
            'description' => 'required',
            'date' => 'required'
        ]);

        if ($image = $request->file('image_path')) {
            $destinationPath = 'uploads/events/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $imagePath = $profileImage;
        }

        $update = Events::find($id);
        $update->title = $request->title;
        $update->description = $request->description;
        $update->place = $request->place;
        $update->date = date("Y-m-d",strtotime($request->date));
        $update->time = date("H:i",strtotime($request->time));
        if($imagePath != ""){
            $update->image_path = $imagePath;
        }
        $update->save();

        if($update){
            return redirect()->route('admin.'.$this->prefix.'.index')->with('success','Events Updated Successfully.');
        }else{
            return redirect()->route('admin.'.$this->prefix.'.index')->with('error','Error in updating Events.');
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
        $delete = Events::where('id',$id)->delete();
        if($delete){
            return response()->json(array('result' => true, 'message' => 'Events Deleted Successfully.'));
        }else{
            return response()->json(array('result' => false, 'message' => 'Error In Deleting Events.'));
        }
    }

    /**
     * Delete Image Based on Primary key id
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteImage(Request $request)
    {
        $id = (int)$request->id;
        $deleteImage = Events::where('id',$id)->update(['image_path' => NULL]);
        if($deleteImage){
            return response()->json(array('result' => true, 'message' => 'Image Deleted Successfully.'));
        }else{
            return response()->json(array('result' => false, 'message' => 'Error In Deleting Image.'));
        }
    }

    public function changeStatus(Request $request)
    {
        $id = (int)$request->id;
        Events::query()->update(['status' => 0]);
        $status = Events::where('id',$id)->update(['status' => 1]);

        if($status){
            return response()->json(array('result' => true, 'message' => 'Status Changed Successfully.'));
        }else{
            return response()->json(array('result' => false, 'message' => 'Error In Changing Status.'));
        }
    }


}
