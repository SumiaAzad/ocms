<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
class StudentsController extends Controller
{
   public function student()
   {   
       
       return view('admin.layouts.student');
   }

   public function studentAdd()
   {
       return view('admin.pages.student_add');
   }
   public function store(Request $request)
   {
    //    dd($request->all());
       Student::create([

        'sid'=>$request->sid,
        'name'=>$request->name,
        'class'=>$request->class,
        'email'=>$request->email,
        'mobile'=>$request->mobile,
        'address'=>$request->address



       ]);
       return redirect()->back();
   }
}
