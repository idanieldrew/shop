<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

use function PHPSTORM_META\map;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = Product::create([
            'name' => $name = 'گوجه',
            'slug' => make_slug($name),
            'details' => 'یک تنمت یتهایتینتدتن',
            'price' => 12300,
            'description' => 'نتالر هتا نتاذ نتاذ نتاذ ندت',
            'quantity' => 10,
            'featured' => false
        ])->categories()->attach(1);
    }
}
