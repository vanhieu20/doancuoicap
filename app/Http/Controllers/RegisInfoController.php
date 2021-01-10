<?php

namespace App\Http\Controllers;

use App\Models\RegisInfo;
use Illuminate\Http\Request;

class RegisInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(RegisInfo $regisInfo, Request $request)
    {
        $regisInfo = $regisInfo->get();
        if($request->ajax())
        {
            $listRegis = $regisInfo->where([
                'id' => $request->id_regis,
            ])->first();

            $data = [
                'status' => $request->status,
            ];
            RegisInfo::where('id', $request->id_regis)->update($data);

            return response()->json(['success'=>'Cập nhật trạng thái thành công!']);
        }
        return view('admins.listRegis.index',compact('regisInfo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RegisInfo  $regisInfo
     * @return \Illuminate\Http\Response
     */
    public function show(RegisInfo $regisInfo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RegisInfo  $regisInfo
     * @return \Illuminate\Http\Response
     */
    public function edit(RegisInfo $regisInfo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RegisInfo  $regisInfo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RegisInfo $regisInfo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RegisInfo  $regisInfo
     * @return \Illuminate\Http\Response
     */
    public function destroy(RegisInfo $regisInfo)
    {
        //
    }

    public function information(Request $request,$id,RegisInfo $regisInfo){
        if($request->ajax())
        {
            $information = $regisInfo->where('regis_infos.id',$id)
            ->leftJoin('users','regis_infos.student_id', '=', 'users.id' )
            ->select('users.*')->first();
            $html = view('admins.listRegis.information',compact('information'))->render();
            return \response()->json($html);
        }
    }

    public function mySubject(Request $request,$id,RegisInfo $regisInfo){
        if($request->ajax())
        {
            $subjects = $regisInfo->where('regis_infos.id',$id)
            ->leftJoin('subjects','regis_infos.subjects_id', '=', 'subjects.id')
            ->leftJoin('courses','subjects.counrses_id', '=','courses.id')
            ->select('subjects.*','courses.name as nameCourse')->first();
            $html = view('admins.listRegis.mySubject',compact('subjects'))->render();
            return \response()->json($html);
        }
    }
}
