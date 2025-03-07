<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mensaje extends Model
{
    use HasFactory;

    // Especificamos la tabla si no se sigue la convención plural
    protected $table = 'mensajes';
    
    // Indicamos la clave primaria personalizada
    protected $primaryKey = 'idMensaje';

    // Habilitamos timestamps (created_at y updated_at)
    public $timestamps = true;

    // Definimos los campos que se pueden asignar de forma masiva
    protected $fillable = [
        'idConversacion',
        'idUsuario',
        'mensaje',
    ];

    /**
     * Relación: Un mensaje pertenece a una conversación.
     */
    public function conversacion()
    {
        // Suponiendo que tienes un modelo Conversacion y la clave foránea es idConversacion
        return $this->belongsTo(Conversacion::class, 'idConversacion', 'idConversacion');
    }

    /**
     * Relación: Un mensaje pertenece a un usuario.
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'idUsuario', 'id');
    }
}
