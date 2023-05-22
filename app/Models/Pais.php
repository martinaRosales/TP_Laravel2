<?php

namespace App\Models;

use App\Competidor;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    use HasFactory;
    protected $table = 'paises';
    protected $fillable = [
        'nombre',
    ];

    public function competidores()
    {
        return $this->hasMany(Competidor::class, 'pais_nombre', 'nombre');
    }
}
