<?php

namespace App\Http\Controllers\shop;

use App\Http\Controllers\Controller;
use App\Models\Product;

class CartController extends Controller
{
      public function store(Product $product)
      {
            dd($product);
      }
}
