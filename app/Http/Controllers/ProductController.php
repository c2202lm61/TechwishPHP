<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\User;

class ProductController extends Controller
{
    public function index(){
        return view('home',compact('product'));
    }

    public function store(Request $request){
        $product = new Product();
        $product->name = $request->name;
        $product->Species = $request->Species;
        $product->Price = $request->Price;
        
        $product->quantity = $request->quantity;
        $product->Discount = $request->Discount;
        $product->Description = $request->Description;
        $product->save();
        return redirect("admin/addproduct");
    }
    
}