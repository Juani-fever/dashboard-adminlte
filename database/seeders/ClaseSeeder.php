<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Clase;

class ClaseSeeder extends Seeder
{
    public function run(): void
    {
        Clase::create([
            'nombre' => '5to A',
            'turno' => 'Mañana'
        ]);

        Clase::create([
            'nombre' => '5to B',
            'turno' => 'Tarde'
        ]);

        Clase::create([
            'nombre' => '6to A',
            'turno' => 'Mañana'
        ]);
    }
}
