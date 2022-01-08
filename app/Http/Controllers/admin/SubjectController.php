<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subject;
use App\Models\Classes;

class SubjectController extends Controller
{
    public function subject()
    {
        $subject=Subject::with('class')->get();
        // dd($subject);
        return view('admin.layouts.subject',compact('subject'));
    }
    public function subjectAdd()
   {
       $data=Classes::all();
       return view('admin.pages.subject_add',compact('data'));
   }
   public function store(Request $request)
   {
    $request->validate([
            'teacher'=>'required',
            'sub_name'=>'required',
            'class'=>'required',
    ]);

        Subject::create([

            'teacher'=>$request->teacher,
            'sub_name'=>$request->sub_name,
            'classes_id'=>$request->class,

        ]);
        return redirect()->back()->with('msg','Subject form created sucessfully');
   }
}
