<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Mail;

class SignInController extends Controller
{
    public function Login(Request $request)
    {
        $day = 8640;
        if($request->remember == 'on')
        {
            \Cookie::queue('email', $request->email,$day);
            \Cookie::queue('password', $request->password,$day);
        }else{
            \Cookie::queue(\Cookie::forget('email'));
            \Cookie::queue(\Cookie::forget('password'));
        }

        $data = $request->only('email', 'password');
        if(Auth::attempt($data)){
            if(Auth::user()->status == 1){
                return redirect()->route('client');
            }else{
                return redirect()->back()->with('danger', 'Tài khoản đã bị khóa');
            }
        }else{
            return redirect()->back()->with('danger', 'Tài khoản không đúng. xin vui lòng thử lại');
        }
    }

    public function Logout()
    {
        if(Auth::check()){
            Auth::logout();
            return redirect()->route('client');
        }
    }


    public function viewForgotPassword()
    {
        return view('client.pages.forgotPassword');
    }

    public function sendCodeResetPassword(Request $request,User $user)
    {
        $email = $request->email;
        $checkMail = $user->where('email',$email)->first();

        if(!$checkMail){
            return redirect()->back()->with('danger','Email không tồn tại trên hệ thống');
        }

        $code = Hash::make(time().$email);

        $checkMail->code = $code;
        $checkMail->time_code = date('y-m-d H:i:s');
        $checkMail->save();

        $url = route('get.link.reset.password',['code' => $checkMail->code, 'email' => $email]);

        $data = [
            'route' => $url
        ];

        Mail::send('client.pages.reset_password',$data, function($message) use ($checkMail){
            $message->to($checkMail->email, 'ResetPassword')->subject('Lấy lại mật khẩu');
        });

        return redirect()->back()->with('success','Check mail thay đổi mật khẩu của bạn');
    }

    public function resetPassword(Request $request, User $user)
    {
        $code = $request->code;
        $email = $request->email;

        $checkUser = $user->where([
            'code' => $code,
            'email' => $email,
        ])->first();

        if(!$checkUser){
            return redirect('/quen-mat-khau')->with('danger','Link lấy lại mật khẩu không đúng. Vui lòng kiểm tra lại');
        }
        return view('client.pages.resetPassword');
    }

    public function changeNewPassword(Request $request, User $user)
    {
        $code = $request->code;
        $email = $request->email;

        $checkUser = $user->where([
            'code' => $code,
            'email' => $email,
        ])->first();

        if(!$checkUser){
            return redirect('/quen-mat-khau')->with('danger','Link lấy lại mật khẩu không đúng. Vui lòng kiểm tra lại');
        }

        $checkUser->password = Hash::make($request->new_password);
        $checkUser->code = '';
        $checkUser->save();

        return redirect()->route('SignUp')->with('success','Mật khẩu đã được thay đổi thành công.');
    }
}
