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
        Category::create(['name' => 'Vegetables', 'image' => 'categories/vegetables.png','created_at'=>now()]);
        Category::create(['name' => 'Fruits', 'image' => 'categories/fruits.png','created_at'=>now()]);
        Category::create(['name' => 'Meat and chicken', 'image' => 'categories/meat.png','created_at'=>now()]);
        Category::create(['name' => 'Diary', 'image' => 'categories/diary.png','created_at'=>now()]);
    }
}
