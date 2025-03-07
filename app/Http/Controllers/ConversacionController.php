<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Conversacion;
use App\Models\ConversacionUsuario;

class ConversacionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        Conversacion::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $conversacion = Conversacion::create([
            "nombre"=> $request->input("nombre"),
        ]);

        ConversacionUsuario::create([
            "conversacion_id" => $conversacion->id,
            "idUsuario1" => $request->input("idUsuario1"),
            "idUsuario2" => $request->input("idUsuario2"),
        ]);


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
