<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\ProductDetailController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [HomeController::class, 'index']);
Route::get('/category/{slug}', [CategoryController::class, 'detail']);
Route::get('/category/Electronics/{slug}', [SubCategoryController::class, 'subDetail']);
Route::get('/category/Electronics/phone/{slug}', [ProductDetailController::class, 'productDetail']);
Route::get('/cart-list/{slug}', [CartController::class, 'list']);
Route::get('/checkout/{slug}', [CheckoutController::class, 'list']);
Route::get('/register', [UserController::class, 'register']);
Route::get('/register1', [UserController::class, 'register1']);
Route::get('/login', [UserController::class, 'login']);
Route::get('/login1', [UserController::class, 'login1']);
