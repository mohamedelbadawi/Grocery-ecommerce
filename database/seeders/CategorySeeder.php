<?php

namespace Database\Seeders;

use App\Models\Category;
use Faker\Factory;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create(['name' => 'Vegetables', 'image' => 'assets/categories/vegetables.png','created_at'=>now()]);
        Category::create(['name' => 'Fruits', 'image' => 'assets/categories/fruits.png','created_at'=>now()]);
        Category::create(['name' => 'Meat and chicken', 'image' => 'assets/categories/meat.png','created_at'=>now()]);
        Category::create(['name' => 'Diary', 'image' => 'assets/categories/diary.png','created_at'=>now()]);
    }
}
