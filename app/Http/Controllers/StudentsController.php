<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
class StudentsController extends Controller
{
   public function student()
   {   
       $student = Student::all();
    //    dd($student);

       return view('admin.layouts.student',compact('student'));
   }

   public function studentAdd()
   {
       return view('admin.pages.student_add');
   }
   public function store(Request $request)
   {
    //    dd($request->all());
       Student::create([
        
        'name'=>$request->name,
        'sid'=>$request->sid,
        'gender'=>$request->gender,
        'birth'=>$request->birth,
        'class'=>$request->class,
        'join'=>$request->join,
        'mobile'=>$request->mobile,
        'admission_number'=>$request->admission_number,
        'section'=>$request->section,
        'email'=>$request->email,
        'father_name'=>$request->father_name,
        'father_mobile'=>$request->father_mobile,
        'mother_name'=>$request->mother_name,
        'mother_mobile'=>$request->mother_mobile,
        'address'=>$request->address



       ]);
       return redirect()->back();
   }
}
