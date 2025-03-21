<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\permission>
 */
class PermissionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $status = ['Di Izinkan', 'Tidak Di Izinkan'];
        return [
            'reason' => fake()->paragraph(),
            'status' => fake()->randomElement($status),
            'start_date' => fake()->date('Y-m-d'),
            'end_date' => fake()->date('Y-m-d '),
        ];
    }
}
