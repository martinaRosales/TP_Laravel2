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
        //
        Usuario::create([
            'usuario' => 'root',
            'nombre' => 'Juan',
            'apellido' => 'Martinez',
            'email' => 'email@gmail.com',
            'password' => '123'
        ])->assignRole('Admin');

        Usuario::create([
            'usuario' => 'juez',
            'nombre' => 'Pepe',
            'apellido' => 'Argento',
            'email' => 'email@email.com',
            'password' => '123'
        ])->assignRole('Juez');

    }

}