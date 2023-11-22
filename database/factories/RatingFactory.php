<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RatingFactory extends Factory
{
    public function definition(): array
    {
        return [
            'id' => fake()->uuid(),
            'rate' => fake()->numberBetween(1, 5),
            'description' => fake()->text(),
        ];
    }
}
