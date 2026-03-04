<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;


Route::view('/login', 'login');

Route::post('/login', [UserController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});
// Route::post('/login', [UserController::class, 'login']);
// 
Route::get('/', [ProductController::class, 'login']);

Route::get('/login', [ProductController::class, 'login']);
Route::get('/', [ProductController::class, 'index']);
Route::get('/product/{id}', [ProductController::class, 'details'])->name('product.details');
Route::get('/detail/{id}', [ProductController::class, 'show'])->name('detail');
Route::get('/search', [ProductController::class, 'search'])->name('search');
Route::post('/add_to_cart', [ProductController::class, 'addToCart']);
Route::post('/add_to_cart', [ProductController::class, 'addToCart'])->middleware('userAuth');
Route::get('/cart', [ProductController::class, 'cart'])->middleware('userAuth');
Route::post('/add_to_cart', [ProductController::class, 'addToCart'])->middleware('auth');
Route::get("cartlist", [ProductController::class, 'cartlist']);

use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;

