<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name' => 'Docente']);
        $role2 = Role::create(['name' => 'Administrador']);

        Permission::create(['name' => 'materias.index'])->assignRole($role2);
        Permission::create(['name' => 'materias.create'])->assignRole($role2);
        Permission::create(['name' => 'materias.store'])->assignRole($role2);
        Permission::create(['name' => 'materias.edit'])->assignRole($role2);
        Permission::create(['name' => 'materias.update'])->assignRole($role2);
        Permission::create(['name' => 'materias.destroy'])->assignRole($role2);
        Permission::create(['name' => 'materias.show'])->assignRole($role2);
    }
}
