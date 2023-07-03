<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $countries = \App\Models\Country::pluck('id')->all();
        $types = \App\Models\Type::pluck('id')->all();
        return [
            'name' => fake()->name(),
            'type' => fake()->randomElement($types),
            'country_id' => fake()->randomElement($countries),
        ];
    }
}
