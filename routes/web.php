<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\ProductDetailController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [HomeController::class, 'index']);
Route::get('/category/{slug}', [CategoryController::class, 'detail']);
Route::get('/category/Electronics/{slug}', [SubCategoryController::class, 'subDetail']);
Route::get('/category/Electronics/phone/{slug}', [ProductDetailController::class, 'productDetail']);
