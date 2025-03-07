<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Conversacion extends Model
{
    protected $table = "conversaciones";

    protected $guarded = ["idConversacion"];

    protected $fillable = ["nombre"];
    
    public $timestamps = true;

    public function mensajes()
    {
        return $this->hasMany(Mensaje::class, 'idConversacion');
    }

    public function usuarios()
    {
        return $this->belongsToMany(User::class, 'conversacion_usuario', 'idConversacion', 'id');
    }
}
