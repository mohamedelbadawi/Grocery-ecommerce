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

        // cake
        Product::create([
            'name' =>  [
                'en' => 'Angel Cake',
            ],
            'description' => [
                'en' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sagittis enim at lacus bibendum pretium. Vivamus pulvinar ullamcorper viverra.",
                'ar' => "لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور

                                    أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد
                                    
                                    أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات"
            ],
            'category_id' => 1,
            'price' => rand(1, 10),
            'stock' => rand(1, 50),
            'featured' => rand(0, 1),
            'status' => true,
            'rate' => rand(1, 5),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Product::create([
            'name' =>  [
                'en' => 'Birthday Cake',
            ],
            'description' => [
                'en' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sagittis enim at lacus bibendum pretium. Vivamus pulvinar ullamcorper viverra.",
                'ar' => "لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور

                                    أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد
                                    
                                    أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات"
            ],
            'category_id' => 1,
            'price' => rand(1, 10),
            'stock' => rand(1, 50),
            'featured' => rand(0, 1),
            'status' => true,
            'rate' => rand(1, 5),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Product::create([
            'name' =>  [
                'en' => 'Blackout Cake',
            ],
            'description' => [
                'en' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sagittis enim at lacus bibendum pretium. Vivamus pulvinar ullamcorper viverra.",
                'ar' => "لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور

                                    أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد
                                    
                                    أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات"
            ],
            'category_id' => 1,
            'price' => rand(1, 10),
            'stock' => rand(1, 50),
            'featured' => rand(0, 1),
            'status' => true,
            'rate' => rand(1, 5),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Product::create([
            'name' =>  [
                'en' => 'Chocolate Cake',
            ],
            'description' => [
                'en' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sagittis enim at lacus bibendum pretium. Vivamus pulvinar ullamcorper viverra.",
                'ar' => "لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور

                                    أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد
                                    
                                    أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات"
            ],
            'category_id' => 1,
            'price' => rand(1, 10),
            'stock' => rand(1, 50),
            'featured' => rand(0, 1),
            'status' => true,
            'rate' => rand(1, 5),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Product::create([
            'name' =>  [
                'en' => 'Christmas Cake',
            ],
            'description' => [
                'en' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sagittis enim at lacus bibendum pretium. Vivamus pulvinar ullamcorper viverra.",
                'ar' => "لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور

                                    أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد
                                    
                                    أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات"
            ],
            'category_id' => 1,
            'price' => rand(1, 10),
            'stock' => rand(1, 50),
            'featured' => rand(0, 1),
            'status' => true,
            'rate' => rand(1, 5),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Product::create([
            'name' =>  [
                'en' => 'Cream Cake',
            ],
            'description' => [
                'en' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sagittis enim at lacus bibendum pretium. Vivamus pulvinar ullamcorper viverra.",
                'ar' => "لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور

                                    أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد
                                    
                                    أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات"
            ],
            'category_id' => 1,
            'price' => rand(1, 10),
            'stock' => rand(1, 50),
            'featured' => rand(0, 1),
            'status' => true,
            'rate' => rand(1, 5),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Product::create([
            'name' =>  [
                'en' => 'Fruit Cake',
            ],
            'description' => [
                'en' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sagittis enim at lacus bibendum pretium. Vivamus pulvinar ullamcorper viverra.",
                'ar' => "لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور

                                    أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد
                                    
                                    أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات"
            ],
            'category_id' => 1,
            'price' => rand(1, 10),
            'stock' => rand(1, 50),
            'featured' => rand(0, 1),
            'status' => true,
            'rate' => rand(1, 5),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Product::create([
            'name' =>  [
                'en' => 'Strawberry Cake',
            ],
            'description' => [
                'en' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sagittis enim at lacus bibendum pretium. Vivamus pulvinar ullamcorper viverra.",
                'ar' => "لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور

                                    أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد
                                    
                                    أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات"
            ],
            'category_id' => 1,
            'price' => rand(1, 10),
            'stock' => rand(1, 50),
            'featured' => rand(0, 1),
            'status' => true,
            'rate' => rand(1, 5),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // vegetables

        Product::create([
            'name' =>  [
                'en' => 'Aubergine',
            ],
            'description' => [
                'en' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sagittis enim at lacus bibendum pretium. Vivamus pulvinar ullamcorper viverra.",
                'ar' => "لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور

                                    أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد
                                    
                                    أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات"
            ],
            'category_id' => 2,
            'price' => rand(1, 10),
            'stock' => rand(1, 50),
            'featured' => rand(0, 1),
            'status' => true,
            'rate' => rand(1, 5),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Product::create([
            'name' =>  [
                'en' => 'Broccoli',
            ],
            'description' => [
                'en' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sagittis enim at lacus bibendum pretium. Vivamus pulvinar ullamcorper viverra.",
                'ar' => "لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور

                                    أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد
                                    
                                    أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات"
            ],
            'category_id' => 2,
            'price' => rand(1, 10),
            'stock' => rand(1, 50),
            'featured' => rand(0, 1),
            'status' => true,
            'rate' => rand(1, 5),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Product::create([
            'name' =>  [
                'en' => 'Cabbage',
            ],
            'description' => [
                'en' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sagittis enim at lacus bibendum pretium. Vivamus pulvinar ullamcorper viverra.",
                'ar' => "لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور

                                    أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد
                                    
                                    أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات"
            ],
            'category_id' => 2,
            'price' => rand(1, 10),
            'stock' => rand(1, 50),
            'featured' => rand(0, 1),
            'status' => true,
            'rate' => rand(1, 5),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Product::create([
            'name' =>  [
                'en' => 'Carrot',
            ],
            'description' => [
                'en' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sagittis enim at lacus bibendum pretium. Vivamus pulvinar ullamcorper viverra.",
                'ar' => "لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور

                                    أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد
                                    
                                    أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات"
            ],
            'category_id' => 2,
            'price' => rand(1, 10),
            'stock' => rand(1, 50),
            'featured' => rand(0, 1),
            'status' => true,
            'rate' => rand(1, 5),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Product::create([
            'name' =>  [
                'en' => 'garlic',
            ],
            'description' => [
                'en' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sagittis enim at lacus bibendum pretium. Vivamus pulvinar ullamcorper viverra.",
                'ar' => "لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور

                                    أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد
                                    
                                    أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات"
            ],
            'category_id' => 2,
            'price' => rand(1, 10),
            'stock' => rand(1, 50),
            'featured' => rand(0, 1),
            'status' => true,
            'rate' => rand(1, 5),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Product::create([
            'name' =>  [
                'en' => 'Mushroom',
            ],
            'description' => [
                'en' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sagittis enim at lacus bibendum pretium. Vivamus pulvinar ullamcorper viverra.",
                'ar' => "لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور

                                    أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد
                                    
                                    أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات"
            ],
            'category_id' => 2,
            'price' => rand(1, 10),
            'stock' => rand(1, 50),
            'featured' => rand(0, 1),
            'status' => true,
            'rate' => rand(1, 5),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Product::create([
            'name' =>  [
                'en' => 'Onion',
            ],
            'description' => [
                'en' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sagittis enim at lacus bibendum pretium. Vivamus pulvinar ullamcorper viverra.",
                'ar' => "لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور

                                    أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد
                                    
                                    أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات"
            ],
            'category_id' => 2,
            'price' => rand(1, 10),
            'stock' => rand(1, 50),
            'featured' => rand(0, 1),
            'status' => true,
            'rate' => rand(1, 5),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Product::create([
            'name' =>  [
                'en' => 'pepper',
            ],
            'description' => [
                'en' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sagittis enim at lacus bibendum pretium. Vivamus pulvinar ullamcorper viverra.",
                'ar' => "لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور

                                    أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد
                                    
                                    أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات"
            ],
            'category_id' => 2,
            'price' => rand(1, 10),
            'stock' => rand(1, 50),
            'featured' => rand(0, 1),
            'status' => true,
            'rate' => rand(1, 5),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Product::create([
            'name' =>  [
                'en' => 'Tomato',
            ],
            'description' => [
                'en' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sagittis enim at lacus bibendum pretium. Vivamus pulvinar ullamcorper viverra.",
                'ar' => "لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور

                                    أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد
                                    
                                    أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات"
            ],
            'category_id' => 2,
            'price' => rand(1, 10),
            'stock' => rand(1, 50),
            'featured' => rand(0, 1),
            'status' => true,
            'rate' => rand(1, 5),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        // fruits
        Product::create([
            'name' =>  [
                'en' => 'Apple',
            ],
            'description' => [
                'en' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sagittis enim at lacus bibendum pretium. Vivamus pulvinar ullamcorper viverra.",
                'ar' => "لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور

                                    أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد
                                    
                                    أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات"
            ],
            'category_id' => 3,
            'price' => rand(1, 10),
            'stock' => rand(1, 50),
            'featured' => rand(0, 1),
            'status' => true,
            'rate' => rand(1, 5),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Product::create([
            'name' =>  [
                'en' => 'Banana',
            ],
            'description' => [
                'en' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sagittis enim at lacus bibendum pretium. Vivamus pulvinar ullamcorper viverra.",
                'ar' => "لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور

                                    أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد
                                    
                                    أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات"
            ],
            'category_id' => 3,
            'price' => rand(1, 10),
            'stock' => rand(1, 50),
            'featured' => rand(0, 1),
            'status' => true,
            'rate' => rand(1, 5),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Product::create([
            'name' =>  [
                'en' => 'Grapes',
            ],
            'description' => [
                'en' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sagittis enim at lacus bibendum pretium. Vivamus pulvinar ullamcorper viverra.",
                'ar' => "لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور

                                    أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد
                                    
                                    أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات"
            ],
            'category_id' => 3,
            'price' => rand(1, 10),
            'stock' => rand(1, 50),
            'featured' => rand(0, 1),
            'status' => true,
            'rate' => rand(1, 5),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Product::create([
            'name' =>  [
                'en' => 'kiwi',
            ],
            'description' => [
                'en' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sagittis enim at lacus bibendum pretium. Vivamus pulvinar ullamcorper viverra.",
                'ar' => "لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور

                                    أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد
                                    
                                    أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات"
            ],
            'category_id' => 3,
            'price' => rand(1, 10),
            'stock' => rand(1, 50),
            'featured' => rand(0, 1),
            'status' => true,
            'rate' => rand(1, 5),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Product::create([
            'name' =>  [
                'en' => 'lemon',
            ],
            'description' => [
                'en' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sagittis enim at lacus bibendum pretium. Vivamus pulvinar ullamcorper viverra.",
                'ar' => "لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور

                                    أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد
                                    
                                    أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات"
            ],
            'category_id' => 3,
            'price' => rand(1, 10),
            'stock' => rand(1, 50),
            'featured' => rand(0, 1),
            'status' => true,
            'rate' => rand(1, 5),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Product::create([
            'name' =>  [
                'en' => 'Mandarin orange',
            ],
            'description' => [
                'en' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sagittis enim at lacus bibendum pretium. Vivamus pulvinar ullamcorper viverra.",
                'ar' => "لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور

                                    أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد
                                    
                                    أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات"
            ],
            'category_id' => 3,
            'price' => rand(1, 10),
            'stock' => rand(1, 50),
            'featured' => rand(0, 1),
            'status' => true,
            'rate' => rand(1, 5),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Product::create([
            'name' =>  [
                'en' => 'Mango',
            ],
            'description' => [
                'en' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sagittis enim at lacus bibendum pretium. Vivamus pulvinar ullamcorper viverra.",
                'ar' => "لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور

                                    أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد
                                    
                                    أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات"
            ],
            'category_id' => 3,
            'price' => rand(1, 10),
            'stock' => rand(1, 50),
            'featured' => rand(0, 1),
            'status' => true,
            'rate' => rand(1, 5),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Product::create([
            'name' =>  [
                'en' => 'Orange',
            ],
            'description' => [
                'en' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sagittis enim at lacus bibendum pretium. Vivamus pulvinar ullamcorper viverra.",
                'ar' => "لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور

                                    أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد
                                    
                                    أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات"
            ],
            'category_id' => 3,
            'price' => rand(1, 10),
            'stock' => rand(1, 50),
            'featured' => rand(0, 1),
            'status' => true,
            'rate' => rand(1, 5),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Product::create([
            'name' =>  [
                'en' => 'Pineapple',
            ],
            'description' => [
                'en' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sagittis enim at lacus bibendum pretium. Vivamus pulvinar ullamcorper viverra.",
                'ar' => "لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور

                                    أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد
                                    
                                    أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات"
            ],
            'category_id' => 3,
            'price' => rand(1, 10),
            'stock' => rand(1, 50),
            'featured' => rand(0, 1),
            'status' => true,
            'rate' => rand(1, 5),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Product::create([
            'name' =>  [
                'en' => 'strawberry',
            ],
            'description' => [
                'en' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sagittis enim at lacus bibendum pretium. Vivamus pulvinar ullamcorper viverra.",
                'ar' => "لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور

                                    أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد
                                    
                                    أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات"
            ],
            'category_id' => 3,
            'price' => rand(1, 10),
            'stock' => rand(1, 50),
            'featured' => rand(0, 1),
            'status' => true,
            'rate' => rand(1, 5),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Product::create([
            'name' =>  [
                'en' => 'Watermelon',
            ],
            'description' => [
                'en' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sagittis enim at lacus bibendum pretium. Vivamus pulvinar ullamcorper viverra.",
                'ar' => "لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور

                                    أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد
                                    
                                    أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات"
            ],
            'category_id' => 3,
            'price' => rand(1, 10),
            'stock' => rand(1, 50),
            'featured' => rand(0, 1),
            'status' => true,
            'rate' => rand(1, 5),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // icecream
        Product::create([
            'name' =>  [
                'en' => 'chocalte',
            ],
            'description' => [
                'en' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sagittis enim at lacus bibendum pretium. Vivamus pulvinar ullamcorper viverra.",
                'ar' => "لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور

                                    أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد
                                    
                                    أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات"
            ],
            'category_id' => 4,
            'price' => rand(1, 10),
            'stock' => rand(1, 50),
            'featured' => rand(0, 1),
            'status' => true,
            'rate' => rand(1, 5),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Product::create([
            'name' =>  [
                'en' => 'Diy Ice Cream Sundae Bar',
            ],
            'description' => [
                'en' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sagittis enim at lacus bibendum pretium. Vivamus pulvinar ullamcorper viverra.",
                'ar' => "لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور

                                    أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد
                                    
                                    أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات"
            ],
            'category_id' => 4,
            'price' => rand(1, 10),
            'stock' => rand(1, 50),
            'featured' => rand(0, 1),
            'status' => true,
            'rate' => rand(1, 5),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Product::create([
            'name' =>  [
                'en' => 'gelato',
            ],
            'description' => [
                'en' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sagittis enim at lacus bibendum pretium. Vivamus pulvinar ullamcorper viverra.",
                'ar' => "لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور

                                    أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد
                                    
                                    أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات"
            ],
            'category_id' => 4,
            'price' => rand(1, 10),
            'stock' => rand(1, 50),
            'featured' => rand(0, 1),
            'status' => true,
            'rate' => rand(1, 5),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Product::create([
            'name' =>  [
                'en' => 'Ice Cream Death By Chocolate',
            ],
            'description' => [
                'en' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sagittis enim at lacus bibendum pretium. Vivamus pulvinar ullamcorper viverra.",
                'ar' => "لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور

                                    أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد
                                    
                                    أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات"
            ],
            'category_id' => 4,
            'price' => rand(1, 10),
            'stock' => rand(1, 50),
            'featured' => rand(0, 1),
            'status' => true,
            'rate' => rand(1, 5),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Product::create([
            'name' =>  [
                'en' => 'Magnum Double Caramel',
            ],
            'description' => [
                'en' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sagittis enim at lacus bibendum pretium. Vivamus pulvinar ullamcorper viverra.",
                'ar' => "لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور

                                    أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد
                                    
                                    أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات"
            ],
            'category_id' => 4,
            'price' => rand(1, 10),
            'stock' => rand(1, 50),
            'featured' => rand(0, 1),
            'status' => true,
            'rate' => rand(1, 5),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Product::create([
            'name' =>  [
                'en' => 'Magnum Double Caramel',
            ],
            'description' => [
                'en' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sagittis enim at lacus bibendum pretium. Vivamus pulvinar ullamcorper viverra.",
                'ar' => "لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور

                                    أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد
                                    
                                    أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات"
            ],
            'category_id' => 4,
            'price' => rand(1, 10),
            'stock' => rand(1, 50),
            'featured' => rand(0, 1),
            'status' => true,
            'rate' => rand(1, 5),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Product::create([
            'name' =>  [
                'en' => 'Strawberry Ice Cream ',
            ],
            'description' => [
                'en' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sagittis enim at lacus bibendum pretium. Vivamus pulvinar ullamcorper viverra.",
                'ar' => "لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور

                                    أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد
                                    
                                    أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات"
            ],
            'category_id' => 4,
            'price' => rand(1, 10),
            'stock' => rand(1, 50),
            'featured' => rand(0, 1),
            'status' => true,
            'rate' => rand(1, 5),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Product::create([
            'name' =>  [
                'en' => 'Sundae Chocolate ice cream ',
            ],
            'description' => [
                'en' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sagittis enim at lacus bibendum pretium. Vivamus pulvinar ullamcorper viverra.",
                'ar' => "لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور

                                    أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد
                                    
                                    أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات"
            ],
            'category_id' => 4,
            'price' => rand(1, 10),
            'stock' => rand(1, 50),
            'featured' => rand(0, 1),
            'status' => true,
            'rate' => rand(1, 5),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Product::create([
            'name' =>  [
                'en' => 'Sundae Chocolate',
            ],
            'description' => [
                'en' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sagittis enim at lacus bibendum pretium. Vivamus pulvinar ullamcorper viverra.",
                'ar' => "لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور

                                    أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد
                                    
                                    أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات"
            ],
            'category_id' => 4,
            'price' => rand(1, 10),
            'stock' => rand(1, 50),
            'featured' => rand(0, 1),
            'status' => true,
            'rate' => rand(1, 5),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Product::create([
            'name' =>  [
                'en' => 'Transparent Ice Cream Cup  ',
            ],
            'description' => [
                'en' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sagittis enim at lacus bibendum pretium. Vivamus pulvinar ullamcorper viverra.",
                'ar' => "لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور

                                    أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد
                                    
                                    أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات"
            ],
            'category_id' => 4,
            'price' => rand(1, 10),
            'stock' => rand(1, 50),
            'featured' => rand(0, 1),
            'status' => true,
            'rate' => rand(1, 5),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Product::create([
            'name' =>  [
                'en' => 'White Chocolate Magnum Ice Cream Bars',
            ],
            'description' => [
                'en' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sagittis enim at lacus bibendum pretium. Vivamus pulvinar ullamcorper viverra.",
                'ar' => "لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور

                                    أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد
                                    
                                    أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات"
            ],
            'category_id' => 4,
            'price' => rand(1, 10),
            'stock' => rand(1, 50),
            'featured' => rand(0, 1),
            'status' => true,
            'rate' => rand(1, 5),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // juice


        Product::create([
            'name' =>  [
                'en' => 'Family Harvest Fresh',
            ],
            'description' => [
                'en' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sagittis enim at lacus bibendum pretium. Vivamus pulvinar ullamcorper viverra.",
                'ar' => "لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور

                                    أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد
                                    
                                    أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات"
            ],
            'category_id' => 5,
            'price' => rand(1, 10),
            'stock' => rand(1, 50),
            'featured' => rand(0, 1),
            'status' => true,
            'rate' => rand(1, 5),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Product::create([
            'name' =>  [
                'en' => 'greenjuice',
            ],
            'description' => [
                'en' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sagittis enim at lacus bibendum pretium. Vivamus pulvinar ullamcorper viverra.",
                'ar' => "لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور

                                    أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد
                                    
                                    أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات"
            ],
            'category_id' => 5,
            'price' => rand(1, 10),
            'stock' => rand(1, 50),
            'featured' => rand(0, 1),
            'status' => true,
            'rate' => rand(1, 5),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Product::create([
            'name' =>  [
                'en' => 'Marigold Peel Fresh ',
            ],
            'description' => [
                'en' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sagittis enim at lacus bibendum pretium. Vivamus pulvinar ullamcorper viverra.",
                'ar' => "لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور

                                    أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد
                                    
                                    أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات"
            ],
            'category_id' => 5,
            'price' => rand(1, 10),
            'stock' => rand(1, 50),
            'featured' => rand(0, 1),
            'status' => true,
            'rate' => rand(1, 5),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Product::create([
            'name' =>  [
                'en' => 'orange',
            ],
            'description' => [
                'en' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sagittis enim at lacus bibendum pretium. Vivamus pulvinar ullamcorper viverra.",
                'ar' => "لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور

                                    أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد
                                    
                                    أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات"
            ],
            'category_id' => 5,
            'price' => rand(1, 10),
            'stock' => rand(1, 50),
            'featured' => rand(0, 1),
            'status' => true,
            'rate' => rand(1, 5),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Product::create([
            'name' =>  [
                'en' => 'Pomegranate Juice ',
            ],
            'description' => [
                'en' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sagittis enim at lacus bibendum pretium. Vivamus pulvinar ullamcorper viverra.",
                'ar' => "لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور

                                    أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد
                                    
                                    أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات"
            ],
            'category_id' => 5,
            'price' => rand(1, 10),
            'stock' => rand(1, 50),
            'featured' => rand(0, 1),
            'status' => true,
            'rate' => rand(1, 5),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Product::create([
            'name' =>  [
                'en' => 'Strawberry juice',
            ],
            'description' => [
                'en' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sagittis enim at lacus bibendum pretium. Vivamus pulvinar ullamcorper viverra.",
                'ar' => "لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور

                                    أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد
                                    
                                    أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات"
            ],
            'category_id' => 5,
            'price' => rand(1, 10),
            'stock' => rand(1, 50),
            'featured' => rand(0, 1),
            'status' => true,
            'rate' => rand(1, 5),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Product::create([
            'name' =>  [
                'en' => 'teapuples',
            ],
            'description' => [
                'en' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sagittis enim at lacus bibendum pretium. Vivamus pulvinar ullamcorper viverra.",
                'ar' => "لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور

                                    أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد
                                    
                                    أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات"
            ],
            'category_id' => 5,
            'price' => rand(1, 10),
            'stock' => rand(1, 50),
            'featured' => rand(0, 1),
            'status' => true,
            'rate' => rand(1, 5),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Product::create([
            'name' =>  [
                'en' => 'V8 Fusion Pomegranate Blueberry',
            ],
            'description' => [
                'en' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sagittis enim at lacus bibendum pretium. Vivamus pulvinar ullamcorper viverra.",
                'ar' => "لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور

                                    أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد
                                    
                                    أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات"
            ],
            'category_id' => 5,
            'price' => rand(1, 10),
            'stock' => rand(1, 50),
            'featured' => rand(0, 1),
            'status' => true,
            'rate' => rand(1, 5),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        // legumes
        Product::create([
            'name' =>  [
                'en' => 'Brown nuts',
            ],
            'description' => [
                'en' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sagittis enim at lacus bibendum pretium. Vivamus pulvinar ullamcorper viverra.",
                'ar' => "لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور

                                    أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد
                                    
                                    أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات"
            ],
            'category_id' => 6,
            'price' => rand(1, 10),
            'stock' => rand(1, 50),
            'featured' => rand(0, 1),
            'status' => true,
            'rate' => rand(1, 5),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Product::create([
            'name' =>  [
                'en' => 'Chickpea ',
            ],
            'description' => [
                'en' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sagittis enim at lacus bibendum pretium. Vivamus pulvinar ullamcorper viverra.",
                'ar' => "لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور

                                    أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد
                                    
                                    أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات"
            ],
            'category_id' => 6,
            'price' => rand(1, 10),
            'stock' => rand(1, 50),
            'featured' => rand(0, 1),
            'status' => true,
            'rate' => rand(1, 5),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Product::create([
            'name' =>  [
                'en' => 'Cocido Lentil',
            ],
            'description' => [
                'en' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sagittis enim at lacus bibendum pretium. Vivamus pulvinar ullamcorper viverra.",
                'ar' => "لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور

                                    أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد
                                    
                                    أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات"
            ],
            'category_id' => 6,
            'price' => rand(1, 10),
            'stock' => rand(1, 50),
            'featured' => rand(0, 1),
            'status' => true,
            'rate' => rand(1, 5),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Product::create([
            'name' =>  [
                'en' => 'Graphy Popcorn Maize Grain',
            ],
            'description' => [
                'en' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sagittis enim at lacus bibendum pretium. Vivamus pulvinar ullamcorper viverra.",
                'ar' => "لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور

                                    أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد
                                    
                                    أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات"
            ],
            'category_id' => 6,
            'price' => rand(1, 10),
            'stock' => rand(1, 50),
            'featured' => rand(0, 1),
            'status' => true,
            'rate' => rand(1, 5),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Product::create([
            'name' =>  [
                'en' => 'Green Pea',
            ],
            'description' => [
                'en' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sagittis enim at lacus bibendum pretium. Vivamus pulvinar ullamcorper viverra.",
                'ar' => "لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور

                                    أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد
                                    
                                    أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات"
            ],
            'category_id' => 6,
            'price' => rand(1, 10),
            'stock' => rand(1, 50),
            'featured' => rand(0, 1),
            'status' => true,
            'rate' => rand(1, 5),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Product::create([
            'name' =>  [
                'en' => 'Kidney beans platter',
            ],
            'description' => [
                'en' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sagittis enim at lacus bibendum pretium. Vivamus pulvinar ullamcorper viverra.",
                'ar' => "لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور

                                    أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد
                                    
                                    أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات"
            ],
            'category_id' => 6,
            'price' => rand(1, 10),
            'stock' => rand(1, 50),
            'featured' => rand(0, 1),
            'status' => true,
            'rate' => rand(1, 5),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Product::create([
            'name' =>  [
                'en' => 'Pea Food',
            ],
            'description' => [
                'en' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sagittis enim at lacus bibendum pretium. Vivamus pulvinar ullamcorper viverra.",
                'ar' => "لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور

                                    أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد
                                    
                                    أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات"
            ],
            'category_id' => 6,
            'price' => rand(1, 10),
            'stock' => rand(1, 50),
            'featured' => rand(0, 1),
            'status' => true,
            'rate' => rand(1, 5),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Product::create([
            'name' =>  [
                'en' => 'rice',
            ],
            'description' => [
                'en' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sagittis enim at lacus bibendum pretium. Vivamus pulvinar ullamcorper viverra.",
                'ar' => "لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور

                                    أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد
                                    
                                    أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات"
            ],
            'category_id' => 6,
            'price' => rand(1, 10),
            'stock' => rand(1, 50),
            'featured' => rand(0, 1),
            'status' => true,
            'rate' => rand(1, 5),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Product::create([
            'name' =>  [
                'en' => 'Walnuts',
            ],
            'description' => [
                'en' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sagittis enim at lacus bibendum pretium. Vivamus pulvinar ullamcorper viverra.",
                'ar' => "لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور

                                    أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد
                                    
                                    أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات"
            ],
            'category_id' => 6,
            'price' => rand(1, 10),
            'stock' => rand(1, 50),
            'featured' => rand(0, 1),
            'status' => true,
            'rate' => rand(1, 5),
            'created_at' => now(),
            'updated_at' => now(),
        ]);


        // meat
        Product::create([
            'name' =>  [
                'en' => 'Beef',
            ],
            'description' => [
                'en' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sagittis enim at lacus bibendum pretium. Vivamus pulvinar ullamcorper viverra.",
                'ar' => "لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور

                                    أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد
                                    
                                    أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات"
            ],
            'category_id' => 7,
            'price' => rand(1, 10),
            'stock' => rand(1, 50),
            'featured' => rand(0, 1),
            'status' => true,
            'rate' => rand(1, 5),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Product::create([
            'name' =>  [
                'en' => 'Chicken',
            ],
            'description' => [
                'en' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sagittis enim at lacus bibendum pretium. Vivamus pulvinar ullamcorper viverra.",
                'ar' => "لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور

                                    أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد
                                    
                                    أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات"
            ],
            'category_id' => 7,
            'price' => rand(1, 10),
            'stock' => rand(1, 50),
            'featured' => rand(0, 1),
            'status' => true,
            'rate' => rand(1, 5),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Product::create([
            'name' =>  [
                'en' => 'Duck',
            ],
            'description' => [
                'en' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sagittis enim at lacus bibendum pretium. Vivamus pulvinar ullamcorper viverra.",
                'ar' => "لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور

                                    أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد
                                    
                                    أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات"
            ],
            'category_id' => 7,
            'price' => rand(1, 10),
            'stock' => rand(1, 50),
            'featured' => rand(0, 1),
            'status' => true,
            'rate' => rand(1, 5),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Product::create([
            'name' =>  [
                'en' => 'Goose',
            ],
            'description' => [
                'en' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sagittis enim at lacus bibendum pretium. Vivamus pulvinar ullamcorper viverra.",
                'ar' => "لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور

                                    أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد
                                    
                                    أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات"
            ],
            'category_id' => 7,
            'price' => rand(1, 10),
            'stock' => rand(1, 50),
            'featured' => rand(0, 1),
            'status' => true,
            'rate' => rand(1, 5),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Product::create([
            'name' =>  [
                'en' => 'Lamb and Mutton',
            ],
            'description' => [
                'en' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sagittis enim at lacus bibendum pretium. Vivamus pulvinar ullamcorper viverra.",
                'ar' => "لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور

                                    أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد
                                    
                                    أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات"
            ],
            'category_id' => 7,
            'price' => rand(1, 10),
            'stock' => rand(1, 50),
            'featured' => rand(0, 1),
            'status' => true,
            'rate' => rand(1, 5),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Product::create([
            'name' =>  [
                'en' => 'Pork',
            ],
            'description' => [
                'en' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sagittis enim at lacus bibendum pretium. Vivamus pulvinar ullamcorper viverra.",
                'ar' => "لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور

                                    أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد
                                    
                                    أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات"
            ],
            'category_id' => 7,
            'price' => rand(1, 10),
            'stock' => rand(1, 50),
            'featured' => rand(0, 1),
            'status' => true,
            'rate' => rand(1, 5),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Product::create([
            'name' =>  [
                'en' => 'Rabbit',
            ],
            'description' => [
                'en' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sagittis enim at lacus bibendum pretium. Vivamus pulvinar ullamcorper viverra.",
                'ar' => "لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور

                                    أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد
                                    
                                    أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات"
            ],
            'category_id' => 7,
            'price' => rand(1, 10),
            'stock' => rand(1, 50),
            'featured' => rand(0, 1),
            'status' => true,
            'rate' => rand(1, 5),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Product::create([
            'name' =>  [
                'en' => 'Turkey',
            ],
            'description' => [
                'en' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sagittis enim at lacus bibendum pretium. Vivamus pulvinar ullamcorper viverra.",
                'ar' => "لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور

                                    أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد
                                    
                                    أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات"
            ],
            'category_id' => 7,
            'price' => rand(1, 10),
            'stock' => rand(1, 50),
            'featured' => rand(0, 1),
            'status' => true,
            'rate' => rand(1, 5),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Product::create([
            'name' =>  [
                'en' => 'Venison',
            ],
            'description' => [
                'en' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sagittis enim at lacus bibendum pretium. Vivamus pulvinar ullamcorper viverra.",
                'ar' => "لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور

                                    أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد
                                    
                                    أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات"
            ],
            'category_id' => 7,
            'price' => rand(1, 10),
            'stock' => rand(1, 50),
            'featured' => rand(0, 1),
            'status' => true,
            'rate' => rand(1, 5),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Product::create([
            'name' =>  [
                'en' => 'Wild Boar meat',
            ],
            'description' => [
                'en' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sagittis enim at lacus bibendum pretium. Vivamus pulvinar ullamcorper viverra.",
                'ar' => "لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور

                                    أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد
                                    
                                    أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات"
            ],
            'category_id' => 7,
            'price' => rand(1, 10),
            'stock' => rand(1, 50),
            'featured' => rand(0, 1),
            'status' => true,
            'rate' => rand(1, 5),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // egg and milk

        Product::create([
            'name' =>  [
                'en' => 'Butter',
            ],
            'description' => [
                'en' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sagittis enim at lacus bibendum pretium. Vivamus pulvinar ullamcorper viverra.",
                'ar' => "لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور

                            أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد
                            
                            أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات"
            ],
            'category_id' => 8,
            'price' => rand(1, 10),
            'stock' => rand(1, 50),
            'featured' => rand(0, 1),
            'status' => true,
            'rate' => rand(1, 5),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Product::create([
            'name' =>  [
                'en' => 'Cottage',
            ],
            'description' => [
                'en' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sagittis enim at lacus bibendum pretium. Vivamus pulvinar ullamcorper viverra.",
                'ar' => "لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور

                            أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد
                            
                            أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات"
            ],
            'category_id' => 8,
            'price' => rand(1, 10),
            'stock' => rand(1, 50),
            'featured' => rand(0, 1),
            'status' => true,
            'rate' => rand(1, 5),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Product::create([
            'name' =>  [
                'en' => 'Cream',
            ],
            'description' => [
                'en' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sagittis enim at lacus bibendum pretium. Vivamus pulvinar ullamcorper viverra.",
                'ar' => "لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور

                            أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد
                            
                            أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات"
            ],
            'category_id' => 8,
            'price' => rand(1, 10),
            'stock' => rand(1, 50),
            'featured' => rand(0, 1),
            'status' => true,
            'rate' => rand(1, 5),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Product::create([
            'name' =>  [
                'en' => 'Eggs Plate',
            ],
            'description' => [
                'en' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sagittis enim at lacus bibendum pretium. Vivamus pulvinar ullamcorper viverra.",
                'ar' => "لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور

                            أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد
                            
                            أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات"
            ],
            'category_id' => 8,
            'price' => rand(1, 10),
            'stock' => rand(1, 50),
            'featured' => rand(0, 1),
            'status' => true,
            'rate' => rand(1, 5),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Product::create([
            'name' =>  [
                'en' => 'Fresh Cheese',
            ],
            'description' => [
                'en' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sagittis enim at lacus bibendum pretium. Vivamus pulvinar ullamcorper viverra.",
                'ar' => "لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور

                            أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد
                            
                            أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات"
            ],
            'category_id' => 8,
            'price' => rand(1, 10),
            'stock' => rand(1, 50),
            'featured' => rand(0, 1),
            'status' => true,
            'rate' => rand(1, 5),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Product::create([
            'name' =>  [
                'en' => 'Fresh eggs',
            ],
            'description' => [
                'en' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sagittis enim at lacus bibendum pretium. Vivamus pulvinar ullamcorper viverra.",
                'ar' => "لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور

                            أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد
                            
                            أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات"
            ],
            'category_id' => 8,
            'price' => rand(1, 10),
            'stock' => rand(1, 50),
            'featured' => rand(0, 1),
            'status' => true,
            'rate' => rand(1, 5),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Product::create([
            'name' =>  [
                'en' => 'Fresh Milk',
            ],
            'description' => [
                'en' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sagittis enim at lacus bibendum pretium. Vivamus pulvinar ullamcorper viverra.",
                'ar' => "لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور

                            أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد
                            
                            أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات"
            ],
            'category_id' => 8,
            'price' => rand(1, 10),
            'stock' => rand(1, 50),
            'featured' => rand(0, 1),
            'status' => true,
            'rate' => rand(1, 5),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Product::create([
            'name' =>  [
                'en' => 'Lavachequirit',
            ],
            'description' => [
                'en' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sagittis enim at lacus bibendum pretium. Vivamus pulvinar ullamcorper viverra.",
                'ar' => "لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور

                            أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد
                            
                            أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات"
            ],
            'category_id' => 8,
            'price' => rand(1, 10),
            'stock' => rand(1, 50),
            'featured' => rand(0, 1),
            'status' => true,
            'rate' => rand(1, 5),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Product::create([
            'name' =>  [
                'en' => 'Milk',
            ],
            'description' => [
                'en' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sagittis enim at lacus bibendum pretium. Vivamus pulvinar ullamcorper viverra.",
                'ar' => "لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور

                            أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد
                            
                            أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات"
            ],
            'category_id' => 8,
            'price' => rand(1, 10),
            'stock' => rand(1, 50),
            'featured' => rand(0, 1),
            'status' => true,
            'rate' => rand(1, 5),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Product::create([
            'name' =>  [
                'en' => 'Nido Milk',
            ],
            'description' => [
                'en' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sagittis enim at lacus bibendum pretium. Vivamus pulvinar ullamcorper viverra.",
                'ar' => "لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور

                            أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد
                            
                            أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات"
            ],
            'category_id' => 8,
            'price' => rand(1, 10),
            'stock' => rand(1, 50),
            'featured' => rand(0, 1),
            'status' => true,
            'rate' => rand(1, 5),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Product::create([
            'name' =>  [
                'en' => 'Roomi cheese',
            ],
            'description' => [
                'en' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sagittis enim at lacus bibendum pretium. Vivamus pulvinar ullamcorper viverra.",
                'ar' => "لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور

                            أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد
                            
                            أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات"
            ],
            'category_id' => 8,
            'price' => rand(1, 10),
            'stock' => rand(1, 50),
            'featured' => rand(0, 1),
            'status' => true,
            'rate' => rand(1, 5),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Product::create([
            'name' =>  [
                'en' => 'White Eggs',
            ],
            'description' => [
                'en' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sagittis enim at lacus bibendum pretium. Vivamus pulvinar ullamcorper viverra.",
                'ar' => "لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور

                            أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد
                            
                            أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات"
            ],
            'category_id' => 8,
            'price' => rand(1, 10),
            'stock' => rand(1, 50),
            'featured' => rand(0, 1),
            'status' => true,
            'rate' => rand(1, 5),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // sea food
        Product::create([
            'name' =>  [
                'en' => 'Crab',
            ],
            'description' => [
                'en' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sagittis enim at lacus bibendum pretium. Vivamus pulvinar ullamcorper viverra.",
                'ar' => "لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور

                            أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد
                            
                            أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات"
            ],
            'category_id' => 9,
            'price' => rand(1, 10),
            'stock' => rand(1, 50),
            'featured' => rand(0, 1),
            'status' => true,
            'rate' => rand(1, 5),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Product::create([
            'name' =>  [
                'en' => 'Fresh Shrimp',
            ],
            'description' => [
                'en' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sagittis enim at lacus bibendum pretium. Vivamus pulvinar ullamcorper viverra.",
                'ar' => "لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور

                            أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد
                            
                            أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات"
            ],
            'category_id' => 9,
            'price' => rand(1, 10),
            'stock' => rand(1, 50),
            'featured' => rand(0, 1),
            'status' => true,
            'rate' => rand(1, 5),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Product::create([
            'name' =>  [
                'en' => 'Japanese Fish',
            ],
            'description' => [
                'en' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sagittis enim at lacus bibendum pretium. Vivamus pulvinar ullamcorper viverra.",
                'ar' => "لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور

                            أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد
                            
                            أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات"
            ],
            'category_id' => 9,
            'price' => rand(1, 10),
            'stock' => rand(1, 50),
            'featured' => rand(0, 1),
            'status' => true,
            'rate' => rand(1, 5),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Product::create([
            'name' =>  [
                'en' => 'Korean Fish',
            ],
            'description' => [
                'en' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sagittis enim at lacus bibendum pretium. Vivamus pulvinar ullamcorper viverra.",
                'ar' => "لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور

                            أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد
                            
                            أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات"
            ],
            'category_id' => 9,
            'price' => rand(1, 10),
            'stock' => rand(1, 50),
            'featured' => rand(0, 1),
            'status' => true,
            'rate' => rand(1, 5),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Product::create([
            'name' =>  [
                'en' => 'Mackerel Fish',
            ],
            'description' => [
                'en' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sagittis enim at lacus bibendum pretium. Vivamus pulvinar ullamcorper viverra.",
                'ar' => "لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور

                            أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد
                            
                            أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات"
            ],
            'category_id' => 9,
            'price' => rand(1, 10),
            'stock' => rand(1, 50),
            'featured' => rand(0, 1),
            'status' => true,
            'rate' => rand(1, 5),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Product::create([
            'name' =>  [
                'en' => 'Prawns',
            ],
            'description' => [
                'en' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sagittis enim at lacus bibendum pretium. Vivamus pulvinar ullamcorper viverra.",
                'ar' => "لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور

                            أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد
                            
                            أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات"
            ],
            'category_id' => 9,
            'price' => rand(1, 10),
            'stock' => rand(1, 50),
            'featured' => rand(0, 1),
            'status' => true,
            'rate' => rand(1, 5),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Product::create([
            'name' =>  [
                'en' => 'Shrimp',
            ],
            'description' => [
                'en' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sagittis enim at lacus bibendum pretium. Vivamus pulvinar ullamcorper viverra.",
                'ar' => "لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور

                            أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد
                            
                            أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات"
            ],
            'category_id' => 9,
            'price' => rand(1, 10),
            'stock' => rand(1, 50),
            'featured' => rand(0, 1),
            'status' => true,
            'rate' => rand(1, 5),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Product::create([
            'name' =>  [
                'en' => 'Trout Fish',
            ],
            'description' => [
                'en' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sagittis enim at lacus bibendum pretium. Vivamus pulvinar ullamcorper viverra.",
                'ar' => "لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور

                            أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد
                            
                            أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات"
            ],
            'category_id' => 9,
            'price' => rand(1, 10),
            'stock' => rand(1, 50),
            'featured' => rand(0, 1),
            'status' => true,
            'rate' => rand(1, 5),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
