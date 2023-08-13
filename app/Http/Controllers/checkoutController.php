<?php

namespace App\Http\Controllers;

use App\Models\Delivery;
use App\Models\Payment;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Http\Controllers\CartControllerBeta;
use App\Models\Order;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class checkoutController extends Controller
{
    public function checkout(){
        $deliveries =  Delivery::all();
        $payments  = Payment::all();
        $carts = Session::get('Cart', []);
        $cartTotal =  new CartControllerBeta();
        $total = $cartTotal->CartTotal();
        $tax = (5/100) *$total;
        $ship = 7;
        $grandTotal = $total + $tax  + $ship;
        return  view('Checkout', [
            'deliveries'=>$deliveries,
            'payments'=>$payments,
            'carts'=>$carts,
            'total'=>$total,
            'tax' => $tax,
            'ship' => $ship,
            'grandTotal' => $grandTotal
        ]);
    }
    public function checkin(Request $request){
        $order = new Order;
        $order->OrderDate = Carbon::now();
        $order->total = $request->grandtotal;
        $order->StatusBill = 'non_accept';
        $order->StatusDilevery =  'prepare';
        $order->UserID = Auth::user()->UserID;
        $order->DeliveryID = $request->delevery;
        $order->PaymentID = $request->payment;
        $order->save();
        $carts = new CartControllerBeta;
        $carts->deleteAllCart();
        return "success";
    }
}
