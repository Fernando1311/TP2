<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Personas>
 */
class PersonasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'Nombres'=>fake()->firstName(),
            'Apellidos'=>fake()->lastName(),
            'No_Identidad'=>fake()->numerify('####-').fake()->numberBetween(1965,2000).fake()->numerify('-#####'),
            'Pais'=>fake()->country(),
            'Cuidad'=>fake()->city(),
            'Foto'=>fake()->imageUrl(640,480),
        ];
    }
}
