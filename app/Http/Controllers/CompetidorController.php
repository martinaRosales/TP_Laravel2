<?php

namespace App\Http\Controllers;

use App\Models\Competidor;
use Illuminate\Http\Request;

class CompetidorController extends Controller
{
    // Mostramos todos los competidores que estan en la bd.
    public function index(){
        $competidores = Competidor::get();
        return view('competidores.index', ['competidores' => $competidores]);
    }

    // Mostramos el competidor recibido en el parametro.
    public function show(Post $post){
        return view('competidores.show', ['competidor' => $competidor]);
    }

    // Mostramos la vista del formulario con create.
    public function create(){
        return view('competidores.create', ['competidor' => new Competidor]);
    }

    // Guardamos el competidor del formulario en la bd.
    public function store(Request $request){
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

       return to_route('index')->with('success', 'El competidor se creo correctamente');
    }

    // Mostramos el formulario de edicion.
    public function edit(Competidor $competidor){
        return view('competidores.edit', ['competidor' => $competidor]);
    }

    // Actualizamos el elemento en la bd.
    public function update(Request $request, Competidor $competidor){
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

        $competidor->update([
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

        return to_route('competidores.show', $competidor)->with('success', 'El competidor se actualizo correctamente.');
    }

    // Eliminar competidor de la bd.
    public function destroy(Competidor $competidor){
        $competidor->delete();
        return to_route('competidores.index')->with('success', 'Competidor eliminado correctamente.');
    }
}
