<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/showcart',[CartController::class,'showCart']);
Route::get('/addtocart',[CartController::class,'addToCart']);
Route::get('/removecart',[CartController::class,'removeCart']);




Route::get('/', function () {
    return view('home');
});
Route::get('/login_register', function(){
    return view('login_register');
})->name('login_register');

// ------------------admin---------------------------------------------------------------

Route::get('/product', function(){
    return view('product');
})->name('product');

Route::get('/dashboard', function(){
    return view('dashboard');
})->name('dashboard');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


// admin-------------------------------------------
// Route::get('admin/usermanagement', function(){
//  return view('/Admin/usermanagement');
// })->name('user_management');



Route::get('ordermanagement', function(){
    return view('Admin/OrderManagement');
})->name('ordermanagement');

Route::get('feedback', function(){
    return view('Admin/feedback');
})->name('feedback');
