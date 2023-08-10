<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Models\Review;
class ReviewController extends Controller
{
    public function show(){

    }
    public function insert(Request $request){
        if ($request->isMethod('get')) {
            return "This is a GET request.";
        } elseif ($request->isMethod('post')) {

            return "This is a POST request.";
        }
        $review = new Review;
        $review->Rating = $request->Rating;
        $review->Comment = $request->Comment;
        $review->UserID = session('UserID');
        $review->Product_ID = $request->Product_ID;
        $review->save();
        return "insert thanh cong";
    }
    public function update(Request $request){
        if ($request->isMethod('get')) {
            return "This is a GET request.";
        } elseif ($request->isMethod('post')) {

            return "This is a POST request.";
        }
        $review = Review::find(3);
        $review->Rating = '5';
        $review->Comment = 'good';
        $review->UserID = 1;
        $review->Product_ID = 2;
        $review->save();
        return "update thanh cong";
    }
    public function delete(){
        $review = Review::find(3);
        $review->delete();
        return "delete thanh cong";
    }
}
