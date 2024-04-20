<?php

namespace Database\Factories;

use App\Models\Empleado;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Empleado>
 */
class EmpleadoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'genero'=>$this->faker->randomElement(['hombre','mujer']),
            'salario'=>$this->faker->randomFloat(2,1000,1000000)
        ];
    }
    public function configure()
    {
        return $this->afterCreating(function (Empleado $empleado) {
            $empleado->asistencias()->save(\App\Models\Asistencia::factory()->make());
        });
    }
}
