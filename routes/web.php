<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/brands')->as('brand.')->group(function() {
    Route::get('/', [BrandController::class, 'index'])->name('index');
});

Route::prefix('/products')->as('product.')->group(function () {
    Route::get('/', [ProductController::class, 'index'])->name('index');
});
