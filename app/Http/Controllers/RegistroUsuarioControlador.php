<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegistroRequest;
use App\Models\Usuario;

class RegistroUsuarioControlador extends Controller {
    //
    public function show() {
        return view( 'auth.registro' );
    }

    public function registro( RegistroRequest $request ){
        $usuario = Usuario::create( $request->validated() );
        return redirect('/login')->with('success', 'Cuenta creada correctamente' );
    }
}
