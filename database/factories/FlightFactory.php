<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Flight>
 */
class FlightFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $destinations = \App\Models\Destination::pluck('id')->all();
        return [
            'name' => 'FR ' . fake()->randomNumber($nbDigits = 8),
            'destination_id' => fake()->randomElement($destinations),
            'arrived_at' => fake()->dateTimeBetween($startDate = '-4 hours', $endDate = 'now')->format('Y/m/d H:i')
        ];
    }
}
