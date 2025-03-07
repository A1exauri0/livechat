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
        // Crear usuarios
        $user1 = User::factory()->create([
            'name'  => 'Test User',
            'email' => 'test@example.com',
        ]);

        $user2 = User::factory()->create([
            'name'     => 'Keruum',
            'email'    => 'omneliberum01@gmail.com',
            'password' => bcrypt('1234'),
        ]);

        $user3 = User::factory()->create([
            'name'     => 'Usuario2',
            'email'    => 'usuario2@gmail.com',
            'password' => bcrypt('1234'),
        ]);

        // Crear una conversación (agregamos 'nombre' ya que es requerido)
        $conversacion = Conversacion::create([
            'nombre' => 'Conversación de prueba',
        ]);

        // Crear un mensaje en la conversación, del usuario 1
        Mensaje::create([
            'idConversacion' => $conversacion->idConversacion,
            'idUsuario'      => $user1->id,
            'mensaje'        => 'Este es un mensaje de prueba.',
        ]);

        // Crear la relación de conversación_usuario entre el usuario 1 y el usuario 2
        ConversacionUsuario::create([
            'conversacion_id' => $conversacion->idConversacion,
            'idUsuario1'      => $user1->id,
            'idUsuario2'      => $user2->id,
            'nombre'          => 'Chat entre Test User y Keruum',
        ]);
    }
}
