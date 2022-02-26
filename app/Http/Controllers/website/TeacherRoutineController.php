<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Routine;
use App\Models\Exam;


class TeacherRoutineController extends Controller
{
    public function routine()
    {
        
        $data=Routine::where('subject',auth()->user()->subject)->get();
        return view('website.layouts.teacher_routine',compact('data'));
    }

    
    public function exam()
    {
        
        $exam=Exam::where('subject',auth()->user()->subject)->get();
        return view('website.layouts.teacher_exam',compact('exam'));
    }

}
