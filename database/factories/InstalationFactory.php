<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Instalation>
 */
class InstalationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->sentence(fake()->numberBetween(1, 5), false),
            'desc' => fake()->sentence(fake()->numberBetween(0, 10), true),
        ];
    }
}
