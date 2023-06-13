<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TransactionController;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/users', [UserController::class, 'index'])->name('user.index');
Route::get('/products', [ProductController::class, 'index'])->name('product.index');
Route::get('/transactions', [TransactionController::class, 'index'])->name('transaction.index');

Route::middleware('guest')->group(function() {
    Route::get('/login', function() {
        return view('auth.login');
    });

    Route::get('/register', function() {
        return view('auth.register');
    });
});