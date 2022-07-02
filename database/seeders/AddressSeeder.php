<?php

namespace Database\Seeders;

use App\Models\Address;
use App\Models\User;
use Faker\Factory;
use Illuminate\Database\Seeder;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        $users = User::all()->pluck('id');
        for ($i = 0; $i < 5; $i++) {
            Address::create([
                'city' => $faker->city,
                'street' => $faker->address,
                'building' => $faker->buildingNumber(),
                'code' => $faker->countryCode(),
                'user_id' => $faker->randomElement($users)
            ]);
        }
    }
}
