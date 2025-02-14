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
            ['name' => 'Corned Beef', 'description' => 'Canned corned beef, ready to eat', 'category_id' => 1, 'whole_sale_price' => 30.00, 'retail_price' => 35.00, 'imageURL' => 'https://i5.walmartimages.com/seo/Hereford-Low-Sodium-Corned-Beef-12-oz_69cd8a27-7c4f-4d6d-98e1-324dd1603d97.c11c4716fe2c8680fb8985eb9d2444d6.png?odnHeight=2000&odnWidth=2000&odnBg=FFFFFF'],
            ['name' => 'Sardines', 'description' => 'Canned sardines in tomato sauce', 'category_id' => 1, 'whole_sale_price' => 20.00, 'retail_price' => 25.00, 'imageURL' => ' https://i5.walmartimages.com/seo/Chicken-of-the-Sea-Wild-Caught-Sardines-in-Olive-Oil-3-75-oz-Can_c59998fa-f176-46ea-a361-2ca401503d7b.ef23763d4d015177ef34e22e3b087335.jpeg?odnHeight=2000&odnWidth=2000&odnBg=FFFFFF'],
            ['name' => 'Baked Beans', 'description' => 'Canned baked beans with sauce', 'category_id' => 1, 'whole_sale_price' => 25.00, 'retail_price' => 30.00, 'imageURL' => ' https://i5.walmartimages.com/seo/Great-Value-Brown-Sugar-Hickory-Baked-Beans-28-oz-Can_b3ffc26b-9006-44d8-8416-9ad166b1b622.1a0a2b8335294b18c37ae3dbcc592491.jpeg?odnHeight=2000&odnWidth=2000&odnBg=FFFFFF'],

            // Dairy Products
            ['name' => 'Fresh Milk', 'description' => 'Full cream fresh milk', 'category_id' => 2, 'whole_sale_price' => 50.00, 'retail_price' => 60.00, 'imageURL' => 'https://i5.walmartimages.com/seo/Great-Value-Reduced-Fat-2-Milk-1-Gal_22a6459a-13b6-4057-aeae-45e62c69e8f8.47f793426ff66fa6432c948d836704f0.jpeg?odnHeight=640&odnWidth=640&odnBg=FFFFFF'],
            ['name' => 'Cheddar Cheese', 'description' => 'Block of cheddar cheese', 'category_id' => 2, 'whole_sale_price' => 40.00, 'retail_price' => 50.00, 'imageURL'=> 'https://i5.walmartimages.com/seo/Tillamook-Medium-Cheddar-Cheese-Slices-32-oz_a6abefb2-2f36-4183-a4cf-c6023941da23.b0ff622805b3580c9dbb45539f3c616d.png?odnHeight=2000&odnWidth=2000&odnBg=FFFFFF'],
            ['name' => 'Yogurt', 'description' => 'Flavored yogurt', 'category_id' => 2, 'whole_sale_price' => 35.00, 'retail_price' => 45.00, 'imageURL'=> 'https://i5.walmartimages.com/seo/Stonyfield-Organic-Lowfat-Yogurt-Smoothies-Strawberry-Banana-3-1-fl-oz-6-Count_10e3a2ec-9f16-4f5a-9368-540f13ba5642.341ecdebfd188c49611768e343d47695.jpeg?odnHeight=2000&odnWidth=2000&odnBg=FFFFFF'],

            // Noodles
            ['name' => 'Spaghetti', 'description' => 'Long, thin pasta', 'category_id' => 3, 'whole_sale_price' => 50.00, 'retail_price' => 60.00, 'imageURL'=> 'https://i5.walmartimages.com/seo/Great-Value-Half-Length-Spaghetti-16-oz_2f43bccc-0d1b-4273-924b-847c1ac8568f.9a6eca3f91ee4653d35da681cf4ee1fc.jpeg?odnHeight=640&odnWidth=640&odnBg=FFFFFF'],
            ['name' => 'Macaroni', 'description' => 'Short, tube-shaped pasta', 'category_id' => 3, 'whole_sale_price' => 40.00, 'retail_price' => 50.00, 'imageURL'=> 'https://i5.walmartimages.com/seo/Great-Value-Elbows-16-oz-Box-Shelf-Stable_82ee4d3a-4a51-4a7a-92ca-bffaef0b3379.9c649dc9546f45c10c060e1d982b5f0d.jpeg?odnHeight=640&odnWidth=640&odnBg=FFFFFF'],
            ['name' => 'Fettuccine', 'description' => 'Flat, ribbon-like pasta', 'category_id' => 3, 'whole_sale_price' => 60.00, 'retail_price' => 70.00,'imageURL'=> 'https://i5.walmartimages.com/seo/Colavita-Fettuccine-Nests-Pasta-16-oz_3a16bb9a-79b2-4c21-bdc8-2545aceed2ce_2.3c2f2764880e9d9921a96022955a902b.jpeg?odnHeight=2000&odnWidth=2000&odnBg=FFFFFF'],

            // Frozen Foods
            ['name' => ' Chicken Nuggets', 'description' => 'Ready-to-cook chicken nuggets', 'category_id' => 4, 'whole_sale_price' => 80.00, 'retail_price' => 90.00,'imageURL'=> 'https://i5.walmartimages.com/seo/Applegate-Natural-Gluten-Free-Chicken-Nuggets-16oz-Resealable-Bag-Frozen_453e0baf-20a7-4ae9-9c62-b326413f9020.b1b4c449f5f9532b2fb8824ecd5be53b.jpeg?odnHeight=2000&odnWidth=2000&odnBg=FFFFFF'],
            ['name' => ' Fish Fillet', 'description' => 'Breaded frozen fish fillet', 'category_id' => 4, 'whole_sale_price' => 70.00, 'retail_price' => 80.00, 'imageURL'=> 'https://i5.walmartimages.com/seo/Grilled-Catch-Seafood-Sampler-Variety-Pack-Sampler-Wild-Mackerel-Canned-Fish-Salmon-Fillets-olive-oil-Yellowfin-Tuna-Herring-Fillet-oil_383cdde3-3054-4bfa-982b-115d21e8bf0c.aa45e952773dc15eeb62b1e3241b118a.png?odnHeight=2000&odnWidth=2000&odnBg=FFFFFF'],
            ['name' => ' Dumplings', 'description' => 'Pack of frozen dumplings', 'category_id' => 4, 'whole_sale_price' => 85.00, 'retail_price' => 95.00, 'imageURL'=> 'https://i5.walmartimages.com/seo/Tai-Pei-Pork-Potstickers-Frozen-Asian-Appetizers-46-5-oz_db036f7b-2ada-4d7f-b9e9-4ffcb8e36580.c9f77f7d9ae5257393a4a66f9f3f0f30.jpeg?odnHeight=2000&odnWidth=2000&odnBg=FFFFFF'],

            // Beverages
            ['name' => 'Orange Juice', 'description' => '100% natural orange juice', 'category_id' => 5, 'whole_sale_price' => 30.00, 'retail_price' => 40.00, 'imageURL'=> 'https://i5.walmartimages.com/seo/Great-Value-Orange-Juice-From-Concentrate-with-Pulp-64oz_3590f87b-08b5-4e44-9519-033e016f2f19.c37aca046a97054fec3b5123fff7ae10.jpeg?odnHeight=2000&odnWidth=2000&odnBg=FFFFFF'],
            ['name' => 'Mineral Water', 'description' => 'Bottled purified water', 'category_id' => 5, 'whole_sale_price' => 10.00, 'retail_price' => 15.00, 'imageURL'=> 'https://i5.walmartimages.com/seo/Dasani-Purified-Water-Bottles-16-9-fl-oz-32-Pack_cbcdc2c5-7026-476b-b4b2-82cf4758617f.4b95b4a6e5cf0b31f3069b203f7db40f.jpeg?odnHeight=2000&odnWidth=2000&odnBg=FFFFFF'],
            ['name' => 'Cola', 'description' => 'Carbonated cola drink', 'category_id' => 5, 'whole_sale_price' => 20.00, 'retail_price' => 25.00, 'imageURL'=> 'https://i5.walmartimages.com/seo/Sam-s-Cola-12-fl-oz-24-Pack_db8fab98-bd24-405e-845b-9542e9f0c14b.eae96ad3604519a22cdd24759181fe52.jpeg?odnHeight=2000&odnWidth=2000&odnBg=FFFFFF'],

            // Liquor
            ['name' => 'Whiskey', 'description' => 'Aged whiskey', 'category_id' => 6, 'whole_sale_price' => 250.00, 'retail_price' => 280.00, 'imageURL'=> 'https://i5.walmartimages.com/seo/Jack-Daniel-s-Old-No-7-Tennessee-Whiskey-750-ml-Bottle-80-Proof_87754efe-2eec-4995-9f47-e75843c40818.89d3ee8ee7e6332124394f48b2bc3da1.jpeg?odnHeight=2000&odnWidth=2000&odnBg=FFFFFF'],
            ['name' => 'Beer', 'description' => 'Lager beer', 'category_id' => 6, 'whole_sale_price' => 50.00, 'retail_price' => 60.00, 'imageURL'=> 'https://i5.walmartimages.com/seo/Bud-Light-Beer-24-Pack-Beer-12-fl-oz-Glass-Bottles-4-2-ABV-Domestic-Lager_b0c6dcca-80be-4ea5-947e-7ac5e42db7f6.439c10a36388bb27d16c87bb373a9143.jpeg?odnHeight=640&odnWidth=640&odnBg=FFFFFF'],
            ['name' => 'Red Wine', 'description' => 'Fine red wine', 'category_id' => 6, 'whole_sale_price' => 200.00, 'retail_price' => 220.00, 'imageURL'=> 'https://i5.walmartimages.com/seo/Oak-Leaf-Vineyards-Cabernet-Sauvignon-Red-Wine-750-ml-Bottle-13-ABV_4ddf36db-ea43-44f0-ac4f-b2c021396811.4006152fd91b1c0660aa13576b32c30f.jpeg?odnHeight=640&odnWidth=640&odnBg=FFFFFF'],

            // Snacks
            ['name' => 'Potato Chips', 'description' => 'Crispy salted potato chips', 'category_id' => 7, 'whole_sale_price' => 25.00, 'retail_price' => 30.00, 'imageURL'=> 'https://i5.walmartimages.com/seo/Lay-s-Classic-Potato-Snack-Chips-Party-Size-13-oz-Bag_066afffd-49e9-4d1c-abb4-3cdce85da3f0.43865a58381c82680d373ec7449460e4.jpeg?odnHeight=2000&odnWidth=2000&odnBg=FFFFFF'],
            ['name' => 'Chocolate Chip Cookies', 'description' => 'Pack of cookies with chocolate chips', 'category_id' => 7, 'whole_sale_price' => 35.00, 'retail_price' => 45.00, 'imageURL'=> 'https://i5.walmartimages.com/seo/Betty-Crocker-Ready-to-Bake-Chocolate-Chip-Cookie-Mix-17-5-oz_239de303-da14-42e7-b4e3-cb7a1dd9a06c.f9bb882ec539244cff08bcff70738a2c.jpeg?odnHeight=2000&odnWidth=2000&odnBg=FFFFFF'],
            ['name' => 'Granola Bars', 'description' => 'Healthy oat-based snack bars', 'category_id' => 7, 'whole_sale_price' => 40.00, 'retail_price' => 50.00, 'imageURL'=> 'https://i5.walmartimages.com/seo/Nature-Valley-Crunchy-Granola-Bars-Oats-n-Honey-12-Bars-8-94-OZ-6-Pouches_e43368a3-a22d-4b55-a712-20652e56de42.ad5fe4a6c43d42c99ac7be73d9ab7554.jpeg?odnHeight=2000&odnWidth=2000&odnBg=FFFFFF'],

            // Cleaning Products
            ['name' => 'Dishwashing Liquid', 'description' => 'Lemon-scented dish soap', 'category_id' => 8, 'whole_sale_price' => 45.00, 'retail_price' => 55.00, 'imageURL'=> 'https://i5.walmartimages.com/seo/Seventh-Generation-Clean-with-Purpose-Liquid-Dish-Soap-Clementine-Zest-and-Lemongrass-19-fl-oz_7fefb208-c870-4629-b2ef-9d85a311d52d.33118ade4c53a97d8394915678401668.jpeg?odnHeight=2000&odnWidth=2000&odnBg=FFFFFF'],
            ['name' => 'Laundry Detergent', 'description' => 'Heavy-duty laundry powder', 'category_id' => 8, 'whole_sale_price' => 50.00, 'retail_price' => 60.00, 'imageURL'=> 'https://i5.walmartimages.com/seo/Tide-Liquid-Laundry-Detergent-Original-64-Loads-84-fl-oz-HE-Compatible_d95d612e-dffe-4aa5-9a8e-e77e4df425c2.c442d03702bbf6a50665c07ace442bbf.jpeg?odnHeight=2000&odnWidth=2000&odnBg=FFFFFF'],
            ['name' => 'Toilet Cleaner', 'description' => 'Disinfecting toilet bowl cleaner', 'category_id' => 8, 'whole_sale_price' => 55.00, 'retail_price' => 65.00, 'imageURL'=> 'https://i5.walmartimages.com/seo/Clorox-Clx-Tbc-Scent-Tusc_05bf01ff-a6ed-4219-bbeb-738f6da3fd99.95fef0dcb1d2cc340035a87fecbda4b2.jpeg?odnHeight=2000&odnWidth=2000&odnBg=FFFFFF'],

            // School and Office Supplies
            ['name' => 'Notebook', 'description' => '100-page ruled notebook', 'category_id' => 9, 'whole_sale_price' => 25.00, 'retail_price' => 30.00, 'imageURL'=> 'https://i5.walmartimages.com/seo/Pen-Gear-College-Ruled-Poly-1-Subject-Notebook-with-Inside-Pockets-9-x-11-Teal-100-Heavyweight-Sheets_cf0efb86-bfbf-49c2-8f6c-e1a4f3219cd2.9c9f0bb17231e95bebd2f82e77c473a0.jpeg?odnHeight=2000&odnWidth=2000&odnBg=FFFFFF'],
            ['name' => 'Ballpoint Pen', 'description' => 'Blue ink retractable pen', 'category_id' => 9, 'whole_sale_price' => 10.00, 'retail_price' => 15.00,'imageURL'=> 'https://i5.walmartimages.com/seo/Z-Grip-Retractable-Ballpoint-Pen-Black-7-Pack_9c3f605c-7a6c-40d4-aaec-7f236d8c3b5d.49e526a0ec7b179e852b3efd0757bfb2.jpeg?odnHeight=2000&odnWidth=2000&odnBg=FFFFFF'],
            ['name' => 'Printer Paper', 'description' => 'Ream of A4 printer paper', 'category_id' => 9, 'whole_sale_price' => 80.00, 'retail_price' => 100.00, 'imageURL'=> 'https://i5.walmartimages.com/seo/Printworks-Bright-Color-Paper-Orange-8-5-x-11-24-lb-1000-Sheets_58a29637-1064-4a72-9180-2759201318af.775a84e9e723096c32d637a540653ad3.jpeg?odnHeight=2000&odnWidth=2000&odnBg=FFFFFF'],
        ];
        foreach ($products as $product) {
            \App\Models\Product::create($product);
        }
    }
}
