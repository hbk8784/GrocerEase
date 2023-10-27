<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SellerController;
use App\Models\Users;
use App\Http\Controllers\DashController;
use App\Http\Middleware\AuthCheck;
use App\Http\Controllers\OnLoad;

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
Route::get('/', [OnLoad::class, 'load']);

// Route::get('/', function(){
//     return view('app');
// });

Route::view('/login', 'login');
Route::post('/login', [AuthController::class, 'login']);


Route::view('/register', 'signup');
Route::post('/register', [AuthController::class, 'register']);

Route::get('/admin/dashboard', [AuthController::class, 'adminDash'])->middleware('isLogin');
Route::get('/logout', [AuthController::class, 'logOut']);



//customer routes --------------------------------------------------------------------------
Route::prefix('customer')->middleware('isLogin')->group(function(){
    Route::view('/profile', 'profile');
    Route::view('/order/history', 'order-history');
    Route::view('/order/current', 'current-order');
    Route::view('/wishlist', 'wishlist');
    Route::view('/cart', 'cart');
}); //-------------------------------------------------------------------------------------

//seller routes ---------------------------------------------------------------------------
Route::prefix('/seller')->middleware('isLogin')->group(function(){
    Route::get('/dashboard', [AuthController::class, 'sellerDash']);
    Route::view('/orders', 'Seller.pages.order');
    Route::get('/products', [SellerController::class, 'showProducts']);
    Route::view('/add/product', 'Seller.pages.addProduct');
    Route::post('/add/product',[SellerController::class, 'addProducts']);
    Route::view('/view/payment', 'Seller.pages.viewPayments');
    Route::view('/view/customers', 'Seller.pages.viewCustomers');
    Route::view('/invoice', 'Seller.pages.invoice');
});//--------------------------------------------------------------------------------------


Route::get('/invoice', function(){
    return view('invoice');
});
