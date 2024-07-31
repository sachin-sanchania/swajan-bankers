<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
//use App\Models\Settings;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function login()
    {
        return view('admin-views.login');
    }

    public function forgotPassword()
    {
        return view('admin.forgot-password');
    }

    public function loginSubmit(Request $request){
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $validated = \auth()->attempt([
           'username' => $request->username,
           'password' => $request->password,
           'user_type' => 0
        ]);

        if ($validated) {
            return response()->json(array('result'=>true,'msg'=>'Logged in Successfully.','redirect_uri' => url('admin/dashboard')));
        }
        return response()->json(array('result'=>false,'msg'=>'Invalid Username Or Password.'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function forgotSubmit(Request $request){
        $request->validate([
            'email' => 'required',
        ]);

        $contactEmail = Settings::where('key','contact_email')->first()->value;
        if($contactEmail != $request->email){
            return response()->json(array('result'=>false,'msg'=>"Please enter correct email address."));
        }

        //$data = array('messageBody' => $messageBody);
        //$contactEmail = 'sachin.sanchania@gmail.com';
        $key = Crypt::encrypt($contactEmail);
        $data = ['reset_link' => admin_url('r').'/'.$key];
        $response = Mail::send('admin.email-templates.forgot-password', $data, function($message) use ($contactEmail) {
            $message->to($contactEmail, 'SWAJAN')->subject('Reset Password For SWAJAN Admin');
            $message->from(env('FROM_EMAIL'),env('FROM_NAME'));
        });
        if($response){
            return response()->json(array('result'=>true,'msg'=>'Password reset link will be sent to your email address. Please check your email.'));
        }else{
            return response()->json(array('result'=>false,'msg'=>'Something went wrong in sending email.'));
        }
    }

    /**
     * @param Request $request
     * @param $key
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\RedirectResponse
     */
    public function resetPassword(Request $request,$key){
        $contactEmail = Settings::where('key','contact_email')->first()->value;
        $requestContactEmail = Crypt::decrypt($key);
        if(trim($contactEmail) != trim($requestContactEmail)){
            return redirect()->route('admin.login')->with('error','Something went wrong with reset password.');
        }
        return view('admin.reset-password');

    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse|\Illuminate\Http\RedirectResponse
     */
    public function resetPasswordSubmit(Request $request){
        $newPassword = bcrypt($request->password);
        $update = User::where('id',1)->update(['password' => $newPassword]);
        if($update){
            Session::flash('success','Password changed successfully.');
            return response()->json(array('result'=>true));
        }else{
            return response()->json(array('result'=>false,'msg'=>'Something went wrong in changing password.'));
        }
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout()
    {
        auth()->logout();
        return redirect()->route('admin.login');
    }
}
