<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

// Pastikan rute-rute ini sudah ada
Route::get('/user', [UserController::class, 'index'])->name('user.index');
Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
Route::post('/user', [UserController::class, 'store'])->name('user.store');