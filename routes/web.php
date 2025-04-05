<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Web\HomeController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


Route::get('/',[HomeController::class,'index'])->name('home');

Route::middleware(['auth', 'verified'])->prefix('admin')->group(function () {
    Route::get('dashboard', [DashboardController::class,'index'])->name('dashboard');
    Route::resource('user', UserController::class)->names('user');
});

// require __DIR__.'/settings.php';
// require __DIR__.'/auth.php';
