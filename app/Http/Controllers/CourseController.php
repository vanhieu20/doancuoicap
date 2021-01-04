<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Subject;

class CourseController extends Controller
{
    // view trang danh sách danh mục khóa học
    public function index(Course $course)
    {
        $course = $course->get();
        return view('admins.course.index',compact('course'));
    }

    public function create()
    {
        return view('admins.course.create');
    }

    public function store(Request $request, Course $course)
    {
        $course = $course->create($request->all());
        return redirect('admin/course')->withSuccess('Thêm mới thành công');
    }

    public function update(Course $course,$id)
    {
        $course = $course->where('id',$id)->first();
        return view('admins.course.update',compact('course'));
    }
    public function edit(Request $request,$id)
    {
        Course::where('id',$id)->update(['name' => $request->name]);
        // $course = $course->update($id,$data);
        return redirect('admin/course')->withSuccess('Cập nhật thành công');
    }

    public function destroy(Request $request, $id,Subject $subject,Course $course)
    {
        if($request->ajax())
        {
            if(count($subject->where('counrses_id',$id)->get()) == 0)
            {
                $course->destroy($id);
                return response()->json(['success' => 'Xóa Thành công']);
            }else{
                return response()->json(['warning' => 'Bạn cần xóa những môn học thuộc khóa học này trước']);
            }
        }
    }
}
