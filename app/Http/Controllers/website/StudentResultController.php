<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Result;
use App\Models\Exam;

class StudentResultController extends Controller
{
    public function result()
    {
        
        $data=Result::where('user_id',auth()->user()->user_id)->get();
        return view('website.layouts.student_result',compact('data'));
    }
    public function exam()
    {
        
        $exam=Exam::where('class',auth()->user()->class)->get();
        return view('website.layouts.student_exam',compact('exam'));
    }
}
