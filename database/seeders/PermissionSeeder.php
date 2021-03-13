<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Contracts\Permission as ContractsPermission;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create([
            'name'=>'Leer'
        ]);

        Permission::create([
            'name'=>'Crear'
        ]);

        Permission::create([
            'name'=>'Actualizar'
        ]);

        Permission::create([
            'name'=>'Eliminar'
        ]);

        Permission::create([
            'name'=>'Crear role'
        ]);

        Permission::create([
            'name'=>'Leer role'
        ]);

        Permission::create([
            'name'=>'Actualizar role'
        ]);

        Permission::create([
            'name'=>'Eliminar role'
        ]);

        Permission::create([
            'name'=>'Leer usuarios'
        ]);

        Permission::create([
            'name'=>'Actualizar usuarios'
        ]);
    }
}
