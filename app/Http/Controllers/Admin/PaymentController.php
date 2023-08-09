<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Payment;

class PaymentController extends Controller
{
    public function show(){

    }
    public function insert(){
        $payment = new Payment;
        $payment->PaymentName = "Tien  mat";
        $payment->save();
        return "Insert thanh cong";
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
