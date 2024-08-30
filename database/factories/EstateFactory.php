<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Estate>
 */
class EstateFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'image' => null,
            'location' => fake()->unique()->name(),
            'description' => fake()->unique()->sentences(4),
            'user_id' => fake()->numberBetween(1, 6),
            'town' => fake('it_IT')->city(),
            'area' => fake()->numberBetween(100, 500),
            'price' => fake()->numberBetween(1300, 700),
            'is_active' => fake()->boolean(50),
        ];
    }
}
