<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rol extends Model {
    use HasFactory;

    public function permisos() {
        return $this->belongsToMany( Permiso::class );
    }

    /**
     * Método que verifica si un usuario posee un rol específico
     * @param obj $usuario
     * @param id $rol
     * @return bool
     */
    public static function tieneRol( Usuario $usuario, $rol ){
        return $usuario->rol_id->contains('id', $rol);
    }

}