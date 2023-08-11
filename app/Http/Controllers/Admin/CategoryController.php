<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function show(){
        $categories = Category::all();
        return view('Admin.CategoryManagement', compact('categories'));
    }
    public function insert(Request $request){
        if ($request->isMethod('get')) {
            return view('Admin.Create.CreateCategory');
        } elseif ($request->isMethod('post')) {
            $category = new Category;
            $category->CategoryName = $request->name;
            $category->save();
            return redirect('/admin/insert/category');
        }

    }
    public function update(Request $request){
        if ($request->isMethod('get')) {
            return view('Admin.Create.UpdateCategory');
        } elseif ($request->isMethod('path')) {
            $category = Category::find(3);
            $category->CategoryName = "cay chuoi";
            $category->save();
            return "update thanh cong";
        }

    }
    public function delete(Request $request){
        $category = Category::find($request->id);
        $category->delete();
        return redirect('/admin/show/category');
    }
}
