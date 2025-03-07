<?php

namespace App\Http\Controllers;

use App\Models\Mensaje;
use Illuminate\Http\Request;

class MensajeController extends Controller
{
    /**
     * Mostrar una lista de todos los mensajes.
     */
    public function index()
    {
        $mensajes = Mensaje::all();
        return response()->json($mensajes);
    }

    /**
     * Almacenar un nuevo mensaje.
     */
    public function store(Request $request)
    {
        // Validación de datos
        $data = $request->validate([
            'idConversacion' => 'required|exists:conversaciones,idConversacion',
            'idUsuario'      => 'required|exists:users,id',
            'mensaje'        => 'required|string',
        ]);

        $mensaje = Mensaje::create($data);

        return response()->json($mensaje, 201);
    }

    /**
     * Mostrar un mensaje en particular.
     */
    public function show($id)
    {
        $mensaje = Mensaje::findOrFail($id);
        return response()->json($mensaje);
    }

    /**
     * Actualizar un mensaje existente.
     */
    public function update(Request $request, $id)
    {
        $mensaje = Mensaje::findOrFail($id);

        $data = $request->validate([
            // Puedes actualizar el contenido del mensaje o incluso la relación si es necesario
            'mensaje' => 'sometimes|required|string',
        ]);

        $mensaje->update($data);

        return response()->json($mensaje);
    }

    /**
     * Eliminar un mensaje.
     */
    public function destroy($id)
    {
        $mensaje = Mensaje::findOrFail($id);
        $mensaje->delete();

        return response()->json(null, 204);
    }
}
