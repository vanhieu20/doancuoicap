<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MycourseController extends Controller
{
    public function index()
    {
        return view('client.pages.MyCourse');
    }
}
