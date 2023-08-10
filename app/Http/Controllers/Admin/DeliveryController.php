<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Delivery;
class DeliveryController extends Controller
{
    public function show(){

    }
    public function create(){
        return redirect('sdads');
    }
    public function insert(Request $request){
        $delivery = new Delivery;
        $delivery->Name = $request->Name;
        $delivery->save();
        return "insert thanh cong";
        }
    public function update(){
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