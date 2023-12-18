<?php

namespace Database\Factories;

use App\Models\Matricula;
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
        return [
            // $table->unsignedBigInteger('id');
            // $table->date('fecha');
            // $table->enum('EstadoAsistencia',['A', 'T', 'F'])->default('A');
            'id_matricula' => Matricula::factory(),
            'fecha'=> fake()->date(),
            'EstadoAsistencia' =>fake()->randomElement(['A', 'T', 'F']),
        ];
    }
}
