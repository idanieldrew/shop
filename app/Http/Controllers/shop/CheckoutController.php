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

    public function store(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|',
            'name' => 'required',
            'lastName' => 'required',
            'address' => 'required',
            'city' => 'required',
            'postalcode' => 'required',
            'phone' => 'required',

        ]);

        // dd($request->all());
        auth()->user()->orders()->create([
            $validated
            /*'email' => $request->email,
            'name' => $request->name,
            'lastName' => $request->lastName,
            'address' => $request->address,
            'city' => $request->city,
            'postalcode' => $request->postalcode,
            'phone' => $request->phone,
            'total' => $request->total,*/
        ]);

        dd('ok');
    }
}
