<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Sede;

class SedeSeeder extends Seeder
{
    public function run()
    {
        $sede1 = new Sede();
        $sede1->nombre_sede = 'Barcelona';
        $sede1->save();

        $sede2 = new Sede();
        $sede2->nombre_sede = 'Berlin';
        $sede2->save();

        $sede3 = new Sede();
        $sede3->nombre_sede = 'Montreal';
        $sede3->save();
    }
}
