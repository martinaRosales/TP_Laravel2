<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        //
        $rol1 = Role::create(['name' => 'Admin']);
        $rol2 = Role::create(['name' => 'Juez']);
        $rol3 = Role::create(['name' => 'Competidor']);

        // Creo un permiso y se lo asigno a un solo rol
        Permission::create(['name' => 'admin.competidoresInscriptos'])->assignRole($rol1);
        // Creo un permiso y se lo asigno a dos roles (admin y juez)
        Permission::create(['name' => 'admin.reloj'])->syncRoles([$rol1, $rol2]);

    }

}