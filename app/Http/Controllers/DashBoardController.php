<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;
use App\Models\Image;
class DashBoardController extends Controller
{

    public function index(Request $request){
        
        $products = Product::leftJoin('wishlists','wishlists.Product_ID','products.Product_ID')
        ->select('products.*','wishlists.WishlistID')->get();
        foreach($products as $product){
            $product['image'] = Image::where('Product_ID', $product->Product_ID)->first('ImageLink');
        }
        return view('dashboard',compact('products'));
    }
    
}