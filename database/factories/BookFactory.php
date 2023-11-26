<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => fake()->sentence(5),
            'author' => fake()->name(),
            'summary' => fake()->paragraph(4),
            'cover_url' => fake()->url(),
            'total_pages' => fake()->numberBetween(100, 500),
        ];
    }
}
