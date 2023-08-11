<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Payment;

class PaymentController extends Controller
{
    public function show(){
        $payments = Payment::all();
        return view('Admin.PaymentManagement',compact('payments'));
    }

    public function insert(Request $request)
    {
        if ($request->isMethod('get')) {
            return view('Admin.Create.CreatePayment');
        } elseif ($request->isMethod('post')) {
            $payment = new Payment;
            $payment->PaymentName = $request->name;
            $payment->save();
            return redirect("/admin/show/payment");
        }

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
    public function delete(Request $request){
        $payment = Payment::find($request->id);
        $payment->delete();
        return redirect("/admin/show/payment");
    }
}
