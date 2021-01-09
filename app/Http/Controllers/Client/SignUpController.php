<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SignUpController extends Controller
{
    public function SignUp()
    {
        return view('client.pages.SignUp');
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
