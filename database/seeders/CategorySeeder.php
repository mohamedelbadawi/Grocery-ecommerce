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
        ], 'image' => 'assets/categories/Vegetables_1658327344_.jpg', 'created_at' => now()]);
        Category::create(['name' => [
            'en' => 'Fruits',
            'ar' => 'الفواكة'

        ], 'image' => 'assets/categories/Fruits_1658327326_.jpg', 'created_at' => now()]);
        Category::create(['name' => [
            'en' => 'Meat and chicken',
            'ar' => 'اللحوم والدواجن'
        ], 'image' => 'assets/categories/Meatandchicken_1658329083_.jpg', 'created_at' => now()]);
        Category::create(['name' => [
            'en' => 'Diary',
            'ar' => 'منتجات الالبان'

        ], 'image' => 'assets/categories/Diary_1658327588_.jpg', 'created_at' => now()]);
    }
}
