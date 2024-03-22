<?php

namespace Database\Seeders;

use App\Models\TipoSubIncidencia;
use Illuminate\Database\Seeder;

class TipoSubIncidenciaSeeder extends Seeder
{
    public function run()
    {
        // Subincidencias para el problema de red
        $tipoSubIncidencia1 = new TipoSubIncidencia();
        $tipoSubIncidencia1->nombre_tipo_tiposubinci = 'Conexión lenta';
        $tipoSubIncidencia1->descripcion_tiposubinci = 'Problema relacionado con la lentitud de la conexión de red.';
        $tipoSubIncidencia1->tipo_incidencia_id = 1;
        $tipoSubIncidencia1->save();

        $tipoSubIncidencia2 = new TipoSubIncidencia();
        $tipoSubIncidencia2->nombre_tipo_tiposubinci = 'Conexión intermitente';
        $tipoSubIncidencia2->descripcion_tiposubinci = 'Problema relacionado con la conexión de red que se cae y vuelve a conectarse.';
        $tipoSubIncidencia2->tipo_incidencia_id = 1;
        $tipoSubIncidencia2->save();

        $tipoSubIncidencia3 = new TipoSubIncidencia();
        $tipoSubIncidencia3->nombre_tipo_tiposubinci = 'No hay conexión';
        $tipoSubIncidencia3->descripcion_tiposubinci = 'Problema relacionado con la ausencia total de conexión de red.';
        $tipoSubIncidencia3->tipo_incidencia_id = 1;
        $tipoSubIncidencia3->save();

        $tipoSubIncidencia4 = new TipoSubIncidencia();
        $tipoSubIncidencia4->nombre_tipo_tiposubinci = 'Pérdida de paquetes';
        $tipoSubIncidencia4->descripcion_tiposubinci = 'Problema relacionado con la pérdida de paquetes de datos en la red.';
        $tipoSubIncidencia4->tipo_incidencia_id = 1;
        $tipoSubIncidencia4->save();

        // Subincidencias para el problema de hardware
        $tipoSubIncidencia5 = new TipoSubIncidencia();
        $tipoSubIncidencia5->nombre_tipo_tiposubinci = 'Problema con el teclado';
        $tipoSubIncidencia5->descripcion_tiposubinci = 'El teclado del ordenador presenta mal funcionamiento o no responde.';
        $tipoSubIncidencia5->tipo_incidencia_id = 2;
        $tipoSubIncidencia5->save();

        $tipoSubIncidencia6 = new TipoSubIncidencia();
        $tipoSubIncidencia6->nombre_tipo_tiposubinci = 'El ratón no funciona';
        $tipoSubIncidencia6->descripcion_tiposubinci = 'El ratón del ordenador no se mueve o no responde correctamente.';
        $tipoSubIncidencia6->tipo_incidencia_id = 2;
        $tipoSubIncidencia6->save();

        $tipoSubIncidencia7 = new TipoSubIncidencia();
        $tipoSubIncidencia7->nombre_tipo_tiposubinci = 'Monitor no se enciende';
        $tipoSubIncidencia7->descripcion_tiposubinci = 'El monitor del ordenador no muestra ninguna imagen y no se enciende.';
        $tipoSubIncidencia7->tipo_incidencia_id = 2;
        $tipoSubIncidencia7->save();

        $tipoSubIncidencia8 = new TipoSubIncidencia();
        $tipoSubIncidencia8->nombre_tipo_tiposubinci = 'Imagen de proyector defectuosa';
        $tipoSubIncidencia8->descripcion_tiposubinci = 'Problemas de visualización o calidad de imagen en un proyector utilizado.';
        $tipoSubIncidencia8->tipo_incidencia_id = 2;
        $tipoSubIncidencia8->save();

        // Subincidencias para el problema de software
        $tipoSubIncidencia9 = new TipoSubIncidencia();
        $tipoSubIncidencia9->nombre_tipo_tiposubinci = 'Aplicación gestión administrativa';
        $tipoSubIncidencia9->descripcion_tiposubinci = 'Error al intentar acceder a la aplicación de gestión administrativa.';
        $tipoSubIncidencia9->tipo_incidencia_id = 3;
        $tipoSubIncidencia9->save();

        $tipoSubIncidencia10 = new TipoSubIncidencia();
        $tipoSubIncidencia10->nombre_tipo_tiposubinci = 'Acceso remoto';
        $tipoSubIncidencia10->descripcion_tiposubinci = 'Imposibilidad de establecer una conexión remota con los recursos de la empresa.';
        $tipoSubIncidencia10->tipo_incidencia_id = 3;
        $tipoSubIncidencia10->save();

        $tipoSubIncidencia11 = new TipoSubIncidencia();
        $tipoSubIncidencia11->nombre_tipo_tiposubinci = 'Aplicación de videoconferencia';
        $tipoSubIncidencia11->descripcion_tiposubinci = 'Errores al utilizar la aplicación de videoconferencia de la empresa.';
        $tipoSubIncidencia11->tipo_incidencia_id = 3;
        $tipoSubIncidencia11->save();

        $tipoSubIncidencia12 = new TipoSubIncidencia();
        $tipoSubIncidencia12->nombre_tipo_tiposubinci = 'Imagen de proyector defectuosa';
        $tipoSubIncidencia12->descripcion_tiposubinci = 'Se reportan problemas de calidad o pérdida de conexión en la imagen proyectada';
        $tipoSubIncidencia12->tipo_incidencia_id = 3;
        $tipoSubIncidencia12->save();

        // Subincidencias para el problema de seguridad
        $tipoSubIncidencia13 = new TipoSubIncidencia();
        $tipoSubIncidencia13->nombre_tipo_tiposubinci = 'Virus informático';
        $tipoSubIncidencia13->descripcion_tiposubinci = 'Problema relacionado con la presencia de un virus en el sistema informático.';
        $tipoSubIncidencia13->tipo_incidencia_id = 4;
        $tipoSubIncidencia13->save();

        $tipoSubIncidencia14 = new TipoSubIncidencia();
        $tipoSubIncidencia14->nombre_tipo_tiposubinci = 'Brecha de seguridad';
        $tipoSubIncidencia14->descripcion_tiposubinci = 'Problema relacionado con una vulnerabilidad que permite el acceso no autorizado al sistema.';
        $tipoSubIncidencia14->tipo_incidencia_id = 4;
        $tipoSubIncidencia14->save();

        $tipoSubIncidencia15 = new TipoSubIncidencia();
        $tipoSubIncidencia15->nombre_tipo_tiposubinci = 'Phishing';
        $tipoSubIncidencia15->descripcion_tiposubinci = 'Problema relacionado con intentos de suplantación de identidad para obtener información confidencial.';
        $tipoSubIncidencia15->tipo_incidencia_id = 4;
        $tipoSubIncidencia15->save();

        $tipoSubIncidencia16 = new TipoSubIncidencia();
        $tipoSubIncidencia16->nombre_tipo_tiposubinci = 'Fuga de información';
        $tipoSubIncidencia16->descripcion_tiposubinci = 'Problema relacionado con la divulgación no autorizada de información confidencial.';
        $tipoSubIncidencia16->tipo_incidencia_id = 4;
        $tipoSubIncidencia16->save();
    }
}
