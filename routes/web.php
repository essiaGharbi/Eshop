<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;


Route::get('/', [GuestController::class, 'home']);
Route::get('/shop', [GuestController::class, 'shop']);
Route::get('/product/details/{id}', [GuestController::class, 'details']);

Route::middleware('auth', 'admin')->prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard']);
    Route::get('/profile', [AdminController::class, 'profile']);
    Route::post('/profile/updateprofile', [AdminController::class, 'updateprofile']);
    //Routes category
    Route::get('/categories', [CategoryController::class, 'index']);
    Route::post('/categories/store', [CategoryController::class, 'store']);
    Route::post('/categories/edit', [CategoryController::class, 'edit']);
    //Routes product
    Route::get('/products', [ProductController::class, 'index']);
    Route::post('/products/store', [ProductController::class, 'store']);
    Route::post('/products/edit', [ProductController::class, 'edit']);
    //Routes users
    Route::get('/users', [AdminController::class, 'users']);
    //Routes commandes
    Route::get('/commandes', [AdminController::class, 'commandes']);
});

Route::middleware('auth', 'client')->prefix('client')->group(function () {
    Route::get('/dashboard', [ClientController::class, 'dashboard']);
    Route::get('/profile', [ClientController::class, 'profile']);
    Route::post('/profile/updateprofile', [ClientController::class, 'updateprofile']);
    Route::post('/review/store', [ClientController::class, 'addreview']);
});



require __DIR__ . '/auth.php';
