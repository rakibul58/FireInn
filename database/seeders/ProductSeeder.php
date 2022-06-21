<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            
        [
            'name' => 'Asparagus And Steak',
            'price' => '1000', 
            'category' => 'Meat',
            'description' => 'This is medium steak with grilled asparagus', 
            'gallery' => 'https://github.com/rakibul58/FireInn/blob/main/FireInn-img/asparagus-steak_1920.jpg?raw=true',
        ],
        [
            'name' => 'Chicken Burger',
            'price' => '200', 
            'category' => 'Burger',
            'description' => 'This is medium sized burger with crispy chicken', 
            'gallery' => 'https://github.com/rakibul58/FireInn/blob/main/FireInn-img/chickenburger_1920.jpg?raw=true',
        ],
        [
            'name' => 'Chocolate Smoothie',
            'price' => '150', 
            'category' => 'Drinks',
            'description' => 'Freshly made chocolate smoothie', 
            'gallery' => 'https://github.com/rakibul58/FireInn/blob/main/FireInn-img/chocolate-smoothie_1920.jpg?raw=true',
        ],
        [
            'name' => 'French Fries',
            'price' => '50', 
            'category' => 'Fries',
            'description' => 'These are Freshly fried french fries', 
            'gallery' => 'https://github.com/rakibul58/FireInn/blob/main/FireInn-img/frenchFries_1920.jpg?raw=true',
        ],
        [
            'name' => 'Cheese Salad',
            'price' => '200', 
            'category' => 'Salad',
            'description' => 'Fresh Salad with goat cheese', 
            'gallery' => 'https://github.com/rakibul58/FireInn/blob/main/FireInn-img/salad-cheese_1920.jpg?raw=true',
        ],
        [
            'name' => 'Salmon Salad',
            'price' => '400', 
            'category' => 'Salad',
            'description' => 'Fresh Salad with grilled Salmon', 
            'gallery' => 'https://github.com/rakibul58/FireInn/blob/main/FireInn-img/salmon-salad_1920.jpg?raw=true',
        ],
        [
            'name' => 'Shish Kebab',
            'price' => '200', 
            'category' => 'Meat',
            'description' => 'Grilled Kebab', 
            'gallery' => 'https://github.com/rakibul58/FireInn/blob/main/FireInn-img/shish-kebab-g588c4483c_1920.jpg?raw=true',
        ],
        [
            'name' => 'Steak',
            'price' => '1200', 
            'category' => 'Meat',
            'description' => 'Big sized grilled steak', 
            'gallery' => 'https://github.com/rakibul58/FireInn/blob/main/FireInn-img/steak-beef_1920.jpg?raw=true',
        ],
        [
            'name' => 'Strawberry Smoothie',
            'price' => '100', 
            'category' => 'Drinks',
            'description' => 'Fresh Strawberry smoothie', 
            'gallery' => 'https://github.com/rakibul58/FireInn/blob/main/FireInn-img/strawberrySmoothee_1920.jpg?raw=true',
        ],
        [
            'name' => 'Waffle Ice Cream',
            'price' => '200', 
            'category' => 'Desert',
            'description' => 'Waffle with differen types of ice cream', 
            'gallery' => 'https://github.com/rakibul58/FireInn/blob/main/FireInn-img/waffle-iceCrean_1920.jpg?raw=true',
        ],
        [
            'name' => 'Hamburger and Fries',
            'price' => '300', 
            'category' => 'Burger',
            'description' => 'Big size burger and french fries', 
            'gallery' => 'https://github.com/rakibul58/FireInn/blob/main/FireInn-img/hamburgerAndFries_1920.jpg?raw=true',
        ]
        ]);
    }
}
