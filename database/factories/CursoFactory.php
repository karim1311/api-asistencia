<?php
namespace Database\Factories;

use App\Models\Curso;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Curso>
 */
class CursoFactory extends Factory
{
    protected $model = Curso::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => fake()->randomElement(['PHP','Laravel','Fundamentos de Programacion','Estructura de datos','Algoritmos','Historia','Calculo','Matematicas discretas','Investigacion','Ingles','Desarrollo web','Etica','Tailwind CSS','React JS','Material UI','Javascript','Git','Next JS','Servidores','Ciberseguridad']),
        ];
    }
}
