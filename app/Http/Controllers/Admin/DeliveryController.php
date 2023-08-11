<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Delivery;
class DeliveryController extends Controller
{
    public function show(){
        $deliveries = Delivery::all();
        return view('Admin.DeliveryManagement', compact('deliveries'));
    }
    public function insert(Request $request){
        if($request->isMethod('get')){
            return view('Admin.Create/CreateDelivery');
        }else if($request->isMethod('post')){

        }
        $delivery = new Delivery;
        $delivery->Name = $request->Name;
        $delivery->save();
        return "insert thanh cong";
        }
    public function update(Request $request){
        if($request->isMethod('get')){
            return view('Admin.Update.UpdateDelivery');
        }else if($request->isMethod('post')){

        }
        $delivery = Delivery::find(2);
        $delivery->Name = "devlivery2";
        $delivery->save();
        return 'update  thanh cong';
    }
    public function delete(){
        $delivery = Delivery::find(2);
        $delivery->delete();
        return 'delete thanh cong';
    }
}
