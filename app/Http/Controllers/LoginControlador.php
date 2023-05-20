<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Session;

class LoginControlador extends Controller {
    //
    public function show() {
        if( Auth::check() ){
            return redirect('/');
        }
        return view( 'auth.login' );
    }

    public function login( LoginRequest $request ){
        $credenciales = $request->getCredentials();

        if( !Auth::validate($credenciales) ){
            // este return de aca esta horrible pero despues lo cambio
            return redirect()->to('/login')->withErrors('Usuario y/o contraseña incorrectas.');
        }
        $usuario = Auth::getProvider()->retrieveByCredentials($credenciales);

        Auth::login( $usuario );
        $objSesion = $this->authenticated( $request, $usuario );
        return $objSesion;
    }

    public function authenticated( Request $request, $usuario ){
        return redirect('/');
    }

    public function logout() {
        Session::flush();
        Auth::logout();
        return redirect()->to('/');
    }

}