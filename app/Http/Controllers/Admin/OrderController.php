<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use Carbon\Carbon;

class OrderController extends Controller
{
    public function show(){
        $orders = Order::all();
        return view('Admin.OrderManagement',compact('orders'));
    }
    public function insert(Request $request){
        $orderID = Order::insertGetId([
            'Quantity' => $request->Quantity,
            'OrderDate' => Carbon::now(),
            'total' => $request->Order->total,
            'StatusBill' => 'non_accept',
            'StatusDilevery' => 'prepare',
            'UserID' => session('UserID'),
            'DeliveryID' => $request->DeliveryID,
            'PaymentID' => $request->DeliveryID,
         ]);
        return  redirect()->action([OrderController::class],'create');
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
