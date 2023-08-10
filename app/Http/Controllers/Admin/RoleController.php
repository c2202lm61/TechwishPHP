<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Role;
use Illuminate\Support\Facades\DB;

class RoleController extends Controller
{
    public function show(){
        return view("Admin.RoleManagement");
    }
    public function create(){
        return redirect('iiii');
    }
    public function insert(Request $request){
        if ($request->isMethod('get')) {
            return view('Admin.Create.CreateRole');
        }else if ($request->isMethod('post')) {

            return "This is a POST request.";
        }
        $role =  new Role;
        $role->RoleName = $request->RoleName;
        $role->save();
        return "insert thanh cong";
    }
    public function update(Request $request){
        if ($request->isMethod('get')) {
            return view('Admin.Update.UpdateRole');
        } elseif ($request->isMethod('post')) {

            return "This is a POST request.";
        }
        DB::table('roles')
            ->where('RoleID', 1)
            ->update(['RoleName' => "khach"]);
        return "update thanh cong";
    }
    public function delete(){
        DB::table('roles')->where('RoleID', '=', 2)->delete();
        return "Delete thanh cong";
    }
}
