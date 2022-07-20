<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\User;
use Faker\Factory;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        $user = User::first();

        for ($i = 0; $i < 1000; $i++) {

            Order::create(['user_id' => $user->id, 'address_id' => rand(1,5), 'subtotal' => 100, 'shipping' => 10, 'total'=>110,'status' => 'Pending','created_at'=>$faker->dateTimeBetween($startDate = '-1 years', $endDate = 'now')]);
        }
    }
}
