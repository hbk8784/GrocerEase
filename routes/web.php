<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SellerController;
use App\Models\Users;
use App\Http\Controllers\DashController;
use App\Http\Controllers\RequestUserController;
use App\Http\Controllers\SearchProductController;
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

//common Routes-------------------------------------------------------------------------------
Route::get('/', [OnLoad::class, 'load']);
Route::view('/register', 'signup');
Route::post('/register', [AuthController::class, 'register']);
Route::get('/logout', [AuthController::class, 'logOut']);
Route::view('/login', 'login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/products/{query}', [SearchProductController::class, 'productResult']);
Route::get('/products/sub/{query}', [SearchProductController::class, 'subCatSearch']);

//--------------------------------------------------------------------------------------------

//Admin Routes--------------------------------------------------------------------------------
Route::prefix('admin')->middleware('isLogin')->group(function(){
    Route::get('/dashboard', [AuthController::class, 'adminDash']);
    Route::get('/customer/profile', [AuthController::class, 'customerProfile']);
    Route::get('/customer/profile/deactivate/{id}', [AuthController::class, 'deactivate']);
    Route::get('/customer/profile/activate/{id}', [AuthController::class, 'activate']);
    Route::get('/seller/profile', [AuthController::class, 'sellerProfile']);
    Route::get('/seller/profile/deactivate/{id}', [AuthController::class, 'sdeactivate']);
    Route::get('/seller/profile/activate/{id}', [AuthController::class, 'sactivate']);
    Route::get('/seller/products', [AuthController::class, 'products']);
});


//customer routes --------------------------------------------------------------------------
Route::prefix('customer')->middleware('isLogin')->group(function(){
    Route::view('/profile', 'profile');
    Route::get('/order/history', [RequestUserController::class, 'orderHistory']);
    Route::get('/order/track/{date}', [RequestUserController::class, 'trackOrder']);
    Route::get('/wishlist', [RequestUserController::class, 'showWishList']);
    Route::post('/wishlist/{id}', [RequestUserController::class, 'Wishlist']);
    Route::get('/remove/wishlist/{id}', [RequestUserController::class, 'removeWishList']);
    Route::post('/cart/{id}', [RequestUserController::class, 'cart']);
    Route::get('/cart', [RequestUserController::class, 'showCart']);
    Route::get('/remove/cart/{id}', [RequestUserController::class, 'removeCart']);
    Route::post('/order', [RequestUserController::class, 'setOrder']);
    Route::get('/invoice/{date}', [RequestUserController::class, 'getInvoice']);
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

