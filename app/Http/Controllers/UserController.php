<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(User $user)
    {
        $user = $user->where('role','!=', 1)->get();
        return view('admins.accout.index',compact('user'));
    }

    public function changeStatus(Request $request,$id, User $user)
    {
        if($request->ajax())
        {
            if($request->status == 0){
                $data = [
                    'status' => 1,
                ];
                $user->where('id',$id)->update($data);
                return response()->json(['unlock' => 'Mở tài khoản thành công!']);
            }else{
                $data = [
                    'status' => 0,
                ];
                $user->where('id',$id)->update($data);
                return response()->json(['lock' => 'Khóa tài khoản thành công!']);
            }
        }
    }
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
            if(Auth::user()->status == 1){
                return redirect()->route('dashboard');
            }else{
                return redirect()->back()->with('danger', 'Tài khoản đã bị khóa');
            }
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
