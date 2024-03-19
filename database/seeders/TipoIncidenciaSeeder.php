<?php

namespace Database\Seeders;

use App\Models\TipoIncidencia;
use Illuminate\Database\Seeder;

class TipoIncidenciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TipoIncidencia::create([
            'tipo_tipoinci' => 'Problema de red',
            'descripcion_tipoinci' => 'Problema relacionado con la conectividad de red.'
        ]);

        TipoIncidencia::create([
            'tipo_tipoinci' => 'Problema de hardware',
            'descripcion_tipoinci' => 'Problema relacionado con el hardware del equipo.'
        ]);

        TipoIncidencia::create([
            'tipo_tipoinci' => 'Problema de software',
            'descripcion_tipoinci' => 'Problema relacionado con el funcionamiento del software.'
        ]);

        TipoIncidencia::create([
            'tipo_tipoinci' => 'Problema de seguridad',
            'descripcion_tipoinci' => 'Problema relacionado con la seguridad de los datos o la infraestructura.'
        ]);
    }
}
