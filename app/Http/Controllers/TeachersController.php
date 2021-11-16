<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
class TeachersController extends Controller
{
    public function teacher()
    {
            $teacher=Teacher::all();
            // dd($teacher);

        return view('admin.layouts.teacher',compact('teacher'));
    }
    public function teacherAdd()
   {
       return view('admin.pages.teacher_add');
   }
   public function store(Request $request)
   {
    //    dd($request->all());
       Teacher::create([

            'tid'=>$request->tid,
            'name'=>$request->name,
            'gender'=>$request->gender,
            'birth'=>$request->birth,
            'mobile'=>$request->mobile,
            'join_date'=>$request->join_date,
            'qualification'=>$request->qualification,
            'experience'=>$request->experience,
            'email'=>$request->email,
            'pass'=>$request->pass,
            'address'=>$request->address,

       ]);
       return redirect()->back();
   }
}

