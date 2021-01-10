<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Subject;
use Illuminate\Http\Request;

class CourseDetailController extends Controller
{
    public function Course($id,Subject $subject)
    {
        $list_course_id = $subject->where('counrses_id',$id)->get();
        return view('client.pages.CourseDetail',compact('list_course_id'));
    }
}
