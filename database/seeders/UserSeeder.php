<?php

namespace Database\Seeders;

use App\Models\Cart;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create(['name' => 'Mohamed Reda', 'email' => 'Mohamed@gmail.com', 'password' => bcrypt('123456789'), 'image' => "assets/admins/undraw_profile.svg"]);
        // Cart::create(['user_id' => $user->id]);
        for ($i = 0; $i < 1000; $i++) {
           $user=User::create(['name' => 'Ahmed saleh', 'email' => 'Ahmed' . $i . '@gmail.com', 'password' => bcrypt('123456789'), 'image' => "assets/admins/undraw_profile.svg"]);
        //    Cart::create(['user_id' => $user->id]);

        }
    }
}
