<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Settings;
use App\Models\Testimonial;
use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class SettingsController extends Controller
{
    public function __construct(){
        $this->prefix = 'settings';
    }

    public function __destruct()
    {
        unset($this->prefix);
    }

    public function index(Request $request)
    {
        $prefix = $this->prefix;

        $settingsData = Settings::all()->toArray();
        $data = array_column($settingsData, 'value', 'key');

        return view('admin-views.settings.index',compact('prefix','data'));
    }

    public function update(Request $request)
    {
        $settingsData = Settings::all()->toArray();
        foreach ($settingsData as $d){
            $key = $d['key'];
            if ($key == 'brochure_path'){
                $filePath = "";
                if ($file = $request->file('brochure_path')) {

                    $brochure_path = Settings::query()->where('key', $key)->first()->value;
                    $destinationPath = 'uploads/brochure/';
                    if(file_exists($destinationPath.$brochure_path)){
                        unlink($destinationPath.$brochure_path);
                    }
                    $filePath = date('YmdHis') . "." . $file->getClientOriginalExtension();
                    $file->move($destinationPath, $filePath);
                }
                if ($filePath != ""){
                    Settings::where('key',$key)->update(['value'=>$filePath]);
                }
            }else{
                Settings::where('key',$key)->update(['value'=>$request->get($key)]);
            }
        }
        return redirect()->route('admin.'.$this->prefix.'.index')->with('success','Settings Updated Successfully.');
    }

    public function changePassword(Request $request)
    {
        $prefix = $this->prefix;
        return view('admin-views.settings.change-password',compact('prefix'));
    }

    public function updatePassword(Request $request)
    {
        $userId = auth()->user()->id;
        $pass = User::where('id',$userId)->update(['password' => bcrypt(trim($request->new_password))]);
        if($pass){
            return redirect()->route('admin.'.$this->prefix.'.change-password')->with('success','Password Changed Successfully.');
        }else{
            return redirect()->route('admin.'.$this->prefix.'.change-password')->with('error','Error in changing password. Please try after sometime.');
        }
    }
}
