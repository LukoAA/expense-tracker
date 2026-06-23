<?php

use App\Http\Controllers\RegisterController;

Route::get('/register', [RegisterController::class, 'show']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function () {
    return 'Welcome! You are logged in.';
});

use App\Http\Controllers\LoginController;

Route::get('/login', [LoginController::class, 'show'])->name('login');
Route::post('/login', [LoginController::class, 'store']);
Route::post('/logout', [LoginController::class, 'destroy']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');