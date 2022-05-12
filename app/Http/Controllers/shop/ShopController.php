<?php

namespace App\Http\Controllers\shop;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->category) {
            $products = Product::with('categories')->whereHas('categories', function ($query) {
                $query->where('slug', request()->category);
            });
            $categories = Category::all();
        } else {
            $products = Product::take(3);
            $categories = Category::all();
        }
        $products = $products->paginate(8);

        return view('shopping.shop', compact('products', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function searches(Request $request)
    {
        $categories = Category::all();

        $products = Product::where('name', 'LIKE', "%" . $request->keyword . "%")->orWhere('price', 'LIKE', "%" . $request->keyword . "%")->paginate();

        // dd($products);
        return view('shopping.shop', compact('products', 'categories'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($product)
    {
        $product = Product::where('slug', $product)->firstOrFail();

        $products = Product::where('slug', '!=', $product)->inRandomOrder()->take(4)->get();

        return view('shopping.single', compact('product', 'products'));
    }
}
