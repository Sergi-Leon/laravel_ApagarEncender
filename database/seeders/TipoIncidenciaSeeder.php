<?php

namespace Database\Seeders;

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
        $tipos_incidencias = [
            [
                'Tipo' => 'Problema de red',
                'Descripcion' => 'Problema relacionado con la conectividad de red',
            ],
            [
                'Tipo' => 'Problema de hardware',
                'Descripcion' => 'Problema relacionado con el hardware del equipo',
            ],
            [
                'Tipo' => 'Problema de software',
                'Descripcion' => 'Problema relacionado con el funcionamiento del equipo',
            ],
            [
                'Tipo' => 'Problema de seguridad',
                'Descripcion' => 'Problema relacionado con la seguridad de los datos o la infraestructura',
            ],
            [
                'Tipo' => 'Problema de servicio',
                'Descripcion' => 'Solicitud de un servicio específico por parte del cliente.',
            ]
        ];
    }
}
