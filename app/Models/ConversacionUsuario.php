<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConversacionUsuario extends Model
{
    use HasFactory;

    // Definimos el nombre de la tabla
    protected $table = 'conversacion_usuario';

    // Como no tenemos un campo "id" y la clave primaria es compuesta,
    // deshabilitamos el auto-incremento y no especificamos primaryKey
    public $incrementing = false;
    protected $primaryKey = null;

    // Habilitamos los timestamps (created_at y updated_at)
    public $timestamps = true;

    // Campos asignables de forma masiva
    protected $fillable = [
        'conversacion_id',
        'idUsuario1',
        'idUsuario2',
        'nombre',
    ];

    /**
     * Relación: Pertenece a una conversación.
     */
    public function conversacion()
    {
        return $this->belongsTo(Conversacion::class, 'conversacion_id', 'idConversacion');
    }

    /**
     * Relación: Primer usuario asociado.
     */
    public function usuario1()
    {
        return $this->belongsTo(User::class, 'idUsuario1', 'id');
    }

    /**
     * Relación: Segundo usuario asociado.
     */
    public function usuario2()
    {
        return $this->belongsTo(User::class, 'idUsuario2', 'id');
    }
}
