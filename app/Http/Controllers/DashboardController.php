<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dash()
    {
        return view('admin.layouts.dashboard');
    }
}
