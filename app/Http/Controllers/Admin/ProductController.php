<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Http\UploadedFile;
use App\Models\Image;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
use App\Models\PlantCategory;
class ProductController extends Controller
{
    public function index(){

        $categories = Category::all();
        $products = Product::all();
        foreach($products as $product){
            $product['image'] = Image::where('Product_ID', $product->Product_ID)->first('ImageLink');
        }
        return view('product',compact('products','categories'));

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
            $categories = Category::all();
            return view('Admin.Create.CreateProduct',compact('categories'));
        } else if ($request->isMethod('post')) {
            $request->validate(['name'=>'required']);
            $request->validate(['species'=>'required']);
            $request->validate(['price'=>'required']);
            $request->validate(['quantity'=>'required']);
            $request->validate(['discount'=>'required']);
            $request->validate(['description'=>'required']);

            $productID = Product::insertGetId([
                'Name' => $request->name,
                'Species'=> $request->species,
                'Price'=>$request->price,
                'quantity'=>$request->quantity,
                'Discount'=>$request->discount,
                'Description'=> $request->description
             ]);


			$plantCategories = collect($request->product_type)->map(function ($categoryId) use ($productID) {
                return [
                    'CategoryID' => $categoryId,
                    'Product_ID' => $productID,
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            });
            PlantCategory::insert($plantCategories->toArray());

            $imageRecords = [];
            foreach ($request->file('images') as $file) {
                $imagePath = $file->store('/images', 'public');
                $imageRecords[] = [
                    "ImageLink" => $imagePath,
                    "Product_ID" => $productID,
                    "created_at" => now(),
                    "updated_at" => now(),
                ];
            }
            Image::insert($imageRecords);


            return  redirect("/");

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
    public function filter(Request $request){
        $categories = Category::all();
        $products = Product::with('image')->join('plant_categories', 'products.Product_ID', '=', 'plant_categories.Product_ID')
        ->whereIn('plant_categories.CategoryID', $request->product_type)
        ->select('products.*')
        ->distinct('products.Product_ID') // Loại bỏ các bản ghi trùng lặp dựa trên Product_ID
        ->get();
            
        return view('product',compact('products','categories'));
    }


    public function DetailIndex($id){

        $product = Product::with('images')->find($id);
        $product['categories'] = (PlantCategory::join('categories', 'plant_categories.CategoryID', '=', 'categories.CategoryID')
    ->where('plant_categories.Product_ID', $id)
    ->pluck('categories.CategoryName', 'categories.CategoryID')
    ->toArray()) ;
    
        
        
        return View('ProductDetail',compact('product'));
    }
    public function search(Request $request){

        $categories = Category::all();
        $products = Product::with('image')->join('plant_categories', 'products.Product_ID', '=', 'plant_categories.Product_ID')
        ->where('products.Name','like',$request->ProductName .'%' )
        ->select('products.*')
        ->get();
            
        return view('product',compact('products','categories'));
    
        
    }
}