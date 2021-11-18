<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Exam;

class ExamController extends Controller
{
    public function exam()
    {
        $exam=Exam::all();
        return view('admin.layouts.exam',compact('exam'));
    }
    public function examAdd()
   {
       return view('admin.pages.exam_add');
   }
   public function store(Request $request)
   {
        Exam::create([

            'exam_name'=>$request->exam_name,
            'class'=>$request->class,
            'subject'=>$request->subject,
            'start_time'=>$request->start_time,
            'end_time'=>$request->end_time,
            'date'=>$request->date,
            'link'=>$request->link,


        ]);
        return redirect()->back();

   }
}
