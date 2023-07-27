<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\DashboardHomeController;



Route::prefix('/dashboard')->name('dashboard.')->group(function () {
        Route::middleware('auth')->group(function () {
                Route::get('/', DashboardHomeController::class)->name('index');
        });
        require __DIR__ . '/admin_auth.php';
});