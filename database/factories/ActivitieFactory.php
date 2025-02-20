<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Activitie>
 */
class ActivitieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'activity_name' => fake()->name(),
            'activity_date' => fake()->date('y-m-d'),
            'is_event' => fake()->paragraph(),
            'description' => fake()->paragraph()
        ];
    }
}
