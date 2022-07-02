<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CartProduct;

class CartProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {

            CartProduct::create([
                'cart_id' => rand(1, 2),
                'product_id' => rand(1, 500),
                'quantity' => rand(1, 10),
            ]);
        }
    }
}
