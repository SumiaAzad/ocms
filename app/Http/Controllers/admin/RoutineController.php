<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Routine;

class RoutineController extends Controller
{
    public function routine(Request $request)
    {
        $search=$request->query('search');
            if($search)
            {
                $data=Routine::where('class','Like','%'.$search.'%')->get();
                return view('admin.layouts.routine',compact('data'));
            }

        $data=Routine::all();
        return view('admin.layouts.routine',compact('data'));
    }
    public function routineAdd()
    {
        return view('admin.pages.routine_add');
    }
    public function store(Request $request)
    {
        Routine::create([
            'class'=>$request-> class,
            'subject'=>$request->subject,
            'date'=>$request->date,
            'time'=>$request->time,
            'link'=>$request->link,

        ]);
        return redirect()->route('admin.routine')->with('msg','Routine form created sucessfully');
    }

    public function edit($id)
   {
       //dd("$user_id");
       $routine=Routine::find($id);
       //dd($users);
       return view('admin.pages.routine_edit',compact('routine'));
   }

   public function update(Request $request,$id)
   {
       //dd("$user_id");
       $routine=Routine::find($id);
       $routine->update([
          
        'class'=>$request-> class,
        'subject'=>$request->subject,
        'date'=>$request->date,
        'time'=>$request->time,
        'link'=>$request->link,

       ]);
       return redirect()->route('admin.routine')->with('msg','Updated Sucessfully');
   }

    public function delete($id)
   {
      Routine::find($id)->delete();
      return redirect()->back()->with('msg','Deleted')->with('msg','Routine deleted successfully');
       
   }
}
