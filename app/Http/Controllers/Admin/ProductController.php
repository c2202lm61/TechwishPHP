<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\image;
use Illuminate\Support\Facades\DB;
class ProductController extends Controller
{
    public function show(){
        return view('Admin.ProductManagement');
    }
    public function insert(Request $request){
        $productID = Product::insertGetId([
            'Name' => $request->Name,
            'Species'=> $request->species,
            'Price'=>$request->Price,
            'Discount'=>$request->Discount,
            'Description'=> $request->Description
         ]);



        foreach ( $request['image'] as $image) {
            image::create([
                'imageLink'=>$image->imageLink,
                'Product_ID'=> $productID,
            ]);
        }
        return  redirect()->action([PaymentController::class],'create');
    }

    public function update(){
        $product = Product::find(2);
        $product->Name = "PhamQuan1";
        $product->Species = "sp";
        $product->Price = 8;
        $product->Discount = 2;
        $product->save();
        return "update thanh cong";
    }
    public function delete(){
        DB::table('images')->where('Product_ID', '=', 5)->delete();
        $product = Product::find(5);
        $product->delete();

        return "delete thanh cong";
    }
}
