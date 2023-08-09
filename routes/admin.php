<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Middleware\checkAdmin;
    // Route::get('/', function () {
    //     return view('Admin.HomePage');
    // });
    Route::get('/adminLogin', function () {
        return view('Admin.Auth.login');
    });
    Route::get('/adminRegister', function () {
        return view('Admin.Auth.register');
    });
    Route::get('/adminProfile', function () {
        return view('Admin.Auth.profile');
    });


    Route::match(['get', 'post'], '/adminlogin1', [LoginController::class, 'login'])->name('admin.login');
    // Route::middleware('auth:admin')->group(function (){
    //     Route::get('/admin', [HomeController::class, 'index'])->name('dashboard');
    // });

    // Route::get('/', function () {
    //     return view('Admin.HomePage');
    // });
?>
