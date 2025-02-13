<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $products = [
            // Canned Goods
            ['name' => 'Corned Beef', 'description' => 'Canned corned beef, ready to eat', 'category_id' => 1, 'whole_sale_price' => 30.00, 'retail_price' => 35.00],
            ['name' => 'Sardines', 'description' => 'Canned sardines in tomato sauce', 'category_id' => 1, 'whole_sale_price' => 20.00, 'retail_price' => 25.00],
            ['name' => 'Baked Beans', 'description' => 'Canned baked beans with sauce', 'category_id' => 1, 'whole_sale_price' => 25.00, 'retail_price' => 30.00],

            // Dairy Products
            ['name' => 'Fresh Milk', 'description' => 'Full cream fresh milk', 'category_id' => 2, 'whole_sale_price' => 50.00, 'retail_price' => 60.00],
            ['name' => 'Cheddar Cheese', 'description' => 'Block of cheddar cheese', 'category_id' => 2, 'whole_sale_price' => 40.00, 'retail_price' => 50.00],
            ['name' => 'Yogurt', 'description' => 'Flavored yogurt', 'category_id' => 2, 'whole_sale_price' => 35.00, 'retail_price' => 45.00],

            // Noodles
            ['name' => 'Spaghetti', 'description' => 'Long, thin pasta', 'category_id' => 3, 'whole_sale_price' => 50.00, 'retail_price' => 60.00],
            ['name' => 'Macaroni', 'description' => 'Short, tube-shaped pasta', 'category_id' => 3, 'whole_sale_price' => 40.00, 'retail_price' => 50.00],
            ['name' => 'Fettuccine', 'description' => 'Flat, ribbon-like pasta', 'category_id' => 3, 'whole_sale_price' => 60.00, 'retail_price' => 70.00],

            // Frozen Foods
            ['name' => 'Frozen Chicken Nuggets', 'description' => 'Ready-to-cook chicken nuggets', 'category_id' => 4, 'whole_sale_price' => 80.00, 'retail_price' => 90.00],
            ['name' => 'Frozen Fish Fillet', 'description' => 'Breaded frozen fish fillet', 'category_id' => 4, 'whole_sale_price' => 70.00, 'retail_price' => 80.00],
            ['name' => 'Frozen Dumplings', 'description' => 'Pack of frozen dumplings', 'category_id' => 4, 'whole_sale_price' => 85.00, 'retail_price' => 95.00],

            // Beverages
            ['name' => 'Orange Juice', 'description' => '100% natural orange juice', 'category_id' => 5, 'whole_sale_price' => 30.00, 'retail_price' => 40.00],
            ['name' => 'Mineral Water', 'description' => 'Bottled purified water', 'category_id' => 5, 'whole_sale_price' => 10.00, 'retail_price' => 15.00],
            ['name' => 'Cola', 'description' => 'Carbonated cola drink', 'category_id' => 5, 'whole_sale_price' => 20.00, 'retail_price' => 25.00],

            // Liquor
            ['name' => 'Whiskey', 'description' => 'Aged whiskey', 'category_id' => 6, 'whole_sale_price' => 250.00, 'retail_price' => 280.00],
            ['name' => 'Beer', 'description' => 'Lager beer', 'category_id' => 6, 'whole_sale_price' => 50.00, 'retail_price' => 60.00],
            ['name' => 'Red Wine', 'description' => 'Fine red wine', 'category_id' => 6, 'whole_sale_price' => 200.00, 'retail_price' => 220.00],

            // Snacks
            ['name' => 'Potato Chips', 'description' => 'Crispy salted potato chips', 'category_id' => 7, 'whole_sale_price' => 25.00, 'retail_price' => 30.00],
            ['name' => 'Chocolate Chip Cookies', 'description' => 'Pack of cookies with chocolate chips', 'category_id' => 7, 'whole_sale_price' => 35.00, 'retail_price' => 45.00],
            ['name' => 'Granola Bars', 'description' => 'Healthy oat-based snack bars', 'category_id' => 7, 'whole_sale_price' => 40.00, 'retail_price' => 50.00],

            // Cleaning Products
            ['name' => 'Dishwashing Liquid', 'description' => 'Lemon-scented dish soap', 'category_id' => 8, 'whole_sale_price' => 45.00, 'retail_price' => 55.00],
            ['name' => 'Laundry Detergent', 'description' => 'Heavy-duty laundry powder', 'category_id' => 8, 'whole_sale_price' => 50.00, 'retail_price' => 60.00],
            ['name' => 'Toilet Cleaner', 'description' => 'Disinfecting toilet bowl cleaner', 'category_id' => 8, 'whole_sale_price' => 55.00, 'retail_price' => 65.00],

            // School and Office Supplies
            ['name' => 'Notebook', 'description' => '100-page ruled notebook', 'category_id' => 9, 'whole_sale_price' => 25.00, 'retail_price' => 30.00],
            ['name' => 'Ballpoint Pen', 'description' => 'Blue ink retractable pen', 'category_id' => 9, 'whole_sale_price' => 10.00, 'retail_price' => 15.00],
            ['name' => 'Printer Paper', 'description' => 'Ream of A4 printer paper', 'category_id' => 9, 'whole_sale_price' => 80.00, 'retail_price' => 100.00],
        ];
        foreach ($products as $product) {
            \App\Models\Product::create($product);
        }
    }
}
