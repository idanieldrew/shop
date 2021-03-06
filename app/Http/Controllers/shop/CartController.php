<?php

namespace App\Http\Controllers\shop;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $cart = Cart::where('user_id', auth()->user()->id)->first();

        $cartItems = CartItem::with('products')->where('cart_id', $cart->id)->get();
        return view('shopping.cart', compact('cart', 'cartItems'));
    }

    public function store(Product $product)
    {
        $cart = Cart::where('user_id', auth()->user()->id)->first();
        $cartItem = CartItem::where('cart_id', $cart->id ?? null)->where('product_id', $product->id)->first();


        if ($cart) {
            if ($cartItem) {
                return redirect()->route('cart.index')->with('danger', 'قبلا اضافه کرده اید');
            } else {
                $total = $cart->total;
                $cart->update([
                    'total' => $total + $product->price
                ]);
                $cart->cartItems()->create([
                    'product_id' => $product->id,
                    'quantity' => $quantity = 1,
                    'price' => $price = $product->price,
                    'total' => $quantity * $price,
                ]);
                return redirect()->route('cart.index')->with('success', ' اضافه شد');
            }
        } else {
            $newCart = auth()->user()->cart()->create([
                'total' => $product->price,
                'status' => false
            ]);
            $newCart->cartItems()->create([
                'product_id' => $product->id,
                'quantity' => $quantity = 1,
                'price' => $price = $product->price,
                'total' => $quantity * $price,
            ]);

            return redirect()->route('cart.index')->with('success', ' اضافه شد');
        }
    }

    public function quantity($cartItem, Request $request)
    {
        $cartItem = CartItem::whereId($cartItem)->first();

        $total = $request->quantity * $cartItem->price;

        $cartItem->update([
            'quantity' => $request->quantity,
            'total' => $total
        ]);

        /************ */
        $cart = Cart::where('user_id', auth()->user()->id)->first();

        $cartItems = CartItem::where('cart_id', $cart->id)->get();

        $p = $cartItems->sum('total');

        $cartItem->cart()->update([
            'total' => $p
        ]);
        return redirect()->route('cart.index');
    }

    public function destroy(CartItem $cartItem)
    {
        $cartItem->delete();

        return redirect()->route('cart.index')->with('danger', 'حذف کردید');
    }
}
