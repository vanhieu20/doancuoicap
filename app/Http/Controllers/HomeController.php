<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    // view trang client
    public function index(Subject $subject)
    {
        $list_subject = $subject->limit(8)->get();
        return view('client.index',compact('list_subject'));
    }

    public function Pages404()
    {
        return view('404.frontend');
    }
}
