<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ConversacionUsuario extends Model
{
    protected $table = "conversacion_usuario";

    protected $guarded = ['idConversacion','idUsuario1','idUsuario2'];

    public function conversacion()
    {
        return $this->belongsTo(Conversacion::class, 'idConversacion');
    }

    public function usuario1()
    {
        return $this->belongsTo(User::class, 'idUsuario1');
    }

    public function usuario2()
    {
        return $this->belongsTo(User::class, 'idUsuario');
    }
}
