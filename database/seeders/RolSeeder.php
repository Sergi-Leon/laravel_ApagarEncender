<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Rol;

class RolSeeder extends Seeder
{
    public function run()
    {
        // Inserts en la tabla tbl_roles
        $rol1 = new Rol();
        $rol1->nombre_rol = 'Administrador';
        $rol1->save();

        $rol2 = new Rol();
        $rol2->nombre_rol = 'Cliente';
        $rol2->save();

        $rol3 = new Rol();
        $rol3->nombre_rol = 'Gestor de equipo';
        $rol3->save();

        $rol4 = new Rol();
        $rol4->nombre_rol = 'Tecnico';
        $rol4->save();
    }
}
