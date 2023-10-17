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




Route::prefix('customer')->group(function(){
    Route::view('/profile', 'profile');
    Route::view('/order/history', 'order-history');
    Route::view('/order/current', 'current-order');
    Route::view('/wishlist', 'wishlist');
    Route::view('/cart', 'cart');
});

Route::prefix('/seller')->group(function(){
    Route::view('/dashboard','Seller.seller-dash');
    Route::view('/orders', 'Seller.pages.order');
    Route::view('/products', 'Seller.pages.products');
    Route::view('/add/product', 'Seller.pages.addProduct');
    Route::view('/view/payment', 'Seller.pages.viewPayments');
    Route::view('/view/customers', 'Seller.pages.viewCustomers');
    Route::view('/invoice', 'Seller.pages.invoice');
});


