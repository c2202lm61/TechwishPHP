<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function show(){
        return "";
    }
    public function insert(){
        $category = new Category;
        $category->CategoryName = "cay  canh2";
        $category->save();
        return "insert thanh cong";
    }
    public function update(){
        $category = Category::find(3);
        $category->CategoryName = "cay chuoi";
        $category->save();
        return "update thanh cong";
    }
    public function delete(){
        $category = Category::find(3);
        $category->delete();
        return "delete thanh cong";
    }
}
