<?php

namespace App\Http\Controllers\shop;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Product;

class CartController extends Controller
{
      public function store(Product $product)
      {
            $cart = Cart::where('user_id', auth()->user()->id)->get();
            $cartItem = CartItem::where('product_id', $product->id)->get();

            if ($cart) {
                  if ($cartItem) {
                        return view('cart.index')->with('اضافه', 'قبلا اضافه کرده اید');
                  } else {
                        $cart->cartItems()->create([
                              'product_id' => $product->id,
                              'quantity' => $quantity = 1,
                              'price' => $price = $product->price,
                              'total' => $quantity * $price,
                        ]);
                  }
            } else {
                  $newCart = auth()->user()->cart()->create([
                        'total' => 0,
                        'status' => false
                  ]);
                  $newCart->cartItems()->create([
                        'product_id' => $product->id,
                        'quantity' => $quantity = 1,
                        'price' => $price = $product->price,
                        'total' => $quantity * $price,
                  ]);
            }
      }
}
