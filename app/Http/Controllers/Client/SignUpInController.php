<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class SignUpInController extends Controller
{
    public function SignUp()
    {
        return view('client.pages.SignUpIn');
    }

    public function storeSignUp(Request $request, User $user)
    {
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone' => $request->phone,
            'address' => $request->address,
        ];
        $users = $user->create($data);
        return redirect()->back()->with('success','Đăng ký tài khoản thành công!');
    }
}
