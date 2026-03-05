<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;

// Public routes (no login required)
Route::get('/', [ProductController::class, 'index']);
Route::get('/details/{id}', [ProductController::class, 'details']);
Route::get('/search', [ProductController::class, 'search']);

// Registration & Login
Route::get('/login', function () { return view('login'); })->name('login');
Route::post('/login', [UserController::class, 'login'])->name('login.submit');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');

Route::get('/register', function () { return view('register'); });
Route::post('/register', [UserController::class, 'register'])->name('register.submit');

Route::get('/logout', [UserController::class, 'logout'])->name('logout');

// Protected routes (requires login)
Route::middleware(['userAuth'])->group(function () {

    // Cart routes
    Route::post('/add_to_cart', [ProductController::class, 'addToCart'])->name('cart.add');
    Route::get('/cartlist', [ProductController::class, 'cartlist'])->name('cart.list');
    Route::get('/removecart/{id}', [ProductController::class, 'removeCart'])->name('cart.remove');

    // Order routes
    Route::get('/ordernow', [ProductController::class, 'orderNow'])->name('order.now');
    Route::post('/orderplace', [ProductController::class, 'orderPlace'])->name('order.place');
    Route::get('/myorder', [ProductController::class, 'myOrder'])->name('order.list');
});
Route::post('/login', [UserController::class, 'login']);
Route::post('/login',[UserController::class,'login']);
Route::post('/register',[UserController::class,'register']);
Route::get('/details/{id}', [ProductController::class, 'details']);