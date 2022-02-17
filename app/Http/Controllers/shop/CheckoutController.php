<?php

namespace App\Http\Controllers\shop;

use App\Http\Controllers\Controller;

class CheckoutController extends Controller
{
    public function index()
    {
        return view('shopping.checkout');
    }
}
