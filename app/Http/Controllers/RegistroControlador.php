<?php

namespace App\Http\Controllers;

use App\Models\Competidor;
use Illuminate\Http\Request;

class RegistroControlador extends Controller {
    public function index() {
        return view('crear');
    }

    public function store(Request $request) {
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

    }

}