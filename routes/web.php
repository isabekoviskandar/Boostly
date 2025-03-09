<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('user.index');
});


Route::get('/login', [AuthController::class, 'login_page'])->name('login_page');
Route::get('/register', [AuthController::class, 'register_page'])->name('register_page');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/register', [AuthController::class, 'register'])->name('register');
