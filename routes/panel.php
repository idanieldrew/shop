<?php

use App\Http\Controllers\Panel\ProductController;
use Illuminate\Support\Facades\Route;

Route::prefix('panel')->group(function () {
    Route::get('/', [ProductController::class, 'index'])->name('product.index');
});
