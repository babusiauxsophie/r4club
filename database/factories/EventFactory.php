<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'date' => fake()->dateTimeBetween('now', '+50 week'),
            'title' => fake()->sentence(),
            'description' => fake()->paragraph(),
            'streetname' => fake()->streetName(),
            'streetnumber' => fake()->buildingNumber(),
            'city' => fake()->city(),
            'zipcode' => fake()->postcode(),
            'user_id' => fake()->numberBetween(1, 50),
            'created_at' => fake()->dateTimeInInterval('-50 week', 'now'),

        ];
    }
}
