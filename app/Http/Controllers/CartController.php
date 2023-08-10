<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addToCart(Request $request){
        if(!$request->session()->has('cart')){
            $request->session()->put("cart",[]);
        }
        $cart1 = $request->session()->get('cart');
        array_push($cart1,[1,"Game","sp1",10,1000, 5]);
        $request->session()->put("cart",$cart1);
        $cart = $request->session()->get("cart");
        return $cart;
    }
    public function showCart(Request $request){

        if($request->session()->has('cart')){
            return $request->session()->get('cart');
        }
    }
    public function removeCart(Request $request){
        $request->session()->forget('cart');
        return "Xoa du lieu thanh cong";
    }
    public function removeAllCart(){

    }


}
