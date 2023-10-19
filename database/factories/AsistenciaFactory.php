<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Asistencia>
 */
class AsistenciaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $asistencias = ['A','T','F'];
        return [
            'id_curso' =>rand(1,20),
            'id_alumno'=>rand(1,50),
            'fecha'=>fake()->dateTimeThisMonth(),
            'asistencia'=> fake()->randomElement($asistencias),
            
        ];
    }
}

