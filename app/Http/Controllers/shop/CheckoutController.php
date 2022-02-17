<?php

namespace App\Http\Controllers\shop;

use App\Http\Controllers\Controller;
use App\Models\Cart;

class CheckoutController extends Controller
{
    public function index()
    {
        $cart = Cart::where('user_id', auth()->user()->id)->first();

        return view('shopping.checkout', compact('cart'));
    }

    public function store()
    {
        auth()->user()->orders()->create([
            'email' => request()->email,
            'name' => request()->name,
            'lastName' => request()->lastName,
            'address' => request()->address,
            'city' => request()->city,
            'postalcode' => request()->postalcode,
            'phone' => request()->phone,
            'total' => request()->total,
        ]);

        dd('ok');
    }
}
