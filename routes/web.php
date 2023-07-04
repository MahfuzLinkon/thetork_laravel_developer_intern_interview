<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionContrller;
use App\Http\Controllers\UserInfoController;
use Illuminate\Support\Facades\Route;

// Session All Route
Route::get('/', [HomeController::class, 'index']);
Route::get('/login', [SessionContrller::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [SessionContrller::class, 'store'])->middleware('guest');
Route::post('/logout', [SessionContrller::class, 'destroy'])->middleware('auth');

// Register All Route
Route::get('/register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');
// User info all route
Route::get('/user-info', [UserInfoController::class, 'index']);
Route::get('/user-info/create', [UserInfoController::class, 'create'])->name('user-info.create');
Route::post('/user-info/create', [UserInfoController::class, 'store'])->name('user-info.store');

Route::get('/user-info/show/{id}', [UserInfoController::class, 'show'])->name('user-info.show');

Route::get('/user-info/edit/{id}', [UserInfoController::class, 'edit'])->name('user-info.edit');
Route::post('/user-info/update/{id}', [UserInfoController::class, 'update'])->name('user-info.update');
Route::get('/user-info/destroy/{id}', [UserInfoController::class, 'destroy'])->name('user-info.destroy');


