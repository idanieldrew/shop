<?php

use App\Http\Controllers\shop\CartController;
use App\Http\Controllers\shop\LandingController;
use App\Http\Controllers\shop\ShopController;

use Illuminate\Support\Facades\Route;

// landing page
Route::get('/', [LandingController::class, 'index'])->name('landing');

// shop page
Route::get('/shops', [ShopController::class, 'index'])->name('shop.index');

// show page
Route::get('shops/{product}', [ShopController::class, 'show'])->name('shop.show');

// store cart
Route::post('cart/{product}', [CartController::class, 'store'])->name('cart.store');

// store cart
Route::get('cart', [CartController::class, 'index'])->name('cart.index');
