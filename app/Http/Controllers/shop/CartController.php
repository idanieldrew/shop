<?php

namespace App\Http\Controllers\shop;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Product;

class CartController extends Controller
{
      public function index()
      {
            dd('okk');
      }

      public function store(Product $product)
      {
            $cart = Cart::where('user_id', auth()->user()->id)->first();
            $cartItem = CartItem::where('product_id', $product->id)->first();

            if ($cart) {
                  if ($cartItem) {
                        return view('shopping.cart')->with('danger', 'قبلا اضافه کرده اید');
                  } else {
                        $cart->cartItems()->create([
                              'product_id' => $product->id,
                              'quantity' => $quantity = 1,
                              'price' => $price = $product->price,
                              'total' => $quantity * $price,
                        ]);
                        return view('shopping.cart')->with('success', ' اضافه شد');
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

                  return view('shopping.cart')->with('success', ' اضافه شد');
            }
      }
}
