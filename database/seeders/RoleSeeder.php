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
        $admin = Role::create(['name' => 'Admin']);
        $juez = Role::create(['name' => 'Juez']);
        $competidor = Role::create(['name' => 'Competidor']);

        // Creo un permiso y se lo asigno a un solo rol
        Permission::create(['name' => 'competidores.index'])->assignRole($admin);
        // Creo un permiso y se lo asigno a dos roles (admin y juez)
        // Permission::create(['name' => 'ver reloj'])->syncRoles([$admin, $juez]);
        // Permission::create(['name' => 'ver form inscripcion'])->syncRoles([$competidor]);

    }

}