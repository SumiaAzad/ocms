<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Result;
class TeacherResultController extends Controller
{
    public function result()
    {
        $data=Result::all();

        return view('website.layouts.teacher_see_result',compact('data'));
    }

    public function resultAdd()
    {
        return view('website.layouts.teacher_add_result');
    }


    public function store(Request $request)
    {
        Result::create([
            'name'=>$request-> name,
            'user_id'=>$request-> user_id,
            'class'=>$request-> class,
            'subject'=>$request->subject,
            'grade'=>$request->grade,
            'status'=>$request->status,
            

        ]);
        return redirect()->back();
    }
    public function edit($id)
    {
        //dd("$user_id");
        $result=Result::find($id);
        //dd($users);
        return view('website.layouts.teacher_edit_result',compact('result'));
    }
 
    public function update(Request $request,$id)
    {
        //dd("$user_id");
        $result=Result::find($id);
        $result->update([
           
            'name'=>$request-> name,
            'user_id'=>$request-> user_id,
            'class'=>$request-> class,
            'subject'=>$request->subject,
            'grade'=>$request->grade,
            'status'=>$request->status,
            
 
        ]);
        return redirect()->route('website.teacher.result')->with('msg','Updated Sucessfully');
    }
 
     public function delete($id)
    {
       Result::find($id)->delete();
       return redirect()->back()->with('msg','Deleted');
        
    }
}
