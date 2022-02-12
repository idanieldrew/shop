<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = Category::create([
            'name' => $name = 'میوه',
            'slug' => make_slug($name)
        ]);

        $category2 = Category::create([
            'name' => $name = 'اب میوه',
            'slug' => make_slug($name)
        ]);

        $category3 = Category::create([
            'name' => $name = 'میوه خشک',
            'slug' => make_slug($name)
        ]);

        $category4 = Category::create([
            'name' => $name = 'سبزیجات',
            'slug' => make_slug($name)
        ]);
    }
}
