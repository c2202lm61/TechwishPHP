<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\DashBoardController;
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



Route::get('/', [DashBoardController::class, 'index'])->name('dashboard');

Route::get('/login_register', function(){
    return view('login_register');
})->name('login_register');

// ------------------product---------------------------------------------------------------

Route::get('/product',[ProductController::class, 'index'])->name('product');
Route::post('/product',[ProductController::class, 'filter'])->name('product');
Route::get('/product/{id}',[ProductController::class, 'DetailIndex'])->name('product/detail');






Route::get('/dashboard', function () {
    return redirect("/");
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

Route::get('cart', function(){
    return view('cart');
})->name('cart');

Route::get('ProductDetail', function(){
    return view('ProductDetail');
})->name('ProductDetail');

Route::get('ContactUs', function(){
    return view('ContactUs');
})->name('contactus');

Route::get('Checkout', function(){
    return view('Checkout');
})->name('checkout');