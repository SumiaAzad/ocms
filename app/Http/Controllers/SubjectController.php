<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;

class SubjectController extends Controller
{
    public function subject()
    {
        $subject=Subject::all();

        return view('admin.layouts.subject',compact('subject'));
    }
    public function subjectAdd()
   {
       return view('admin.pages.subject_add');
   }
   public function store(Request $request)
   {
        Subject::create([

            'sub_id'=>$request->sub_id,
            'sub_name'=>$request->sub_name,
            'class'=>$request->class,

        ]);
        return redirect()->back();
   }
}
