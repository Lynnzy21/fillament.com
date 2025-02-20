<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Rapotsantri>
 */
class RapotsantriFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'academic_year' =>  fake()->name(),
            'overal_score' => fake()->randomFloat(2,0,10),
            'strength' => fake()->paragraph(),
            'weaknesses' => fake()->paragraph(),
        ];
    }
}
