<?php

use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Auth\AdminController;
use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Controllers\Backend\CartController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\OrderController;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Auth::routes();
Route::prefix('admin')->group(function () {
    Route::get('/login', [AdminLoginController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/login', [AdminLoginController::class, 'login'])->name('admin.login.submit');
    Route::get('logout/', [AdminLoginController::class, 'logout'])->name('admin.logout');
    Route::get('/', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/settings', [AdminController::class, 'editSettings'])->name('admin.settings');
    Route::post('/settings/update', [AdminController::class, 'updateSettings'])->name('admin.settings.update');

    // Category
    Route::get('/categories', [CategoryController::class, 'index'])->name('admin.category');
    Route::get('/categories/create', [CategoryController::class, 'create'])->name('admin.category.create');
    Route::post('/categories/store', [CategoryController::class, 'store'])->name('admin.category.store');
    Route::post('/categories/update/{category}', [CategoryController::class, 'update'])->name('admin.category.update');
    Route::get('/categories/edit/{category}', [CategoryController::class, 'edit'])->name('admin.category.edit');
    Route::get('/categories/delete/{category}', [CategoryController::class, 'delete'])->name('admin.category.delete');
    // Product
    Route::get('/products', [ProductController::class, 'index'])->name('admin.product');
    Route::get('/products/create', [ProductController::class, 'create'])->name('admin.product.create');
    Route::get('/products/edit/{product}', [ProductController::class, 'edit'])->name('admin.product.edit');
    Route::get('/products/delete/{product}', [ProductController::class, 'delete'])->name('admin.product.delete');
    // Cart
    Route::get('/carts', [CartController::class, 'index'])->name('admin.cart');
    Route::get('/carts/free/{cart}', [CartController::class, 'freeCart'])->name('admin.cart.free');
    // Order
    Route::get('/orders', [OrderController::class, 'index'])->name('admin.order');
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
