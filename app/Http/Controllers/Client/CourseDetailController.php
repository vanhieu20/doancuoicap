<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CourseDetailController extends Controller
{
    public function Course()
    {
        return view('client.pages.CourseDetail');
    }
}
