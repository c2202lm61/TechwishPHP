<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Payment;

class PaymentController extends Controller
{
    public function show(){
        return view('Admin.PaymentManagement');
    }

    public function insert(Request $request)
    {
        if ($request->isMethod('get')) {
            return view('Admin.Create.CreatePayment');
        } elseif ($request->isMethod('post')) {

            return "This is a POST request.";
        }
        $payment = new Payment;
        $payment->PaymentName = $request->PaymentName;
        $payment->save();
        return redirect()->action([PaymentController::class],'create');
    }
    public function update(Request $request){
        if ($request->isMethod('get')) {
            return view('Admin.Update.UpdatePayment');
        } elseif ($request->isMethod('post')) {

            return "This is a POST request.";
        }
        $payment = Payment::find(2);
        $payment->PaymentName = "Banking";
        $payment->save();
        return "Update thanh cong";
    }
    public function delete(){
        $payment = Payment::find(2);
        $payment->delete();
        return "Delete thanh cong";
    }
}
