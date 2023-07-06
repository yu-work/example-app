<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Price>
 */
class PriceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $products = \App\Models\Product::pluck('product_id')->all();
        return [
            'product_id' => fake()->randomElement($products),
            'price' => fake()->numberBetween($min = 10000, $max = 100000),
        ];
    }
}
