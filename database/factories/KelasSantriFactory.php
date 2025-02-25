<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\KelasSantri>
 */
class KelasSantriFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $jurusan = ['Marketer','Service','Programer','Video grafher', 'Desaigner', 'Content Creator'];
        return [
            'major' => fake()->randomElement($jurusan),
        ];
    }
}
