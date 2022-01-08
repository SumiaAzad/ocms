<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('website.layouts.login');
    }
   

    public function doLogin(Request $request){
        // dd($request->all());
        $userpost=$request->except('_token');
            // dd($userpost->email);
        if (Auth::attempt($userpost)) {
            // dd("true");
            return redirect()->route('website.home')->with('msg','Login Sucessfully');
        }
        else
        return redirect()->route('user.login')->with('error','Invalid User Cretentials');
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('website.home')->with('msg','Logout Sucessfully');
    }
}
