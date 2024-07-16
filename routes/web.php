<?php

use App\Http\Controllers\UserAuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(UserAuthController::class)->name('auth.')->group(function () {
    Route::get('/login', 'login')->name('login');
    Route::post('/register', 'register')->name('register');
    Route::post('/logout', 'logout')->name('logout');
    Route::get('/forgot_password', 'forgot_password')->name('forgot_password');
});

//prefix('admin')
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
