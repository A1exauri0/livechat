<?php

namespace App\Http\Controllers;

use App\Models\ConversacionUsuario;
use Illuminate\Http\Request;

class ConversacionUsuarioController extends Controller
{
    /**
     * Muestra todas las relaciones de conversación y usuarios.
     */
    public function index()
    {
        $relaciones = ConversacionUsuario::all();
        return response()->json($relaciones);
    }

    /**
     * Almacena una nueva relación.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'conversacion_id' => 'required|exists:conversaciones,idConversacion',
            'idUsuario1'      => 'required|exists:users,id',
            'idUsuario2'      => 'required|exists:users,id',
            'nombre'          => 'required|string',
        ]);

        $relacion = ConversacionUsuario::create($data);

        return response()->json($relacion, 201);
    }

    /**
     * Muestra una relación en particular.
     * 
     * Nota: Debido a que se usa clave compuesta, aquí se asume que se pasa el id de conversación
     * y el id de uno de los usuarios para identificar el registro, por ejemplo.
     */
    public function show($conversacion_id, $idUsuario1, $idUsuario2)
    {
        $relacion = ConversacionUsuario::where('conversacion_id', $conversacion_id)
                        ->where('idUsuario1', $idUsuario1)
                        ->where('idUsuario2', $idUsuario2)
                        ->firstOrFail();

        return response()->json($relacion);
    }

    /**
     * Actualiza una relación existente.
     */
    public function update(Request $request, $conversacion_id, $idUsuario1, $idUsuario2)
    {
        $relacion = ConversacionUsuario::where('conversacion_id', $conversacion_id)
                        ->where('idUsuario1', $idUsuario1)
                        ->where('idUsuario2', $idUsuario2)
                        ->firstOrFail();

        $data = $request->validate([
            'nombre' => 'sometimes|required|string',
            // Si se permite actualizar los usuarios o la conversación, agregar validaciones
        ]);

        $relacion->update($data);

        return response()->json($relacion);
    }

    /**
     * Elimina una relación.
     */
    public function destroy($conversacion_id, $idUsuario1, $idUsuario2)
    {
        $relacion = ConversacionUsuario::where('conversacion_id', $conversacion_id)
                        ->where('idUsuario1', $idUsuario1)
                        ->where('idUsuario2', $idUsuario2)
                        ->firstOrFail();

        $relacion->delete();

        return response()->json(null, 204);
    }
}
