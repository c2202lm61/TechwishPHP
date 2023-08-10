<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller

{
    public function show(){
        $users = User::all();
        return view('Admin.UserManagement',compact('users'));
    }
    public function create(){
        return redirect('rrrrrr');
    }
    public function insert(Request $request){
        $user =  new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->RoleID = 1;
     //   $user->password = Hash::$request->password;
        $user->save();
        return "Insert thanh cong";
    }
    public function update(){
        $user =  User::find(1);
        $user->name = "PhamQuan1";
        $user->email = "quanqqq11@gmail.com";
        $user->phone = "0322233878";
        $user->RoleID = 1;
        $user->password = "qqqq111";
        $user->save();
        return "Update thanh cong";
    }
    public function delete(){
        $user =  User::find(1);
        $user->delete();
        return "Delete  thanh cong";
    }
}
