<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Product;
use Illuminate\Database\Seeder;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = Product::all();
        foreach ($products as $product) {
            Image::create(['image' => 'assets/products/' . str_replace(' ', '', $product->name) .  '.png', 'product_id' => $product->id]);
        }
    }
}
