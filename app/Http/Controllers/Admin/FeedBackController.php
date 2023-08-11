<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FeedBack;

class FeedBackController extends Controller
{
    public  function show(){
        $feedbacks = FeedBack::all();
        return view('Admin.FeedbackManagement',compact('feedbacks'));
    }
    public  function insert(Request $request){
        if ($request->isMethod('get')) {
            return view('Admin.Create/CreateFeedback');
        } elseif ($request->isMethod('post')) {

            return "This is a POST request.";
        }
        $feedback = new FeedBack;
        $feedback->FeedbackContent = $request->FeedbackContent;
        $feedback->UserID = session('UserID');
        $feedback->save();
        return  redirect()->route('feedback.get');

    }
    public function edit(Request $request){
        return view('Admin.Update.UpdateFeedback');
    }
    public function update(Request $request, $id){
        $feedback = FeedBack::find($id);
        $feedback->FeedbackContent = $request->FeedbackContent;
        $feedback->save();
        return "update thanh cong";
    }
    public  function delete(Request $request){
        $feedback = FeedBack::find($request->FeedbackID);
        $feedback->delete();
        return "delete thanh cong";
    }
}
