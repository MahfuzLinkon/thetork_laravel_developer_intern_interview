<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionContrller;
use Illuminate\Support\Facades\Route;

// Session All Route
Route::get('/', [HomeController::class, 'index']);
Route::get('/login', [SessionContrller::class, 'index'])->middleware('guest');
Route::post('/login', [SessionContrller::class, 'store'])->middleware('guest');
Route::post('/logout', [SessionContrller::class, 'destroy'])->middleware('auth');

// Register All Route
Route::get('/register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');



