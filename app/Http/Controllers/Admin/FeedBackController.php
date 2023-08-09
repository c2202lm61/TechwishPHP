<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FeedBack;

class FeedBackController extends Controller
{
    public  function show(){
        $feedback = FeedBack::all();
    }
    public  function insert(){
        $feedback = new FeedBack;
        $feedback->FeedbackContent = "do some thing";
        $feedback->UserID = 1;
        $feedback->save();
        return "insert thanh cong";
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
