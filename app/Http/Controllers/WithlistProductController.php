<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WithlistProduct;
class WithlistProductController extends Controller
{
    public function show(){

    }
    public function insert($id){
        $wishlist = new WithlistProduct;
        $wishlist->WishlistID = session('WishlistID');
        $wishlist->Product_ID = $id;
        $wishlist->save();
        return "insert thanh cong";
    }
    public function delete($id){
        $wishlist = WithlistProduct::find($id);
        $wishlist->delete();
        return "delete thanh cong";
    }
}