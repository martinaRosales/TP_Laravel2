<?php

namespace App\Http\Controllers;

use App\Models\Competidor;
use Illuminate\Http\Request;

class RegistroControlador extends Controller {
    public function index() {
        return view('crear');
    }

    public function store(Request $request) {
        $request->validate([
            'nombre' => ['required'],
            'apellido' => ['required'],
            'du' => ['required'],
            'fecha-nacimiento' => ['required'],
            'pais' => ['required'],
            'email' => ['required'],
            'genero' => ['required', 'min:4'],
            'gal' => ['required', 'unique:competidores,legajo'],
            'graduacion' => ['required'],
            'clasificacion' => ['required'],
        ]);

       Competidor::create([
        'legajo' => $request->get('gal'),
        'nombre' => $request->get('nombre'),
        'apellido' => $request->get('apellido'),
        'du' => $request->get('du'),
        'fecha_nac' => $request->get('fecha-nacimiento'),
        'pais_nombre' => $request->get('pais'),
        'email' => $request->get('email'),
        'genero' => $request->get('genero'),
        'clasificacion' => $request->get('clasificacion'),
       ]);

       return to_route('tabla')->with('success', 'El competidor se creo correctamente');
    }

}