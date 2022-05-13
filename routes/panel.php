<?php

use App\Http\Controllers\Panel\ProductController;
use Illuminate\Support\Facades\Route;

Route::prefix('panel')->middleware('panel')->group(function () {
    Route::prefix('product')->group(function () {

        // All Products
        Route::get('all', [ProductController::class, 'index'])->name('product.index');

        // Detsroy Product
        Route::delete('delete/{product}', [ProductController::class, 'destroy'])->name('product.destroy');

        // Create Product
        Route::get('create', [ProductController::class, 'create'])->name('product.create');

        // Create Product
        Route::post('store', [ProductController::class, 'store'])->name('product.store');

        // edit Product
        Route::get('edit/{product:slug}', [ProductController::class, 'edit'])->name('product.edit');

        // update Product
        Route::patch('update/{product:slug}', [ProductController::class, 'update'])->name('product.update');

        // Create Product
        Route::get('searches', [ProductController::class, 'searches'])->name('product.searches');
    });
});
