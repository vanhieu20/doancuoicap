<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function viewLogin()
    {
        return view('admins.auth.login');
    }

    public function login(Request $request)
    {
        if($request->remember_me == 'on')
        {
            \Cookie::queue('email', $request->email);
            \Cookie::queue('password', $request->password);
        }else{
            \Cookie::queue(\Cookie::forget('email'));
            \Cookie::queue(\Cookie::forget('password'));
        }

    $data = $request->only('email', 'password');
    if(Auth::attempt($data)){
            return redirect()->route('dashboard');
        }else{
            return redirect()->back()->with('danger', 'Tài khoản không đúng. xin vui lòng thử lại');
        }
    }

    public function logout()
    {
        if(Auth::check()){
            Auth::logout();
            return redirect()->route('dashboard');
        }
    }
}
