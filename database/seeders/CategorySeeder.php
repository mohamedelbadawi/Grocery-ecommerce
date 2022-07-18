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
        Category::create(['name' => [
            'en' => 'Vegetables',
            'ar' => 'الخضراوات'
        ], 'image' => 'assets/categories/vegetables.png', 'created_at' => now()]);
        Category::create(['name' => [
            'en' => 'Fruits',
            'ar' => 'الفواكة'

        ], 'image' => 'assets/categories/fruits.png', 'created_at' => now()]);
        Category::create(['name' => [
            'en' => 'Meat and chicken',
            'ar' => 'اللحوم والدواجن'
        ], 'image' => 'assets/categories/meat.png', 'created_at' => now()]);
        Category::create(['name' => [
            'en' => 'Diary',
            'ar' => 'منتجات الالبان'

        ], 'image' => 'assets/categories/diary.png', 'created_at' => now()]);
    }
}
