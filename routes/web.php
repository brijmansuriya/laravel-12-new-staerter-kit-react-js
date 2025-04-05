<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Admin\DashboardController;

Route::get('/',[HomeController::class,'index'])->name('home');

Route::middleware(['auth', 'verified'])->prefix('admin')->group(function () {
    Route::get('dashboard', [DashboardController::class,'index'])->name('dashboard');
});

// require __DIR__.'/settings.php';
// require __DIR__.'/auth.php';
