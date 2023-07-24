<?php

use App\Http\Controllers\Dashboard\Category\CategoryController;
use App\Http\Controllers\Dashboard\DashboardHomeController;
use Illuminate\Support\Facades\Route;



Route::prefix('/dashboard')->name('dashboard.')->group(function(){

        Route::middleware('auth')->group(function(){
            Route::get('/',DashboardHomeController::class)->name('index');
            Route::controller(CategoryController::class)->prefix('/category')->name('category.')->group(function(){
                Route::get('/','index')->name('index');
                Route::get('/create','create')->name('create');
                Route::post('/store','store')->name('store');
            });
        });
        require __DIR__.'/admin_auth.php';
});