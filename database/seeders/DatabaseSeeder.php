<?php

namespace Database\Seeders;

use App\Models\Asistencia;
use App\Models\Empleado;
use App\Models\Persona;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        Persona::factory(10)->create();
        Empleado::factory(10)->create();
        Asistencia::factory(10)->create();
    }
}
