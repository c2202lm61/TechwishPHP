<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Payment;

class PaymentController extends Controller
{
    public function show(){

    }
    public function create()
    {
        return redirect("viet vao sau");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $payment = new Payment;
        $payment->PaymentName = $request->PaymentName;
        $payment->save();
        return redirect()->action([PaymentController::class],'create');
    }
    public function update(){
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