<?php

use App\Http\Controllers\RegisterController;

Route::get('/register', [RegisterController::class, 'show']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function () {
    return 'Welcome! You are logged in.';
});