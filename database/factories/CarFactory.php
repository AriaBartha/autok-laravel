<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'license_plate_number' => fake()->bothify('???-###'),
            'brand' => fake()->word(),
            'model' => fake()->word(),
            'year_of_manufacture' => fake()->year(),
            'fuel_type' => fake()->word(),
        ];
    }
}
