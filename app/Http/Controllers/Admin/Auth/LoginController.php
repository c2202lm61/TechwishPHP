<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        if ($request->getMethod() == 'GET') {
            return view('admin.auth.login');
        }

        $credentials = $request->only(['email', 'password']);
        if (Auth::guard('admin')->attempt($credentials)) {
            if(Auth::guard('admin')->check()){
                return redirect("/admin");
            }
            else{
                return "that bai roi be oi";
            }
           // return redirect("/admin");
        } else {
           // return redirect()->back()->withInput();
           return "Dang nhap that bai";
        }
    }
}
