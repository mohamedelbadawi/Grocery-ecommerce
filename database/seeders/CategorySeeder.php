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
        Category::create(['name' => 'Vegetables', 'image' => 'categories/vegetables.jpg','created_at'=>now()]);
        Category::create(['name' => 'Fruits', 'image' => 'categories/fruits.jpg','created_at'=>now()]);
        Category::create(['name' => 'Meat and chicken', 'image' => 'categories/meat.jpg','created_at'=>now()]);
        Category::create(['name' => 'Diary', 'image' => 'categories/diary.jpg','created_at'=>now()]);
    }
}
