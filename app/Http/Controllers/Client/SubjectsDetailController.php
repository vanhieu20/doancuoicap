<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\RegisInfo;
use App\Models\Student;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubjectsDetailController extends Controller
{
    public function subjects(Subject $subject,$id,RegisInfo $regisInfo)
    {
        $detailSubject = $subject->find($id);
        $idCourses = $detailSubject->counrses_id;
        $relatedSubjects = $subject->where('counrses_id',$idCourses)->where('id', '!=', $id)->get();
        $checkRegis = '';
        if(Auth::user()){
            $checkRegis = $regisInfo->where([
                'subjects_id' => $id,
                'student_id' => Auth::user()->id,
                ])->first();
            }
        // dd($checkRegis);
        return view('client.pages.SubjectsDetail',compact('detailSubject','relatedSubjects','checkRegis'));
    }

    public function regis_subjects($id,RegisInfo $regisInfo,Subject $subject)
    {
        $user = Auth::user();
        if($user)
        {
            $subjects = $subject->find($id);
            $money = $subjects->money;
            $data_regis = [
                'subjects_id' => $id,
                'student_id' => $user->id,
                'money' => $money,
            ];

            $checkRegis = $regisInfo->where([
                'subjects_id' => $id,
                'student_id' => $user->id,
            ])->first();

            if($checkRegis){
                return redirect()->back()->with('danger','Bạn đã đăng kí khoa học này rồi.Vui lòng kiểm tra lại.');
            }else{
                $regisInfo->create($data_regis);
                return redirect()->back()->with('success','Đăng ký thành công');
            }
        }else{
            return redirect(route('SignUp'))->with('warning','Bạn cần đăng nhập trước khi đăng kí khóa học.');
        }
    }

    public function cancel_regis_subjects($id,RegisInfo $regisInfo)
    {
        $user = Auth::user();
        $checkRegis = $regisInfo->where([
            'subjects_id' => $id,
            'student_id' => $user->id,
        ])->delete();
        return redirect()->back()->with('success','Hủy đăng ký khóa học thành công');
    }
}
