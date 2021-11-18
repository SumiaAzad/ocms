<?php

namespace App\Http\Controllers;

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
        Payment::create([

            'pay_id'=>$request->pay_id,
            'pay_type'=>$request->pay_type,
            'class'=>$request->class,
            'start_date'=>$request->start_date,
            'end_date'=>$request->end_date,
            'amount'=>$request->amount,


        ]);
        return redirect()->back();

   }
}
