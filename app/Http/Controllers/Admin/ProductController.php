<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Http\UploadedFile;
use App\Models\Image;
use Illuminate\Support\Facades\DB;
class ProductController extends Controller
{
    public function index(){

        $products = Product::all();
        foreach($products as $product){
            $product['image'] = Image::where('Product_ID', $product->Product_ID)->first('ImageLink');
        }
        return view('product',compact('products'));

    }
    public function show(){

        $products = Product::all();
        foreach($products as $product){
            $product['image'] = Image::where('Product_ID', $product->Product_ID)->first('ImageLink');
        }
        return view('Admin.ProductManagement',compact('products'));

    }
    public function insert(Request $request){

        if ($request->isMethod('get')) {
            return view('Admin.Create.CreateProduct');
        } else if ($request->isMethod('post')) {
            $productID = Product::insertGetId([
                'Name' => $request->name,
                'Species'=> $request->species,
                'Price'=>$request->price,
                'quantity'=>$request->quantity,
                'Discount'=>$request->discount,
                'Description'=> $request->description
             ]);
            foreach($request->file('images') as $file)
			{
			   $imagePath = $file->store('/images','public');
               Image::create([
                "ImageLink"=>$imagePath,
                "Product_ID"=>$productID
                ]);
			}
            return  redirect("/");
        }


    }

    public function update(Request $request){
        if ($request->isMethod('get')) {
            return view('Admin.Update.UpdateProduct');
        } elseif ($request->isMethod('post')) {

            return "This is a POST request.";
        }
        $product = Product::find(2);
        $product->Name = "PhamQuan1";
        $product->Species = "sp";
        $product->Price = 8;
        $product->Discount = 2;
        $product->save();
        return "update thanh cong";
    }
    public function delete(Request $request){

        $images = DB::table('images')->select('ImageLink')->where('Product_ID', '=', $request->id)->get();

        foreach ($images as $image) {
            $path = storage_path("app/$image->ImageLink");
            unlink($path);
        }
        DB::table('images')->where('Product_ID', '=', $request->id)->delete();
        $product = Product::find($request->id);
        $product->delete();

       return "delete thanh cong";
    }
}