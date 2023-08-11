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
            return  redirect("/admin/show/product");
        }


    }

    public function update(Request $request,$id){
        if ($request->isMethod('get')) {
            $product = Product::findOrFail($id);
            return view('Admin.Update.UpdateProduct',compact('product'));
        } elseif ($request->isMethod('patch')) {
            $image1 = DB::table('images')->select('ImageLink')->where('Product_ID', '=', $id)->get();

            foreach ($image1 as $image) {
                $path = storage_path("app/public/$image->ImageLink");
                unlink($path);
            }
            DB::table('images')->where('Product_ID', '=', $request->id)->delete();
            foreach($request->file('images') as $file)
            {
                $imagePath = $file->store('/images','public');
                Image::create([
                "ImageLink"=>$imagePath,
                "Product_ID"=>$id
                ]);
            }

            $product = Product::find($id);
            $product->Name = $request->name;
            $product->Species = $request->species;
            $product->Price = $request->price;
            $product->quantity = $request->quantity;
            $product->Discount = $request->discount;
            $product->save();
            return  redirect("/admin/show/product");
        }

    }
    public function delete(Request $request){

        $images = DB::table('images')->select('ImageLink')->where('Product_ID', '=', $request->id)->get();

        foreach ($images as $image) {
            $path = storage_path("app/public/$image->ImageLink");
            unlink($path);
        }
        DB::table('images')->where('Product_ID', '=', $request->id)->delete();
        $product = Product::find($request->id);
        $product->delete();

        return  redirect("/admin/show/product");
    }
}
