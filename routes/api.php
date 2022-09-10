<?php

use App\Http\Controllers\API\AddressController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\CartController;
use App\Http\Controllers\API\CategoryController;
use App\Http\Controllers\API\ProductController;
use App\Http\Controllers\API\HomeController;
use App\Http\Controllers\API\OrderController;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware(['auth:sanctum', 'localization'])->group(function () {
    Route::get('cart', [CartController::class, 'cartProducts']);
    Route::post('cart/remove/product', [CartController::class, 'removeProduct']);
    Route::post('cart/add/product', [CartController::class, 'addProduct']);
    Route::post('cart/clear', [CartController::class, 'clearCart']);
    Route::get('address', [AddressController::class, 'getUseraddresses']);
    Route::post('address/add', [AddressController::class, 'addAddress']);

    Route::post('user/password/update', [AuthController::class, 'updatePassword']);
    Route::post('product/{id}/rate', [ProductController::class, 'rateProduct']);
    Route::get('checkout', [OrderController::class, 'checkout']);
    Route::post('/updateProfile', [AuthController::class, 'updateProfile']);
});



Route::get('categories', [CategoryController::class, 'index']);
Route::get('products/product/{id}', [ProductController::class, 'product']);
Route::get('products/category/{id}', [ProductController::class, 'category']);
Route::get('products', [ProductController::class, 'index']);
Route::get('home', [HomeController::class, 'index']);
Route::get('logout', [AuthController::class, 'logout']);
Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);
