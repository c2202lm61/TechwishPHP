<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
class CartControllerBeta extends Controller
{
    public function showCart(Request $request){
        print_r(Session::get('Cart'));
    }
    public  function addToCart(Request $request){
        $cart = Session::get('Cart', []);
        $product = [
            'id' => 1,
            'name' => 'Product A',
            'price' => 100,
            'quantity' => 1,
        ];
        if (array_key_exists($product['id'], $cart)) {
            $cart[$product['id']]['quantity'] += $product['quantity'];
        } else {
            $cart[$product['id']] = $product;
        }
        Session::put('Cart', $cart);
    }
    public function updateToCart(Request $request){
        $cart = Session::get('Cart', []);
        $product = [
            'id' => 2,
            'name' => 'Product A',
            'price' => 100,
            'quantity' => 7,
        ];
        $cart[$product['id']]['quantity'] = $product['quantity'];
        Session::put('Cart', $cart);
    }
    public function deleteToCart(){
        $id =1;
        $cart = Session::get('Cart', []);
        if (array_key_exists($id, $cart)) {
            unset($cart[$id]);
            Session::put('Cart', $cart);
            Session::save();
        }
    }
    public function deleteAllCart(){
        Session::forget('Cart');
    }
}
