<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Image;
use Illuminate\Support\Facades\DB;
class ProductController extends Controller
{
    public function show(){

    }
    public function insert(){
        $productID = Product::insertGetId([
            'Name' => 'Janvi Singh',
            'Species'=> 'species',
            'Price'=>10,
            'Discount'=>4,
            'Description'=>'do some thing'
         ]);

        $images = [
            ['Product_ID' => $productID, 'ImageLink' => 'url_hinh_anh_1'],
            ['Product_ID' => $productID, 'ImageLink' => 'url_hinh_anh_2'],
            // ...
        ];

        foreach ($images as $imageData) {
            Image::create($imageData);
        }
        return "insert thanh cong";
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
