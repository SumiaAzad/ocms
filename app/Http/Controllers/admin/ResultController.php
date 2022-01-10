<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Result;

class ResultController extends Controller
{
    public function result()
    {
        $data=Result::all();

        return view('admin.layouts.result',compact('data'));
    }

    public function resultAdd()
    {
        return view('admin.pages.result_add');
    }


    public function store(Request $request)
    {
        Result::create([
            'name'=>$request-> name,
            'student_id'=>$request-> student_id,
            'class'=>$request-> class,
            'subject'=>$request->subject,
            'grade'=>$request->grade,
            'status'=>$request->status,
            

        ]);
        return redirect()->back();
    }
}
