<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Models\Review;
class ReviewController extends Controller
{
    public function show(){
        $reviews = Review::all();
        return view('Admin.ReviewManagement',compact('reviews'));
    }
    public function insert(Request $request){
        if ($request->isMethod('get')) {
            return view('Admin.Create.CreateReview');
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
    public function update(Request $request, $id){
        if ($request->isMethod('get')) {
            return view('Admin.Update.UpdateReview');
        } elseif ($request->isMethod('post')) {

            return "This is a POST request.";
        }
        $review = Review::find($id);
        $review->Rating = $request->Rating;
        $review->Comment = $request->Comment;
        $review->UserID = session('UserID');
        $review->Product_ID = $request->Product_ID;
        $review->save();
        return "update thanh cong";
    }
    public function delete(Request $request){
        $review = Review::find($request->ReviewID);
        $review->delete();
        return "delete thanh cong";
    }
}