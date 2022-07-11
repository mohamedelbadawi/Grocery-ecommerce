<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Faker\Factory;
use Faker\Provider\Lorem;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $faker = Factory::create();
        $categories = Category::pluck('id');
        $productsName = [
            "sugar",
            "tea",
            "salt",
            "spices",
            "bread",
            "butter",
            "milk",
            "flour",
            "rice",
            "pulses",
            "tomato",
            "potato",
            "eggs",
            "apples",
            "bananas"
        ];

        for ($i = 1; $i <= 1000; $i++) {
            $products[] = [
                'name' =>   array_rand($productsName),
                'description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sagittis enim at lacus bibendum pretium. Vivamus pulvinar ullamcorper viverra.",
                'category_id' => $categories->random(),
                'price' => rand(1, 10),
                'stock' => rand(1, 50),
                'featured' => rand(0, 1),
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        $chunks = array_chunk($products, 100);
        foreach ($chunks as $chunk) {
            Product::insert($chunk);
        }
    }
}
