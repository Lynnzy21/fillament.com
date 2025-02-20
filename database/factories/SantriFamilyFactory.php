<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SantriFamily>
 */
class SantriFamilyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // 'santri_id' => $this->faker->uuid(),
            'no_kk' => $this->faker->numerify('##'),
            'father_name' => fake()->name('male'),
            'father_job' => fake()->jobTitle(),
            'father_birth' => fake()->date(),
            'father_phone' => fake()->phoneNumber(),
            'mother_name' => fake()->name('female'),
            'mother_job' => fake()->jobTitle(),
            'mother_birth' => fake()->date(),
            'mother_phone' => fake()->phoneNumber(),
        ];
    }
}
