<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermisosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permisos = [

            // Modulo administradores
            'ver-modulo-admin',
            // Roles
            'ver-roles',
            'crear-roles',
            'editar-roles',
            'borrar-roles',

            // Usuarios
            'ver-usuarios',
            'crear-usuarios',
            'editar-usuarios',
            'borrar-usuarios',
            
            // Blog
            'ver-blogs',
            'crear-blogs',
            'editar-blogs',
            'borrar-blogs',

            // Modulo productos
            'ver-modulo-productos',

            // Grupos
            'ver-grupos',
            'crear-grupos',
            'editar-grupos',
            'borrar-grupos',

            // Lineas
            'ver-lineas',
            'crear-lineas',
            'editar-lineas',
            'borrar-lineas',

            // Productos
            'ver-productos',
            'crear-productos',
            'editar-productos',
            'borrar-productos',

            // Denuncias
            'ver-buzon',

            //Historico
            'ver-historico',
            
        ];

        foreach($permisos as $permiso){
            Permission::create(['name' => $permiso]);
        }
    }
}
