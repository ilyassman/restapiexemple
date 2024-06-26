<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Membre>
 */
class MembreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nom'=>fake()->firstName,
            'prenom'=>fake()->firstName,
            'iduser'=>fake()->biasedNumberBetween(1,10),
            'image'=>fake()->imageUrl()
        ];
    }
}
