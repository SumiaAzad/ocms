<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
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
    //    dd(date('Ymdhms'));
    if($request->hasFile('image'))
    {
        $file=$request->file('image');
        $filename=date('Ymdhms').'.'.$file->getClientOriginalExtension();
        $file->storeAs('/uploads',$filename);
    }
        $request->validate([

            'tid'=>'required',
            'name'=>'required',
            'gender'=>'required',
            'birth'=>'required',
            'mobile'=>'required |max:11',
            'join_date'=>'required',
            'qualification'=>'required',
            'experience'=>'required',
            'email'=>'required',
            'pass'=>'required',
            'address'=>'required',
            'image'=>'required',

        ]);


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
            'image'=>$filename,

       ]);
       return redirect()->back()->with('msg','Teacher form created sucessfully');
   }
}

