<?php

namespace App\Http\Controllers;

use App\Models\Competidor;
use Illuminate\Http\Request;
use App\Models\Pais;

use Illuminate\Support\Facades\Auth;

use Spatie\Permission\Models\Role; // Spatie

class CompetidorController extends Controller {

    public function __construct(){
        // Para proteger todas las rutas(index, show, create...) de los roles que no tienen permisos:
        // $this->middleware('can:competidores.index');

        // Para proteger una ruta especifica(ejem: index) de los roles que no tienen permisos:
        // Usamos metodo only para especificar el metodo.
        $this->middleware('can:competidores.index')->only('index');
        // Para proteger dos rutas o mas:
        // $this->middleware('can:competidores.edit')->only('edit', 'update');
    }

    // Mostramos todos los competidores que estan en la bd.
    public function index() {
        $competidores = Competidor::get();
        return view('competidores.index', ['competidores' => $competidores]);
    }

    // Mostramos el competidor recibido en el parametro.
    public function show( Competidor $competidor ){
        return view('competidores.show', ['competidor' => $competidor]);
    }

    // Mostramos la vista del formulario con create.
    public function create() {
        if( isset(auth()->user()->rol) ){
            $userRol = auth()->user()->rol;
        } else {
            $userRol = null;
        }

        if( $userRol == 'Competidor' ){
            return view('competidores.create');
        } else {
            return redirect('/')->withErrors('Debe ser un competidor para ingresar.');
        }

    }

    /*
   AJAX request
   */
    public function buscarPaises( Request $request ){

        $search = $request->search;

        if( $search == '' ){
            $paises = Pais::orderBy('nombre', 'asc')->limit(5)->pluck('nombre');
        } else {
            $paises = Pais::orderBy('nombre', 'asc')->where('nombre', 'like', '%' . $search . '%')->limit(5)->pluck('nombre');
        }
    
        return response()->json( $paises );
    }

    // Guardamos el competidor del formulario en la bd.
    public function store( Request $request ){
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
            'graduacion' => $request->get('graduacion'),
            'clasificacion' => $request->get('clasificacion'),
        ]);

        return to_route('competidores.index')->with('success', 'El competidor se creo correctamente');
    }

    // Mostramos el formulario de edicion.
    public function edit( Competidor $competidor ){
        return view('competidores.edit', ['competidor' => $competidor]);
    }

    // Actualizamos el elemento en la bd.
    public function update( Request $request, Competidor $competidor ){
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
    public function destroy( Competidor $competidor ){
        $competidor->delete();
        return to_route('competidores.index')->with('success', 'Competidor eliminado correctamente.');
    }

    // Metodos personalizados.
    public function imprimirDatos() {
        $competidores = Competidor::all();
        return $competidores;
    }

}