<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Routine;

class RoutineController extends Controller
{
    public function routine()
    {
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
        return redirect()->back();
    }
}
