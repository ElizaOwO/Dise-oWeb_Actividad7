<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use App\Models\Ausuarios;

class AusuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('Ausuarios')->insert([
            'nomUsuario' => 'Nancy',
            'email' => 'nancy@tecmilenio.mx',
            'contrasena' => 'pastel',
        ]);

        
        DB::table('Ausuarios')->insert([
            'nomUsuario' => 'Carlos',
            'email' => 'carlos@tecmilenio.mx',
            'contrasena' => 'gomitasS',
        ]);


        DB::table('Ausuarios')->insert([
            'nomUsuario' => 'Erick',
            'email' => 'erick@tecmilenio.mx',
            'contrasena' => 'chocolate',
        ]);

    }
}
