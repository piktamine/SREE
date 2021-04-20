<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cuestionario;

class CuestionarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cuestionario::create([
            'titulo' => 'Titulo',
            'pregCarrera1' => '¿Cuáles son los tres profesores que le impactaron en su carrera?',
            'pregCarrera2' => '¿Materias que quitarias de la carrera?',
            'pregCarrera3' => '¿Materias que se pueden mejorar de la carrera?',
            'pregServicio1' => '¿Lugar de servicio social?',
            'pregServicio2' => '¿Función dentro de la empresa(Servicio social)?',
            'pregPracticas1' => '¿Lugar de Practicas profesionales?',
            'pregPracticas2' => '¿Función dentro de la empresa(Practicas profesionales)?',
            'pregEgel1' => '¿Comentarios de el estudiante?',
            'pregEgel2' => '¿Mejor area de desempeño?',
            'pregEgel3' => '¿Observaciones de los sinodales?',
        ]);//Dato falso coordinador

    }
}
