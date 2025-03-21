<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Attendance>
 */
class AttendanceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $status = ['Hadir', 'Tidak Hadir', 'Izin', 'Sakit'];
        return [
            'status'=> fake()->randomElement($status),
            'date' => fake()->date('y-m-d')
        ];
    }
}
