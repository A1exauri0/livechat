<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Roles;

class UsersSeeder extends Seeder
{
    public function run()
    {
        // Admin
        $admin = User::create([
            'name' => 'Administrador',
            'email' => 'admin@prueba.com',
            'password' => bcrypt('contrasena'),
        ]);
        $admin->assignRole('admin');

        // Soporte
        $soporte = User::create([
            'name' => 'Soporte',
            'email' => 'soporte@prueba.com',
            'password' => bcrypt('contrasena'),
        ]);
        $soporte->assignRole('soporte');

        // Cliente
        $cliente = User::create([
            'name' => 'Cliente',
            'email' => 'cliente@prueba.com',
            'password' => bcrypt('contrasena'),
        ]);
        $cliente->assignRole('cliente');
    }
}
