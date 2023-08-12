<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Delivery;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Payment;
use App\Models\User;
use Carbon\Carbon;

class OrderController extends Controller
{
    public function show(){
        $orders = Order::all();
        return view('Admin.OrderManagement',compact('orders'));
    }
    public function insert(Request $request){
        if ($request->isMethod('get')) {
            $users = User::all();
            $deliveries = Delivery::all();
            $payments = Payment::all();
            return view('Admin.Create/CreateOrder',['users'=>$users,'deliveries'=>$deliveries,'payments'=>$payments]);
        } elseif ($request->isMethod('post')) {
           

            $orderID = Order::insertGetId([
            'Quantity' => $request->Quantity,
            'OrderDate' => Carbon::now(),
            'total' => $request->Order->total,
            'StatusBill' => 'non_accept',
            'StatusDilevery' => 'prepare',
            'UserID' => Auth::user()->UserID,
            'DeliveryID' => $request->DeliveryID,
            'PaymentID' => $request->DeliveryID,
         ]);
        }
        
        return  redirect()->action([OrderController::class],'create');
    }
    public function update(Request $request){
        if ($request->isMethod('get')) {
            return view('Admin.Update.UpdateOrder');
        } elseif ($request->isMethod('post')) {
            
            return "This is a POST request.";
        }
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