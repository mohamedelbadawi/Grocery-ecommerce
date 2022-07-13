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
        $products = Product::all()->pluck('id');
        foreach ($products as $id) {
            for ($i = 0; $i < 4; $i++) {
                Image::create(['image' => 'assets/products/product-' . rand(1, 8) . '.png','product_id'=>$id]);
            }
        }
    }
}
