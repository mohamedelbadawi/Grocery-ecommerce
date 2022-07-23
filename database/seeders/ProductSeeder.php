<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Faker\Factory;
use Faker\Provider\Lorem;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create('ar_EG');
        $categories = Category::pluck('id');
        $productsName_en = [
            "Beans",
            "Lentil",
            "Chickpeas",
            "Butter",
            "Milk",
            "garlic",
            "pepper",
            "Mushroom",
            "Broccoli",
            "Pineapple",
            "Tomato",
            "Carrot",
            "Cabbage",
            "apples",
            "bananas"
        ];
        $productsName_ar = [
            "لوبياء", "عدس", "حمص", "زبدة", "حليب", "ثوم", "فلفل", "مشروم", "بروكلي", "اناناس", "طماطم", "جزر", "قرنبيط", "تفاح",
            "موز"
        ];


        for ($i = 1; $i <= 1000; $i++) {
            $num = rand(0, 14);

            $names = [
                'en' => $productsName_en[$num],
                'ar' => $productsName_ar[$num],
            ];
            $product = Product::create([
                'name' =>  [
                    'en' => $productsName_en[$num],
                    'ar' => $productsName_ar[$num],
                ],
                'description' => [
                    'en' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sagittis enim at lacus bibendum pretium. Vivamus pulvinar ullamcorper viverra.",
                    'ar' => "لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور

                                    أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد
                                    
                                    أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات"
                ],
                'category_id' => $categories->random(),
                'price' => rand(1, 10),
                'stock' => rand(1, 50),
                'featured' => rand(0, 1),
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            $product['name'] = json_encode($names, JSON_UNESCAPED_UNICODE);
        }
    }
}
