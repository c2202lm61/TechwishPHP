<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function show(){

    }
    public function insert(){
        $order = new Order;
        $order->Quantity = 200;
        $order->OrderDate = "2000-11-11";
        $order->total = 300;
        $order->StatusBill = 'non_accept';
        $order->StatusDilevery = 'prepare';
        $order->UserID = 1;
        $order->DeliveryID = 1;
        $order->PaymentID =1;
        $order->save();
        return "insert thanh cong";
    }
    public function update(){
        $order = Order::find(2);
        $order->Quantity = 100;
        $order->OrderDate = "2000-11-12";
        $order->total = 300;
        $order->StatusBill = 'non_accept';
        $order->StatusDilevery = 'prepare';
        $order->UserID = 1;
        $order->DeliveryID = 1;
        $order->PaymentID =1;
        $order->save();
        return "update thanh cong";

    }
    public function delete(){
        $order = Order::find(2);
        $order->delete();
        return "Delete thanh cong";
    }
}
