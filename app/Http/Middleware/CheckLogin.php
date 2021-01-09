<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(\Auth::check()){
            if(Auth::user()->role == 1)
            {
                return $next($request);
            }else{
                return redirect()->route('login')->with('warning','Tài khoản của bạn không có quyền truy cập');
            }
        }else{
            return redirect()->route('login')->with('warning','Bạn cần đăng nhập để vào trang quản trị hệ thống');
        }
    }
}
