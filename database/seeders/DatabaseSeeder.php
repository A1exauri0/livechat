<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Conversacion;
use App\Models\Mensaje;
use App\Models\ConversacionUsuario;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // Ejecutar seeds para cada modelo
        $this->call(RolesSeeder::class);
        $this->call(UsersSeeder::class);
    }
}
