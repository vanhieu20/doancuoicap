<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    // view trang danh sách danh mục khóa học
    public function index(Course $course)
    {
        $course = $course->get();
        return view('admins.course.index',compact('course'));
    }
}
