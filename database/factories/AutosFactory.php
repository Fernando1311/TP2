<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Autos>
 */
class AutosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'id_dueño'=>fake()->numberbetween(1,40),
            'Placa'=>fake()->bothify('???####'),
            'Año'=>fake()->year ($max ='now'),
            'Modelo'=>fake()->word(),
            'Foto'=>fake()->imageUrl(640,480),
            'Tipo'=>("'Camioneta', 'Pickup', 'Camion'")
        ];
    }
}
