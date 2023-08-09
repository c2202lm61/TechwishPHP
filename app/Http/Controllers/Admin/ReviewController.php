<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Models\Review;
class ReviewController extends Controller
{
    public function show(){

    }
    public function insert(){
        $review = new Review;
        $review->Rating = '1';
        $review->Comment = 'good';
        $review->UserID = 1;
        $review->Product_ID = 2;
        $review->save();
        return "insert thanh cong";
    }
    public function update(){
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
