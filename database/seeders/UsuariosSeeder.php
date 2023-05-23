<?php

namespace Database\Seeders;

use App\Models\Usuario;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UsuariosSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        Usuario::create([
            'usuario' => 'root',
            'nombre' => 'Juan',
            'apellido' => 'Martinez',
            'email' => 'admin@email.com',
            'password' => '123'
        ])->assignRole('Admin');

        Usuario::create([
            'usuario' => 'juez',
            'nombre' => 'Pepe',
            'apellido' => 'Argento',
            'email' => 'juez@email.com',
            'password' => '123'
        ])->assignRole('Juez');

        Usuario::create([
            'usuario' => 'competidor',
            'nombre' => 'Lisa',
            'apellido' => 'Simpson',
            'email' => 'competidor@email.com',
            'password' => '123'
        ])->assignRole('Competidor');

    }

}