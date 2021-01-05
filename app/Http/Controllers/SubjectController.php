<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Subject;
use Illuminate\Http\Request;
use App\Models\RegisInfo;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Subject $subject)
    {
        $subject = $subject->get();
        return view('admins.subject.index',compact('subject'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Course $course)
    {
        $course = $course->get();
        return view('admins.subject.create',compact('course'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,Subject $subject)
    {
        $request->validate([
            'name' => 'required',
            'money' => 'required',
            'date_start' => 'required',
            'date_end' => 'required',
            'content' => 'required',
            'image' => 'required',
        ]);

        if($request->hasFile('image'))
        {
            $file = upload_image('image');
            if(isset($file['name'])){
                $request->image = $file['name'];
            }
        }

        $data = [
            'counrses_id' => $request->counrses_id,
            'name' => $request->name,
            'money' => $request->money,
            'date_start' => $request->date_start,
            'date_end' => $request->date_end,
            'content' => $request->content,
            'image' => $request->image,
        ];
        $subject = $subject->create($data);
        return redirect('admin/subject')->withSuccess('Thêm mới thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function show(Subject $subject)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function edit(Subject $subject, Request $request,$id)
    {
        $request->validate([
            'name' => 'required',
            'money' => 'required',
            'date_start' => 'required',
            'date_end' => 'required',
            'content' => 'required',
        ]);
        if($request->hasFile('image'))
        {
            $file = upload_image('image');
            if(isset($file['name'])){
                $request->image = $file['name'];
            }
        }

        $data = [
            'counrses_id' => $request->counrses_id,
            'name' => $request->name,
            'money' => $request->money,
            'date_start' => $request->date_start,
            'date_end' => $request->date_end,
            'content' => $request->content,
        ];
        if($request->image)
        {
            $data['image'] = $request->image;
        }
        $subject::where('id',$id)->update($data);
        // $subject = $subject->update($id,$data);
        return redirect('admin/subject')->withSuccess('Thêm mới thành công');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subject $subject,Course $course,$id)
    {
        $course = $course->get();
        $subject = $subject->where('id',$id)->first();
        return view('admins.subject.update',compact('subject','course'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function destroy(RegisInfo $regisInfo,Subject $subject,$id, Request $request)
    {
       if($request->ajax())
        {
            if(count($regisInfo->where('subjects_id',$id)->get()) == 0)
            {
                $subject->destroy($id);
                return response()->json(['success' => 'Xóa Thành công']);
            }else{
                return response()->json(['warning' => 'Bạn không thể xóa khóa học khi có người đã đăng ký khóa học này']);
            }
        }
    }
}
