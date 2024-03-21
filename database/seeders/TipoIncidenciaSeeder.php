<?php

namespace Database\Seeders;

use App\Models\TipoIncidencia;
use Illuminate\Database\Seeder;

class TipoIncidenciaSeeder extends Seeder
{
    public function run()
    {
        $tipoIncidencia1 = new TipoIncidencia();
        $tipoIncidencia1->nombre_tipo_tipoinci = 'Problema de red';
        $tipoIncidencia1->descripcion_tipoinci = 'Problema relacionado con la conectividad de red.';
        $tipoIncidencia1->save();

        $tipoIncidencia2 = new TipoIncidencia();
        $tipoIncidencia2->nombre_tipo_tipoinci = 'Problema de hardware';
        $tipoIncidencia2->descripcion_tipoinci = 'Problema relacionado con el hardware del equipo.';
        $tipoIncidencia2->save();

        $tipoIncidencia3 = new TipoIncidencia();
        $tipoIncidencia3->nombre_tipo_tipoinci = 'Problema de software';
        $tipoIncidencia3->descripcion_tipoinci = 'Problema relacionado con el funcionamiento del software.';
        $tipoIncidencia3->save();

        $tipoIncidencia4 = new TipoIncidencia();
        $tipoIncidencia4->nombre_tipo_tipoinci = 'Problema de seguridad';
        $tipoIncidencia4->descripcion_tipoinci = 'Problema relacionado con la seguridad de los datos o la infraestructura.';
        $tipoIncidencia4->save();
    }
}