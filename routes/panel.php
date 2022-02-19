<?php

use App\Http\Controllers\Panel\ProductController;
use Illuminate\Support\Facades\Route;

Route::prefix('panel')->group(function () {
    Route::prefix('product')->group(function () {
        Route::get('/all', [ProductController::class, 'index'])->name('product.index');
    });
});
