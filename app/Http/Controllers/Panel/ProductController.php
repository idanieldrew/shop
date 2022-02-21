<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::paginate(10);

        return view('panel.Product.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('panel.Product.store', compact('categories'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        Product::create([
            'name' => $name = $request->name,
            'slug' => make_slug($name),
            'details' => $request->details,
            'price' => $request->price,
            'description' => $request->description,
            'quantity' => $request->quantity,
            'image' =>  $this->image(),
        ])->categories()->attach($request->category);

        return redirect()->route('product.index');
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('product.index');
    }

    public function image()
    {
        $filesystem = new Filesystem;

        $file = request()->image;

        $imagePath = "shop/pics";
        $fileName = $file->getClientOriginalName();

        if ($filesystem->exists(public_path("{$imagePath}/{$fileName}"))) {
            $fileName = Carbon::now()->getTimestamp() . "- {$fileName}";
        }

        $file->move(public_path($imagePath), $fileName);

        return "http://127.0.0.1:8000/shop/pics/$fileName";
    }
}
