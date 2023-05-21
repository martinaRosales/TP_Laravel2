<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        $roles = [
            ['nombre' => 'Admin'],
            ['nombre' => 'Juez'],
            ['nombre' => 'Competidor'],
        ];

        DB::table('roles')->insert($roles);
    }
    
}

// php artisan db:seed --class=RolesTableSeeder
// Ejecutar el comando anterior para llenar la tabla de Rol con los datos