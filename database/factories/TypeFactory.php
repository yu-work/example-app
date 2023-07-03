<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class TypeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $type_first_array = ['customer', 'employee', 'admin', 'partner', 'company'];
        $type_first_string = $type_first_array[array_rand($type_first_array, 1)];
        $type_second = '';
        switch ($type_first_string) {
            case 'customer':
                $type_second_customer_array = ['subscribing customer', 'stop using'];
                $type_second_string = $type_second_customer_array[array_rand($type_second_customer_array, 1)];
                break;
            case 'employee':
                $type_second_employee_array = ['sales', 'planner', 'chief officer', 'designer'];
                $type_second_string = $type_second_employee_array[array_rand($type_second_employee_array, 1)];
                break;
            case 'admin':
                $type_second_admin_array = ['top level', 'middle', 'common worker'];
                $type_second_string = $type_second_admin_array[array_rand(['top level', 'middle', 'common worker'], 1)];
                break;
            case 'partner':
                $type_second_partner_array = ['tokyo area', 'kanto area', 'hokkaido area'];
                $type_second_string = $type_second_partner_array[array_rand(['tokyo area', 'kanto area', 'hokkaido area'], 1)];
                break;
            case 'company':
                $type_second_string = fake()->company();
                break;
        }
        
        return [
            'type_name' => $type_first_string . '/' . $type_second_string,
        ];
    }
}
