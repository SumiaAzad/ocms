<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
class StudentsController extends Controller
{
   public function student(Request $request)
   {   
    $search=$request->query('search');
    if($search)
    {
        $users=User::where('class','Like','%'.$search.'%')
        ->orwhere('user_id','Like','%'.$search.'%')->get();
        return view('admin.layouts.student',compact('users'));
    }
    $users = User::all();
    //    dd($student);

       return view('admin.layouts.student',compact('users'));
   }

   public function studentAdd()
   {
       return view('admin.pages.student_add');
   }
   public function store(Request $request)
   {



    if($request->hasFile('image'))
    {
        $file=$request->file('image');
        $filename=date('Ymdhms').'.'.$file->getClientOriginalExtension();
        $file->storeAs('/uploads',$filename);
    }

    $request->validate([
        
        'name'=>'required',
        'gender'=>'required',
        'birth'=>'required',
        'class'=>'required',
        'mobile'=>'required |max:11',
        'email'=>'required',
        'password'=>'required',
        'father_name'=>'required',
        'father_mobile'=>'required |max:11',
        'mother_name'=>'required',
        'mother_mobile'=>'required |max:11',
        'address'=>'required',
        'image'=>'required',

    ]);
    //    dd($request->all());
       Student::create([
        
        'name'=>$request->name,
        'gender'=>$request->gender,
        'birth'=>$request->birth,
        'class'=>$request->class,
        'mobile'=>$request->mobile,
        'email'=>$request->email,
        'password'=>bcrypt( $request->password),
        'father_name'=>$request->father_name,
        'father_mobile'=>$request->father_mobile,
        'mother_name'=>$request->mother_name,
        'mother_mobile'=>$request->mother_mobile,
        'address'=>$request->address,
        'image'=>$filename,



       ]);
       return redirect()->back()->with('msg','Student form created sucessfully');
   }
   public function pending($id)
   {
       $users=User::find($id);
       $users->update([
        'status'=>'accepted'
       ]);
       return redirect()->back();
   }
   public function view($id)
   {
       //dd("$user_id");
       $users=User::find($id);
       //dd($users);
       return view('admin.pages.student_view',compact('users'));
   }

   public function edit($id)
   {
       //dd("$user_id");
       $users=User::find($id);
       //dd($users);
       return view('admin.pages.student_edit',compact('users'));
   }

   public function update(Request $request,$id)
   {
       //dd("$user_id");
       $users=User::find($id);
       $users->update([
          
           'name'=>$request->name,
       'gender'=>$request->gender,
       'mobile'=>$request->mobile,
       'email'=>$request->email,
       'password'=>$request->password,
       'address'=>$request->address,
       'image'=>$request->image,

       ]);
       return redirect()->route('admin.student')->with('msg','Updated Sucessfully');
   }


   public function delete($id)
   {
      User::find($id)->delete();
      return redirect()->back()->with('msg','Deleted')->with('msg','Student deleted successfully');
       
   }
  
}
