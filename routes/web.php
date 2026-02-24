<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CommandeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;


Route::get('/', [GuestController::class, 'home']);
Route::get('/shop', [GuestController::class, 'shop']);
Route::get('/product/details/{id}', [GuestController::class, 'details']);
Route::get('/contact', [ContactController::class, 'create'])->name('contact.create');
Route::post('/contactus', [ContactController::class, 'store'])->name('contact.store');

Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
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
    Route::post('/products/search', [ProductController::class, 'search']);
    //Routes users
    Route::get('/users', [AdminController::class, 'users']);
    Route::get('/users/{id}/block', [AdminController::class, 'blockuser']);
    Route::get('/users/{id}/unblock', [AdminController::class, 'unblockuser']);
    //Routes commandes
    Route::get('/commandes', [AdminController::class, 'commandes']);
});

Route::middleware(['auth', 'client'])->prefix('client')->group(function () {
    Route::get('/dashboard', [ClientController::class, 'dashboard']);
    Route::get('/messageblock', [ClientController::class, 'messageblock']);
    Route::get('/commandes', [ClientController::class, 'mescommandes']);
    Route::post('/profile/updateprofile', [ClientController::class, 'updateprofile']);
    Route::post('/review/store', [ClientController::class, 'addreview'])->middleware('is_active');
    Route::get('/profile', [ClientController::class, 'profile']);
    //Routes commandes
    Route::post('/order/store', [CommandeController::class, 'store'])->middleware('is_active');
    Route::get('/shoppingcart', [ClientController::class, 'cart'])->middleware('is_active');
    Route::get('/lc/{idlc}/delete', [CommandeController::class, 'delete'])->middleware('is_active');
    Route::post('/checkout', [ClientController::class, 'checkout'])->middleware('is_active');
});




require __DIR__ . '/auth.php';
