<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classes;

class ClassController extends Controller
{
    public function class()
    {
        $class=Classes::all();
        return view('admin.layouts.class',compact('class'));
    }
    public function classAdd()
   {
       return view('admin.pages.class_add');
   }
   public function store(Request $request)
   {
        Classes::create([

            'class'=>$request->class,
            'section'=>$request->section,
            'subject'=>$request->subject,
            'date'=>$request->date,
            'start_time'=>$request->start_time,
            'end_time'=>$request->end_time,
            'link'=>$request->link,


        ]);
        return redirect()->back();

   }
}
