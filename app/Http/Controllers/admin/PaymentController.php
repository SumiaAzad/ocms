<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Payment;

class PaymentController extends Controller
{
    public function payment()
    {
        $payment=Payment::all();
        return view('admin.layouts.payment',compact('payment'));
    }
    public function paymentAdd()
   {
       return view('admin.pages.payment_add');
   }
   public function store(Request $request)
   {
       $request->validate([
           
        'pay_id'=>'required',
        'pay_type'=>'required',
        'class'=>'required',
        'start_date'=>'required',
        'end_date'=>'required',
        'amount'=>'required',
       ]);
        Payment::create([

            'pay_id'=>$request->pay_id,
            'pay_type'=>$request->pay_type,
            'class'=>$request->class,
            'start_date'=>$request->start_date,
            'end_date'=>$request->end_date,
            'amount'=>$request->amount,


        ]);
        return redirect()->back()->with('msg','Payment form created sucessfully');

   }
}
