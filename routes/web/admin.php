<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthUser\UserController;
use App\Http\Controllers\Controller;

Route::middleware(['auth', 'setLocale'])->prefix('/admin')->name('admin.')->group(function(){
    Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');
});

Route::get('/user/dashboard', [Controller::class, 'user_dashboard'])->name('user.dashboard');