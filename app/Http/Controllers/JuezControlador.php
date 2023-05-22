<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JuezControlador extends Controller {
    //
    public function create() {
        if( isset(auth()->user()->rol) ){
            $userRol = auth()->user()->rol;
        } else {
            $userRol = null;
        }

        if( $userRol == 'Juez' ){
            return view('timer');
        } else {
            return redirect('/')->withErrors('Debe ser un juez para ingresar.');
        }

    }

}