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
            'brand' => fake()->word('Renault'),
            'name' => fake()->word('R4'),
            'build_year' => fake()->year(1969),
            'color' => fake()->safeColorName(),
            'user_id' => fake()->numberBetween(1, 50),
            'created_at' => fake()->dateTimeInInterval('-50 week', 'now'),
        ];
    }
}
