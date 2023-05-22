<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorias = Categoria::get();
        return view('resultados', ['categorias' => $categorias]);
    }

    public function listar()
    {
        $categorias = Categoria::all();
        return $categorias;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categorias.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => ['required'],
            'img' => ['required'],
        ]);

        Categoria::create([
            'nombre' => $request->get('nombre'),
            'descripcion' => $request->get('descripcion'),
            'img' => $request->get('img'),
        ]);

       return to_route('categorias.index')->with('success', 'La categoria se creo correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Categoria $categoria)
    {
        return view('categorias.show', ['categoria' => $categoria]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Categoria $categoria)
    {
        return view('categorias.edit', ['categoria' => $categoria]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Categoria $categoria)
    {
        $request->validate([
            'nombre' => ['required'],
            'img' => ['required'],
        ]);

        $categoria->update([
            'nombre' => $request->get('nombre'),
            'descripcion' => $request->get('descripcion'),
            'img' => $request->get('img'),
        ]);

       return to_route('categorias.show', $categoria)->with('success', 'La categoria se actualizo correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categoria $categoria)
    {
        $categoria->delete();
        return to_route('categorias.index')->with('success', 'Categoria eliminada correctamente.');
    }
}
