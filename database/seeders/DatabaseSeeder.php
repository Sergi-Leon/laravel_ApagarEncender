<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Incidencia;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(SedeSeeder::class);
        $this->call(RolSeeder::class);
        $this->call(UsuarioSeeder::class);
        $this->call(TipoIncidenciaSeeder::class);
        $this->call(TipoSubIncidenciaSeeder::class);
        $this->call(IncidenciaSeeder::class);
    }
}
