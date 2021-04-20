<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ExamenProfesional;
use App\Models\Cuestionario;
use Carbon\Carbon;

class ExamenProfesionalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    $c = Cuestionario::first();
    
    
    public function run()
    {
        ExamenProfesional::create([
            'claveAlumno' => 222222,
            'fechaExamen' => Carbon::parse('2020-01-01'),
            'horaExamen' => Carbon::now(),
            'realizoCuestionario' => false,
            'recinto' => 'Salon I-12',
            'idCuestionario' => $c->idCuestionario,
        ]);//Dato falso coordinador
    }
}
