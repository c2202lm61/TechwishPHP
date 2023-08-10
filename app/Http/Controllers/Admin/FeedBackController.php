<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\feedback;
use App\Models\FeedBack as ModelsFeedBack;

class FeedBackController extends Controller
{
    public  function show(){
        $feedbacks = ModelsFeedBack::all();
        return view('Admin.FeedbackManagement',compact('feedbacks'));
    }
    public function create(){
        return redirect("dien vao");
    }
    public  function insert(Request $request){
        $feedback = new feedback;
        $feedback->FeedbackContent = $request->FeedbackContent;
        $feedback->UserID = session('UserID');
        $feedback->save();
        return  redirect()->action([FeedBackController::class],'create');

    }
    public  function update(){
        $feedback = FeedBack::find(2);
        $feedback->FeedbackContent = "do some thing1";
        $feedback->UserID = 1;
        $feedback->save();
        return "update thanh cong";
    }
    public  function delete(){
        $feedback = FeedBack::find(2);
        $feedback->delete();
        return "delete thanh cong";
    }
}
