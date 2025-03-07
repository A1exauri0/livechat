<?php

namespace App\Http\Controllers;

use App\Models\Conversacion;
use Illuminate\Http\Request;

class ConversacionController extends Controller
{
    /**
     * Muestra todas las conversaciones.
     */
    public function index()
    {
        $conversaciones = Conversacion::all();
        return response()->json($conversaciones);
    }

    /**
     * Almacena una nueva conversación.
     */
    public function store(Request $request)
    {
        // Validamos la entrada
        $data = $request->validate([
            'nombre' => 'required|string|max:45'
        ]);

        $conversacion = Conversacion::create($data);

        return response()->json($conversacion, 201);
    }

    /**
     * Muestra una conversación en particular.
     */
    public function show($id)
    {
        $conversacion = Conversacion::findOrFail($id);
        return response()->json($conversacion);
    }

    /**
     * Actualiza los datos de una conversación.
     */
    public function update(Request $request, $id)
    {
        $conversacion = Conversacion::findOrFail($id);

        $data = $request->validate([
            'nombre' => 'sometimes|required|string|max:45'
        ]);

        $conversacion->update($data);

        return response()->json($conversacion);
    }

    /**
     * Elimina una conversación.
     */
    public function destroy($id)
    {
        $conversacion = Conversacion::findOrFail($id);
        $conversacion->delete();

        return response()->json(null, 204);
    }
}
