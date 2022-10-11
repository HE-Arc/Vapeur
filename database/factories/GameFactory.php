<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Game>
 */
class GameFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->name(),
            'description' => fake()->name(),
            'price' => fake()->randomFloat(2, 1, 80),
            'image_path' => '',
            'publisher' => fake()->name(),
            'developer' => fake()->name(),
            'age_rating' => '3',
            'release_date' => now()
        ];
    }
}
