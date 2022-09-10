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
            'en' => 'cake',

        ], 'image' => 'assets/categories/cake.png', 'created_at' => now()]);
        Category::create(['name' => [
            'en' => 'Vegetables',
        ], 'image' => 'assets/categories/Vegtables.png', 'created_at' => now()]);

        Category::create(['name' => [
            'en' => 'fruit',
        ], 'image' => 'assets/categories/Fruit.png', 'created_at' => now()]);


        Category::create(['name' => [
            'en' => 'Ice cream',
        ], 'image' => 'assets/categories/ice-cream.png', 'created_at' => now()]);


        Category::create(['name' => [
            'en' => 'juice',
        ], 'image' => 'assets/categories/juice.png', 'created_at' => now()]);


        Category::create(['name' => [
            'en' => 'legumes',
        ], 'image' => 'assets/categories/legumes.png', 'created_at' => now()]);


        Category::create(['name' => [
            'en' => 'meat',
        ], 'image' => 'assets/categories/meat.png', 'created_at' => now()]);




        Category::create(['name' => [
            'en' => 'egg and milk',
        ], 'image' => 'assets/categories/milk.png', 'created_at' => now()]);


        
        Category::create(['name' => [
            'en' => 'sea food',
        ], 'image' => 'assets/categories/sea-food.png', 'created_at' => now()]);
    }
}
