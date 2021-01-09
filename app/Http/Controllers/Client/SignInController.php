<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
}
