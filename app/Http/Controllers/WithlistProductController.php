<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wishlist;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class WithlistProductController extends Controller
{
    public function show(){
            $wishlists = Product::with('image')->join('wishlists', 'products.Product_ID', '=','wishlists.Product_ID')
            ->where('wishlists.UserID',Auth::user()->UserID)
            ->select('products.*','wishlists.WishlistID')
            ->get();
        return view('whishlist', compact('wishlists'));
    }
    public function insert($id){
        $wishlist = new Wishlist;
        $wishlist->UserID = Auth::user()->UserID ;
        $wishlist->Product_ID = $id;
        $wishlist->save();
        return redirect()->route('whislist');
    }
    public function delete($id){
        $wishlist = Wishlist::find($id);
        $wishlist->delete();
        return redirect()->route('whislist');
    }
}