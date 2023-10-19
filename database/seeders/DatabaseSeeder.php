<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $curso = new CursoSeeder();
        $curso->run();

        $docente = new DocenteSeeder();
        $docente->run();

        $alumno = new AlumnoSeeder();
        $alumno->run();

        $asistencia = new AsistenciaSeeder();
        $asistencia->run();

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
