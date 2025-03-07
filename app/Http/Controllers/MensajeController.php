<?php

namespace App\Http\Controllers;

use App\Models\Mensaje;
use Illuminate\Http\Request;

class MensajeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        Mensaje::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        "idConversacion" => ["required", "integer", "exists:conversaciones,id"],
        "idUsuario" => ["required", "integer", "exists:users,id"],
        "mensaje" => ["required", "string", "min:1", "max:255"],
    ]);

    // Crear el mensaje
    Mensaje::create([
        "idConversacion" => $request->input("idConversacion"),
        "idUsuario" => $request->input("idUsuario"),
        "mensaje" => $request->input("mensaje"),
    ]);

    return response([
        "message" => "Mensaje creado correctamente",
    ], 200);
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        Mensaje::findOrFail($id);

        return response([
            "message" => "Mensaje encontrado correctamente",
        ], 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Mensaje::find($id)->update([
        //     "" => $request->input(""),
        // ]);

        return response([
            "message" => "Mensaje actualizado correctamente",
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
