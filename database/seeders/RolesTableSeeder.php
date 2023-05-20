<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            ['nombre' => 'admin'],
            ['nombre' => 'juez'],
            ['nombre' => 'competidor'],
        ];

        DB::table('rol')->insert($roles);
    }
}

// php artisan db:seed --class=RolesTableSeeder
// Ejecutar el comando anterior para llenar la tabla de Rol con los datos