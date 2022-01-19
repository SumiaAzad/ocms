<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class TeacherLoginController extends Controller
{
    public function login()
    {
        return view('website.layouts.teacher_login');
    }
   

    public function doLogin(Request $request){
        // dd($request->all());
        $userpost=$request->except('_token');
            // dd($userpost->email);
        if (Auth::attempt($userpost))
        
         {
            // dd(auth()->user());
            if (auth()->user()->status == "accepted")
             {
                return redirect()->route('website.home')->with('msg','Login Sucessfully');
            } 

            else
             {
                Auth::logout();
            return redirect()->back()->with('msg','Account created Sucessfully but not approved');
            }
            
        }
        else
        return redirect()->route('teacher.login')->with('error','Invalid User Cretentials');
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('website.home')->with('msg','Logout Sucessfully');
    }
}
