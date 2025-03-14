<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProgramStage>
 */
class ProgramStageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'description' => fake()->randomElement(['Kerja Bakti', 'Main Futsal','Main Basket', 'Partyan', 'COC', 'Olimpiade', 'Ossis']),
            'start_date' => fake()->date('Y-m-d'),
            'end_date' => fake()->date('Y-m-d')
        ];
    }
}
