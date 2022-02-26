<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Exam;

class ExamController extends Controller
{
    public function exam(Request $request)
    {
        $search=$request->query('search');
            if($search)
            {
                $exam=Exam::where('class','Like','%'.$search.'%')->get();
                return view('admin.layouts.exam',compact('exam'));
            }
        $exam=Exam::all();
        return view('admin.layouts.exam',compact('exam'));
    }
    public function examAdd()
   {
       return view('admin.pages.exam_add');
   }
   public function store(Request $request)
   {

    $request->validate([
           
            'exam_name'=>'required',
            'class'=>'required',
            'subject'=>'required',
            'start_time'=>'required',
            'end_time'=>'required',
            'date'=>'required',
            'link'=>'required',
       ]);
        Exam::create([

            'exam_name'=>$request->exam_name,
            'class'=>$request->class,
            'subject'=>$request->subject,
            'start_time'=>$request->start_time,
            'end_time'=>$request->end_time,
            'date'=>$request->date,
            'link'=>$request->link,


        ]);
        return redirect()->route('admin.exam')->with('msg','Exam form created sucessfully');

   }
   public function edit($id)
   {
       //dd("$user_id");
       $exam=Exam::find($id);
       //dd($users);
       return view('admin.pages.exam_edit',compact('exam'));
   }

   public function update(Request $request,$id)
   {
       //dd("$user_id");
       $exam=Exam::find($id);
       $exam->update([
          
        'exam_name'=>$request->exam_name,
        'class'=>$request->class,
        'subject'=>$request->subject,
        'start_time'=>$request->start_time,
        'end_time'=>$request->end_time,
        'date'=>$request->date,
        'link'=>$request->link,

       ]);
       return redirect()->route('admin.exam')->with('msg','Updated Sucessfully');
   }

    public function delete($id)
   {
      Exam::find($id)->delete();
      return redirect()->back()->with('msg','Deleted')->with('msg','Exam deleted successfully');
       
   }
}
