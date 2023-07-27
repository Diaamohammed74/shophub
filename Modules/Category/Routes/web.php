<?php

use Illuminate\Support\Facades\Route;
use Modules\Category\Http\Controllers\CategoryController;

Route::middleware('auth')->prefix('/dashboard')->name('dashboard.')->group(function(){
    Route::controller(CategoryController::class)->prefix('/category')->name('category.')->group(function(){
        Route::get('/','index')->name('index');
        Route::get('/create','create')->name('create');
        Route::post('/store','store')->name('store');
        Route::get('/{category}/edit','edit')->name('edit');
        Route::post('/{category}/update','update')->name('update');
    });
});