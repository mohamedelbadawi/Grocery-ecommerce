<?php

namespace Database\Seeders;

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
        User::create(['name'=>'Mohamed Reda','email'=>'Mohamed@gmail.com','password'=>bcrypt('123456789'),'image'=>"assets/admins/undraw_profile.svg"]);
        User::create(['name'=>'Ahmed saleh','email'=>'Ahmed@gmail.com','password'=>bcrypt('123456789'),'image'=>"assets/admins/undraw_profile.svg"]);
    }
}
