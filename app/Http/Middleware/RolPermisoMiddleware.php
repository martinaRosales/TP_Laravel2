<?php

namespace App\Http\Middleware;

use App\Models\Rol;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RolPermisoMiddleware {
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $rol): Response {
        $usuario = Auth::user();
        if( !Rol::tieneRol($usuario, $rol) ){
            // El usuario no tiene el rol requerido, redirect a home
            return redirect()->route( '/' );
        }
        return $next($request);
    }

}