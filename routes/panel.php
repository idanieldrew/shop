<?php

use App\Http\Controllers\Panel\ProductController;
use Illuminate\Support\Facades\Route;

Route::prefix('panel')->group(function () {
    Route::prefix('product')->group(function () {

        // All Products
        Route::get('all', [ProductController::class, 'index'])->name('product.index');

        // Detsroy Product
        Route::delete('delete/{product}', [ProductController::class, 'destroy'])->name('product.destroy');
    });
});
