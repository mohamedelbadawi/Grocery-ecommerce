<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(UserSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(CartSeeder::class);
        $this->call(CartProductSeeder::class);
        $this->call(AddressSeeder::class);
        $this->call(ImageSeeder::class);
        $this->call(AdminSeeder::class);
    }
}
