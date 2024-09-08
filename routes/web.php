<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SalesController;

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
// Route untuk halaman Home
Route::get('/', [HomeController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});
// Route untuk halaman Products
Route::get('/products', [ProductController::class, 'index']);

// Route Group dengan Prefix untuk Product Category
Route::prefix('category')->group(function () {
    Route::get('/food-beverage', [ProductController::class, 'category'])->name('category.food-beverage')->defaults('category', 'food-beverage');
    Route::get('/beauty-health', [ProductController::class, 'category'])->name('category.beauty-health')->defaults('category', 'beauty-health');
    Route::get('/home-care', [ProductController::class, 'category'])->name('category.home-care')->defaults('category', 'home-care');
    Route::get('/baby-kid', [ProductController::class, 'category'])->name('category.baby-kid')->defaults('category', 'baby-kid');
});

// Route untuk halaman User
Route::get('/user/{id}/name/{name}', [UserController::class, 'profile']);

// Route untuk halaman Penjualan
Route::get('/sales', [SalesController::class, 'index']);