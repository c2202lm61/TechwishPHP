<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WithlistProduct;
class WithlistProductController extends Controller
{
    public function show(){

    }
    public function insert(){
        $wishlist = new WithlistProduct;
        $wishlist->WishlistID =1;
        $wishlist->Product_ID = 1;
        $wishlist->save();
        return "insert thanh cong";
    }
    public function update(){
        $wishlist = WithlistProduct::find(1);
        $wishlist->WishlistID =1;
        $wishlist->Product_ID = 1;
        $wishlist->save();
        return "update thanh cong";
    }
    public function delete(){
        $wishlist = WithlistProduct::find(1);
        $wishlist->delete();
        return "delete thanh cong";
    }
}
