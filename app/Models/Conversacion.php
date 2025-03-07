<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conversacion extends Model
{
    use HasFactory;

    // Especificamos la tabla (aunque sigue la convención plural)
    protected $table = 'conversaciones';

    // Indicamos la clave primaria personalizada
    protected $primaryKey = 'idConversacion';

    // Habilitamos el manejo automático de timestamps (created_at, updated_at)
    public $timestamps = true;

    // Campos asignables masivamente
    protected $fillable = ['nombre'];

    /**
     * Relación: Una conversación tiene muchos mensajes.
     */
    public function mensajes()
    {
        // Se asume que en el modelo Mensaje se usa la clave foránea idConversacion
        return $this->hasMany(Mensaje::class, 'idConversacion', 'idConversacion');
    }
}
