<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Incidencia;

class IncidenciaSeeder extends Seeder
{
    public function run()
    {
        $incidencia1 = new Incidencia();
        $incidencia1->tipo_incidencia_id = 1;
        $incidencia1->tipo_subincidencia_id = 1;
        $incidencia1->descripcion_inci = 'Problema relacionado con la lentitud de la conexión de red.';
        $incidencia1->estado_inci = 'SinAsignar';
        $incidencia1->prioridad_inci = 'Baja';
        $incidencia1->comentario_inci = 'Tengo problemas con la red';
        $incidencia1->id_cliente = 2;
        $incidencia1->save();

        $incidencia2 = new Incidencia();
        $incidencia2->tipo_incidencia_id = 2;
        $incidencia2->tipo_subincidencia_id = 5;
        $incidencia2->descripcion_inci = 'El teclado del ordenador no responde.';
        $incidencia2->estado_inci = 'SinAsignar';
        $incidencia2->prioridad_inci = 'Media';
        $incidencia2->comentario_inci = 'El teclado dejó de funcionar de repente.';
        $incidencia2->id_cliente = 3;
        $incidencia2->save();

        $incidencia3 = new Incidencia();
        $incidencia3->tipo_incidencia_id = 3;
        $incidencia3->tipo_subincidencia_id = 10;
        $incidencia3->descripcion_inci = 'Imposibilidad de establecer una conexión remota con los recursos de la empresa.';
        $incidencia3->estado_inci = 'SinAsignar';
        $incidencia3->prioridad_inci = 'Alta';
        $incidencia3->comentario_inci = 'No puedo acceder a los archivos de la oficina desde casa.';
        $incidencia3->id_cliente = 4;
        $incidencia3->save();

        $incidencia4 = new Incidencia();
        $incidencia4->tipo_incidencia_id = 4;
        $incidencia4->tipo_subincidencia_id = 13;
        $incidencia4->descripcion_inci = 'Se detectó un virus en el sistema informático.';
        $incidencia4->estado_inci = 'SinAsignar';
        $incidencia4->prioridad_inci = 'Alta';
        $incidencia4->comentario_inci = 'El antivirus identificó un archivo infectado en el equipo.';
        $incidencia4->id_cliente = 2;
        $incidencia4->save();

        $incidencia5 = new Incidencia();
        $incidencia5->tipo_incidencia_id = 1;
        $incidencia5->tipo_subincidencia_id = 2;
        $incidencia5->descripcion_inci = 'La conexión de red se cae y vuelve a conectarse intermitentemente.';
        $incidencia5->estado_inci = 'SinAsignar';
        $incidencia5->prioridad_inci = 'Media';
        $incidencia5->comentario_inci = 'La conexión de internet falla cada pocos minutos.';
        $incidencia5->id_cliente = 3;
        $incidencia5->save();

        $incidencia6 = new Incidencia();
        $incidencia6->tipo_incidencia_id = 2;
        $incidencia6->tipo_subincidencia_id = 6;
        $incidencia6->descripcion_inci = 'El ratón del ordenador no se mueve.';
        $incidencia6->estado_inci = 'SinAsignar';
        $incidencia6->prioridad_inci = 'Baja';
        $incidencia6->comentario_inci = 'El cursor no responde a los movimientos del ratón.';
        $incidencia6->id_cliente = 4;
        $incidencia6->save();

        $incidencia7 = new Incidencia();
        $incidencia7->tipo_incidencia_id = 3;
        $incidencia7->tipo_subincidencia_id = 11;
        $incidencia7->descripcion_inci = 'Errores al utilizar la aplicación de videoconferencia de la empresa.';
        $incidencia7->estado_inci = 'SinAsignar';
        $incidencia7->prioridad_inci = 'Media';
        $incidencia7->comentario_inci = 'No puedo unirme a las reuniones virtuales.';
        $incidencia7->id_cliente = 2;
        $incidencia7->save();

        $incidencia8 = new Incidencia();
        $incidencia8->tipo_incidencia_id = 4;
        $incidencia8->tipo_subincidencia_id = 15;
        $incidencia8->descripcion_inci = 'Problema relacionado con intentos de suplantación de identidad para obtener información confidencial.';
        $incidencia8->estado_inci = 'SinAsignar';
        $incidencia8->prioridad_inci = 'Alta';
        $incidencia8->comentario_inci = 'Recibí un correo electrónico sospechoso solicitando información personal.';
        $incidencia8->id_cliente = 3;
        $incidencia8->save();

        $incidencia9 = new Incidencia();
        $incidencia9->tipo_incidencia_id = 1;
        $incidencia9->tipo_subincidencia_id = 3;
        $incidencia9->descripcion_inci = 'Problema relacionado con la ausencia total de conexión de red.';
        $incidencia9->estado_inci = 'SinAsignar';
        $incidencia9->prioridad_inci = 'Alta';
        $incidencia9->comentario_inci = 'No tengo acceso a internet desde hace horas.';
        $incidencia9->id_cliente = 4;
        $incidencia9->save();

        $incidencia10 = new Incidencia();
        $incidencia10->tipo_incidencia_id = 2;
        $incidencia10->tipo_subincidencia_id = 8;
        $incidencia10->descripcion_inci = 'El monitor del ordenador no muestra ninguna imagen y no se enciende.';
        $incidencia10->estado_inci = 'SinAsignar';
        $incidencia10->prioridad_inci = 'Media';
        $incidencia10->comentario_inci = 'El monitor dejó de funcionar de repente y no muestra imagen.';
        $incidencia10->id_cliente = 2;
        $incidencia10->save();

        $incidencia11 = new Incidencia();
        $incidencia11->tipo_incidencia_id = 3;
        $incidencia11->tipo_subincidencia_id = 9;
        $incidencia11->descripcion_inci = 'Error al intentar acceder a la aplicación de gestión administrativa.';
        $incidencia11->estado_inci = 'SinAsignar';
        $incidencia11->prioridad_inci = 'Baja';
        $incidencia11->comentario_inci = 'No puedo iniciar sesión en el sistema de gestión.';
        $incidencia11->id_cliente = 3;
        $incidencia11->save();

        $incidencia12 = new Incidencia();
        $incidencia12->tipo_incidencia_id = 4;
        $incidencia12->tipo_subincidencia_id = 13;
        $incidencia12->descripcion_inci = 'Problema relacionado con la presencia de un virus en el sistema informático.';
        $incidencia12->estado_inci = 'SinAsignar';
        $incidencia12->prioridad_inci = 'Alta';
        $incidencia12->comentario_inci = 'El antivirus detectó la presencia de malware en mi computadora.';
        $incidencia12->id_cliente = 2;
        $incidencia12->save();

        $incidencia13 = new Incidencia();
        $incidencia13->tipo_incidencia_id = 2;
        $incidencia13->tipo_subincidencia_id = 5;
        $incidencia13->descripcion_inci = 'El teclado del ordenador presenta mal funcionamiento o no responde.';
        $incidencia13->estado_inci = 'SinAsignar';
        $incidencia13->prioridad_inci = 'Media';
        $incidencia13->comentario_inci = 'Algunas teclas del teclado no funcionan correctamente.';
        $incidencia13->id_cliente = 4;
        $incidencia13->save();

        $incidencia14 = new Incidencia();
        $incidencia14->tipo_incidencia_id = 1;
        $incidencia14->tipo_subincidencia_id = 4;
        $incidencia14->descripcion_inci = 'Problema relacionado con la pérdida de paquetes de datos en la red.';
        $incidencia14->estado_inci = 'SinAsignar';
        $incidencia14->prioridad_inci = 'Alta';
        $incidencia14->comentario_inci = 'Experimento interrupciones frecuentes en la conexión de red.';
        $incidencia14->id_cliente = 3;
        $incidencia14->save();

        $incidencia15 = new Incidencia();
        $incidencia15->tipo_incidencia_id = 3;
        $incidencia15->tipo_subincidencia_id = 12;
        $incidencia15->descripcion_inci = 'Se reportan problemas de calidad o pérdida de conexión en la imagen proyectada';
        $incidencia15->estado_inci = 'SinAsignar';
        $incidencia15->prioridad_inci = 'Media';
        $incidencia15->comentario_inci = 'La imagen del proyector no se ve clara y hay interferencias.';
        $incidencia15->id_cliente = 4;
        $incidencia15->save();

        $incidencia16 = new Incidencia();
        $incidencia16->tipo_incidencia_id = 2;
        $incidencia16->tipo_subincidencia_id = 8;
        $incidencia16->descripcion_inci = 'El monitor del ordenador no muestra ninguna imagen y no se enciende.';
        $incidencia16->estado_inci = 'SinAsignar';
        $incidencia16->prioridad_inci = 'Alta';
        $incidencia16->comentario_inci = 'El monitor parece no recibir alimentación eléctrica.';
        $incidencia16->id_cliente = 2;
        $incidencia16->save();

        $incidencia17 = new Incidencia();
        $incidencia17->tipo_incidencia_id = 4;
        $incidencia17->tipo_subincidencia_id = 14;
        $incidencia17->descripcion_inci = 'Problema relacionado con una vulnerabilidad que permite el acceso no autorizado al sistema.';
        $incidencia17->estado_inci = 'SinAsignar';
        $incidencia17->prioridad_inci = 'Alta';
        $incidencia17->comentario_inci = 'Creo que alguien ha intentado acceder a mi cuenta sin permiso.';
        $incidencia17->id_cliente = 3;
        $incidencia17->save();

        $incidencia18 = new Incidencia();
        $incidencia18->tipo_incidencia_id = 3;
        $incidencia18->tipo_subincidencia_id = 11;
        $incidencia18->descripcion_inci = 'Errores al utilizar la aplicación de videoconferencia de la empresa.';
        $incidencia18->estado_inci = 'SinAsignar';
        $incidencia18->prioridad_inci = 'Media';
        $incidencia18->comentario_inci = 'No puedo unirme a la videoconferencia con el cliente.';
        $incidencia18->id_cliente = 4;
        $incidencia18->save();

        $incidencia19 = new Incidencia();
        $incidencia19->tipo_incidencia_id = 1;
        $incidencia19->tipo_subincidencia_id = 3;
        $incidencia19->descripcion_inci = 'Problema relacionado con la ausencia total de conexión de red.';
        $incidencia19->estado_inci = 'SinAsignar';
        $incidencia19->prioridad_inci = 'Alta';
        $incidencia19->comentario_inci = 'No tengo conexión a Internet en absoluto.';
        $incidencia19->id_cliente = 2;
        $incidencia19->save();

        $incidencia20 = new Incidencia();
        $incidencia20->tipo_incidencia_id = 4;
        $incidencia20->tipo_subincidencia_id = 16;
        $incidencia20->descripcion_inci = 'Problema relacionado con la divulgación no autorizada de información confidencial.';
        $incidencia20->estado_inci = 'SinAsignar';
        $incidencia20->prioridad_inci = 'Media';
        $incidencia20->comentario_inci = 'Creo que ha habido una filtración de datos en la empresa.';
        $incidencia20->id_cliente = 3;
        $incidencia20->save();

    }
}
