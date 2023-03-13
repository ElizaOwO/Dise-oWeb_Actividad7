<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Bcursos;
use Illuminate\Support\Facades\DB;

class BcursosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Bcursos::factory(100)->count(100)->create();
        
        /*
        DB::table('Bcursos')->insert([
            'titulo' => 'Introduccion Robotica',
            'portada' => 'IntroPortada',
            'contenido' => 'En este curso...',
            'kitRobotica' => 'StarterKit',
        ]);
        
        DB::table('Bcursos')->insert([
            'titulo' => 'Programacion Robotica',
            'portada' => 'ProgramacionPortada',
            'contenido' => 'En este curso...',
            'kitRobotica' => 'Educational Robotics Kit',
        ]);
        DB::table('Bcursos')->insert([
            'titulo' => 'Caracteristicas de un Robot',
            'portada' => 'RobotPortada',
            'contenido' => 'En este curso...',
            'kitRobotica' => 'kit5',
        ]);
        */
    }
}
