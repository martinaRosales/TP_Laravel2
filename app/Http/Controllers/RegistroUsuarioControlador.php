<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistroRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\Usuario;

class RegistroUsuarioControlador extends Controller {
    //
    public function show() {
        if( Auth::check() ){
            return redirect('/');
        }
        return view( 'auth.registro' );
    }

    public function registro( RegistroRequest $request ){
        $usuario = Usuario::create( $request->validated() );
        return redirect('/login')->with('success', 'Cuenta creada correctamente' );
    }
}
