<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsuarioSeeder extends Seeder
{
    public function run()
    {
        // Inserts en la tabla tbl_usuarios
        $usuario1 = new User();
        $usuario1->name = 'Admin';
        $usuario1->email = 'admin@gmail.com';
        $usuario1->password = Hash::make('asdASD123');
        $usuario1->rol_id = 1;
        $usuario1->save();

        $usuario2 = new User();
        $usuario2->name = 'ClienteBarcelona';
        $usuario2->email = 'clienteBarcelona@gmail.com';
        $usuario2->password = Hash::make('asdASD123');
        $usuario2->rol_id = 2;
        $usuario2->sede_id = 1;
        $usuario2->save();

        $usuario3 = new User();
        $usuario3->name = 'ClienteBerlin';
        $usuario3->email = 'clienteBerlin@gmail.com';
        $usuario3->password = Hash::make('asdASD123');
        $usuario3->rol_id = 2;
        $usuario3->sede_id = 2;
        $usuario3->save();

        $usuario4 = new User();
        $usuario4->name = 'ClienteMontreal';
        $usuario4->email = 'clienteMontreal@gmail.com';
        $usuario4->password = Hash::make('asdASD123');
        $usuario4->rol_id = 2;
        $usuario4->sede_id = 3;
        $usuario4->save();

        $usuario5 = new User();
        $usuario5->name = 'GestorBarcelona';
        $usuario5->email = 'gestorBarcelona@gmail.com';
        $usuario5->password = Hash::make('asdASD123');
        $usuario5->rol_id = 3;
        $usuario5->sede_id = 1;
        $usuario5->save();

        $usuario6 = new User();
        $usuario6->name = 'GestorBerlin';
        $usuario6->email = 'gestorBerlin@gmail.com';
        $usuario6->password = Hash::make('asdASD123');
        $usuario6->rol_id = 3;
        $usuario6->sede_id = 2;
        $usuario6->save();

        $usuario7 = new User();
        $usuario7->name = 'GestorMontreal';
        $usuario7->email = 'gestorMontreal@gmail.com';
        $usuario7->password = Hash::make('asdASD123');
        $usuario7->rol_id = 3;
        $usuario7->sede_id = 3;
        $usuario7->save();

        $usuario8 = new User();
        $usuario8->name = 'TecnicoBarcelona';
        $usuario8->email = 'tecnicoBarcelona@gmail.com';
        $usuario8->password = Hash::make('asdASD123');
        $usuario8->rol_id = 4;
        $usuario8->sede_id = 1;
        $usuario8->save();

        $usuario9 = new User();
        $usuario9->name = 'TecnicoBerlin';
        $usuario9->email = 'tecnicoBerlin@gmail.com';
        $usuario9->password = Hash::make('asdASD123');
        $usuario9->rol_id = 4;
        $usuario9->sede_id = 2;
        $usuario9->save();

        $usuario10 = new User();
        $usuario10->name = 'TecnicoMontreal';
        $usuario10->email = 'tecnicoMontreal@gmail.com';
        $usuario10->password = Hash::make('asdASD123');
        $usuario10->rol_id = 4;
        $usuario10->sede_id = 3;
        $usuario10->save();
    }
}
