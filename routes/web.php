<?php

use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/',[HomeController::class,'index'])->name('home');

Route::prefix('admin')->group(function(){
    Route::get('/',[MainController::class,'index'])->name('admin.main.index');
    Route::resource('/products',ProductController::class);
});
