<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Models\Users;
use App\Http\Controllers\DashController;
use App\Http\Middleware\AuthCheck;

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
Route::view('/', 'app');

Route::view('/login', 'login');
Route::post('/login', [AuthController::class, 'login']);


Route::view('/register', 'signup');
Route::post('/register', [AuthController::class, 'register']);

Route::get('/admin/dashboard', [AuthController::class, 'adminDash'])->middleware('isLogin');
Route::get('/logout', [AuthController::class, 'logOut']);

Route::get('/profile', function(){
    return view('profile');
});

Route::get('/order/history', function(){
    return view('order-history');
});
Route::get('/order/current', function(){
    return view('current-order');
});

Route::get('/wishlist', function(){
    return view('wishlist');
});

Route::get('/cart', function(){
    return view('cart');
});

Route::get('/seller/dashboard', function(){
    return view('Seller.seller-dash');
});

Route::get('/seller/orders', function(){
    return view('Seller.pages.order');
});

Route::get('/seller/products', function(){
    return view('Seller.pages.products');
});

Route::get('/seller/add/product', function(){
    return view('Seller.pages.addProduct');
});

Route::get('/seller/view/payment', function(){
    return view('Seller.pages.viewPayments');
});

Route::get('/seller/view/customers', function(){
    return view('Seller.pages.viewCustomers');
});

Route::get('seller/invoice', function(){
    return view('Seller.pages.invoice');
});
