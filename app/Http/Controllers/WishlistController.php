<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    public function show(){
        $products = Product::join('wishlists', 'products.UserID', '=', 'wishlists.UserID')
        ->select('products.*', 'wishlists.*');
        print_r($products);
      //  return view('whishlist',compact('products'));
    }
    public function changeFavorite($id){
        $userID = Auth::user()->UserID;
        if (Wishlist::where('UserID', $userID)->where('Product_ID',$id)->exists()) {
            echo "Dữ liệu tồn tại.";
        } else {
            echo "Dữ liệu không tồn tại.";
        }
    }

}
