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
        $rolsu = Role::create(['name' => 'superu']);//Definicion de el rol
        $rolc = Role::create(['name' => 'capturista']);
        $rols = Role::create(['name' => 'sinodal']);
        $rolja = Role::create(['name' => 'jefearea']);
        $rolcor = Role::create(['name' => 'coordinador']);
        
        //Asignar permios a multiples roles
        
        Permission::create(['name' => 'agendarexamen'])->syncRoles([$rolc]);//
        Permission::create(['name' => 'verexamenes'])->syncRoles([$rolsu]);
        Permission::create(['name' => 'adicionusuarios'])->syncRoles([$rolsu]);
        Permission::create(['name' => 'permiso2'])->syncRoles([$rolsu]);
        Permission::create(['name' => 'permiso3'])->syncRoles([$rolsu]);
        Permission::create(['name' => 'permiso4'])->syncRoles([$rolsu]);
        //Permission::create(['name' => 'rutasinodal'])->syncRoles([$rols]);
        //Permission::create(['name' => 'rutajefearea'])->syncRoles([$rolsu]);
        //Permission::create(['name' => 'rutacoordinador'])->syncRoles([$rolsu]);
        
        //Asignar permisos individuales
        
        //$role->givePermissionTo($permission);
        
    }
}
