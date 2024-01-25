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
        $brands = ["Ford", "Opel", "Skoda", "Renault"];
        $fuel = ["elektromos", "benzin", "dízel"];
        $models = [

            "Ford" => [
                "Focus",
                "Fiesta",
            ],
            "Opel" => [
                "Corsa",
                "Meriva",
            ],
            "Skoda" => [
                "Fabia",
                "Superb"
            ],
            "Renault" => [
                "Clio",
                "Megane"
            ]


            ];

        $brand = fake()->randomElement($brands);
        $model = fake()->randomElement($models[$brand]);

        return [
            'license_plate_number' => fake()->bothify('???-###'),
            'brand' => fake()->randomElement($brands),
            //'brand' => fake() -> $brand,
            'model' => fake()->word(),
            //'model' => fake() -> $model,
            'year_of_manufacture' => fake()->year("-1 year"),
            'fuel_type' => fake()->randomElement($fuel),
        ];
    }
}
