<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'description' => fake()->sentence(),
            'category_id' => rand(1,8),
            'whole_sale_price' => rand(50,100),
            'retail_price' => rand(50,100),
            'imageURL' => 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.shutterstock.com%2Fsearch%2Fplace-holder-image&psig=AOvVaw0IxDdOgkUiYk-50-Pts7G-&ust=1741921998851000&source=images&cd=vfe&opi=89978449&ved=0CBEQjRxqFwoTCKih8KOLhowDFQAAAAAdAAAAABAE',

        ];
    }
}
