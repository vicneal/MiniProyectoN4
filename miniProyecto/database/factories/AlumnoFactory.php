<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Alumno>
 */
class AlumnoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre'=> fake()->name(),
            'apellido'=> fake()->lastName(),
            'fecha_nacimiento'=> fake()->date(),
            'correo'=> fake()->email(),
            'telefono'=> fake()->phoneNumber(),
            'direccion'=> fake()->address(),
        ];
    }
}
