<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ShowstudentController extends Controller
{
    public function student()
   {
       return view('website.pages.student_signup');
   }
   public function studentSignup(Request $request)
   {
    // dd($request->all());

    if($request->hasFile('image'))
    {
        $file=$request->file('image');
        $filename=date('Ymdhms').'.'.$file->getClientOriginalExtension();
        $file->storeAs('/uploads',$filename);
    }

    $request->validate([
        
        'name'=>'required',
        'user_id'=>'required',
        'gender'=>'required',
        'mobile'=>'required |max:11',
        'email'=>'required',
        'password'=>'required',
        'address'=>'required',
        'image'=>'required',

    ]);
    
    User::create([
        'name'=>$request->name,
        'user_id'=>$request->user_id,
        'gender'=>$request->gender,
        'birth'=>$request->birth,
        'class'=>$request->class,
        'subject'=>$request->subject,
        'join'=>$request->join,
        'mobile'=>$request->mobile,
        'role'=>$request->role,
        'email'=>$request->email,
        'password'=>bcrypt( $request->password),
        'father_name'=>$request->father_name,
        'father_mobile'=>$request->father_mobile,
        'mother_name'=>$request->mother_name,
        'mother_mobile'=>$request->mother_mobile,
        'address'=>$request->address,
        'image'=>$filename,
    ]);
    return redirect()->back()->with('msg','Form created sucessfully');
    
}

}
