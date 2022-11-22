<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tranferencias>
 */
class TranferenciasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'No_Placa'=>fake()->numberbetween(1,40),
            'Identidad_dueño_anterior'=>fake()->bothify('???#####'),
            'Identidad_dueño_actual'=>fake()->bothify('???######'),
            'Precio'=>fake()->numberbetween(16500,100000),
            'Nombre_Abogado'=>fake()->name(),
        ];
    }
}
