<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests\RegistroRequest;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuarios = Usuario::get();
        return view('usuarios.index', ['usuarios' => $usuarios]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Usuario $usuario)
    {
        return view('usuarios.show', ['usuario' => $usuario]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Usuario $usuario)
    {
        return view('usuarios.edit', ['usuario' => $usuario]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Usuario $usuario)
    {
        $usuario->update($request->validated());
        return redirect('/login')->with('success', 'Cuenta modificada correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Usuario $usuario)
    {
        $usuario->delete();
        return to_route('usuarios.index')->with('success', 'Usuario eliminado correctamente.');
    }

    // Metodos personalizados.
    public function imprimirDatos(){
        $usuarios = Usuarios::all();
        return $usuarios;
    }
}
