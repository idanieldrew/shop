<?php

use App\Http\Controllers\shop\CartController;
use App\Http\Controllers\shop\CheckoutController;
use App\Http\Controllers\shop\LandingController;
use App\Http\Controllers\shop\ShopController;

use Illuminate\Support\Facades\Route;

// landing page
Route::get('/', [LandingController::class, 'index'])->name('landing');

// shop page
Route::get('/shops', [ShopController::class, 'index'])->name('shop.index');

// search
Route::get('/search', [ShopController::class, 'searches'])->name('searches');

// show page
Route::get('shops/{product}', [ShopController::class, 'show'])->name('shop.show');

// store cart
Route::middleware('auth')->post('cart/{product}', [CartController::class, 'store'])->name('cart.store');

// destroy cart
Route::middleware('auth')->delete('cart/{cartItem}', [CartController::class, 'destroy'])->name('cart.destroy');

// show cart
Route::middleware('auth')->get('cart', [CartController::class, 'index'])->name('cart.index');

// Cange quantity in cart page
Route::middleware('auth')->post('cart-quantity/{cartItem}', [CartController::class, 'quantity'])->name('cart.quantity');

Route::middleware('auth')->get('checkout', [CheckoutController::class, 'index'])->name('checkout.index');

Route::middleware('auth')->post('payment', [CheckoutController::class, 'store'])->name('checkout.store');
