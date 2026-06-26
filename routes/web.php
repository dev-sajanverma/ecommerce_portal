<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\ProductDetailController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\AdminController;

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

// user dashboard route 
Route::get('/user', [UserController::class, 'index']);
Route::get('user/user-history', [UserController::class, 'userHistory']);
Route::get('user/settings', [UserController::class, 'settings']);
Route::get('user/details', [UserController::class, 'details']);

// Vendor dashboard route start here 
Route::get('vendor/signup', [VendorController::class, 'signup']);
Route::get('vendor/login', [VendorController::class, 'login']);
Route::get('vendor/forgot', [VendorController::class, 'forgot']);
Route::get('/vendor', [VendorController::class, 'index']);
Route::get('/vendor/add-product', [VendorController::class, 'addproduct']);
Route::get('/vendor/view-product', [VendorController::class, 'viewproduct']);
Route::get('/vendor/edit-product', [VendorController::class, 'editproduct']);
Route::get('/vendor/orders', [VendorController::class, 'orders']);
Route::get('/vendor/order-details', [VendorController::class, 'orderdetails']);
Route::get('/vendor/users', [VendorController::class, 'users']);
Route::get('/vendor/profile', [VendorController::class, 'profile']);

// Admin route start here 
Route::get('admin/login', [AdminController::class, 'login']);
Route::get('admin/', [AdminController::class, 'index']);
Route::get('/admin/order-details', [AdminController::class, 'orderdetails']);
Route::get('/admin/add-category', [AdminController::class, 'addcategory']);
Route::get('/admin/view-category', [AdminController::class, 'viewcategory']);
Route::get('/admin/edit-category', [AdminController::class, 'editcategory']);
Route::get('/admin/users', [AdminController::class, 'users']);
Route::get('/admin/vendors', [AdminController::class, 'vendors']);
Route::get('/admin/orders', [AdminController::class, 'orders']);

