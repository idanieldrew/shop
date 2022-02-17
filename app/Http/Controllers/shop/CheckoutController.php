<?php

namespace App\Http\Controllers\shop;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index()
    {
        $cart = Cart::where('user_id', auth()->user()->id)->first();

        return view('shopping.checkout', compact('cart'));
    }

    public function store()
    {
        dd(Request()->all());
    }
}
