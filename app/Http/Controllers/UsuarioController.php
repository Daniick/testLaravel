<?php

namespace App\Http\Controllers;

use App\Models\usuario;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuarios = Usuario::all();
        return response()->json(['usuarios' => $usuarios]);
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
        $usuario = Usuario::create($request->all());
        return response()->json(['usuario' => 'Usuario creado con exito:' . $usuario]);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $usuario = Usuario::findOrFail($id);
        return response()->json(['usuario' => 'Usuario encontrado:' . $usuario]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Usuario $usuario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id): JsonResponse
    {
        $usuario = Usuario::findOrFail($id);
        $usuario->update($request->all());

        return response()->json(['mensaje' => 'Usuario actualizado ']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {

        $usuario = Usuario::findOrFail($id);

        $usuario->delete();


        return response()->json(['mensaje' => 'Usuario eliminado']);
    }
}
