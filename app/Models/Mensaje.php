<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mensaje extends Model
{
    protected $table = "mensajes";
    protected $fillable = ['nombre', 'email', 'mensaje'];
    public $timestamps = true; 

    public function conversacion()
    {
        return $this->belongsTo(Conversacion::class, 'idConversacion');
    }

    public function usuario()
    {
        return $this->belongsTo(User::class, 'idUsuario');
    }
}
