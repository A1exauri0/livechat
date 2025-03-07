<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Conversacion;
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

        User::factory()->create([
            'name' => 'Keruum',
            'email' => 'omneliberum01@gmail.com',
            'password' => '1234',
        ]);

        User::factory()->create([
            'name' => 'Usuario2',
            'email' => 'usuario2@gmail.com',
            'password' => '1234',
        ]);

        Conversacion::insert([
            'idConversacion' => 1,
        ]);
    }
}
