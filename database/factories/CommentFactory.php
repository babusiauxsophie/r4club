<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'content' => fake()->paragraph(),
            'created_at' => fake()->dateTime(),
            'user_id' => fake()->numberBetween(1, 50),
            'parent_id' => fake()->numberBetween(1, 50),
        ];
    }
}
