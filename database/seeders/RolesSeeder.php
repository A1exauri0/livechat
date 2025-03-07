<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolesSeeder extends Seeder
{
    public function run()
    {
        // Crear los roles
        Role::updateOrCreate(['name' => 'admin']);
        Role::updateOrCreate(['name' => 'soporte']);
        Role::updateOrCreate(['name' => 'cliente']);
    }
}
