<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\RegisInfo;

class MyCourseController extends Controller
{
    public function MyCourse(RegisInfo $regisInfo)
    {
        $user = Auth::user();

        $list_regis = $regisInfo->where('student_id',$user->id)->get();
    	return view('client.pages.MyCourse',compact('user','list_regis'));
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
