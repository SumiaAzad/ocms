<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Result;

class StudentResultController extends Controller
{
    public function result()
    {
        
        $data=Result::where('student_id',auth()->user()->student_id)->get();
        return view('website.layouts.student_result',compact('data'));
    }
}
