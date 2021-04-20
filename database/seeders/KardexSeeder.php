<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kardex;

class KardexSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Kardex::create([
            'clave' => 222222,
            'Nombre_materia' => 'Calculo A',
            'calif' => 80,
            'tipo_examen' => 'EO',
            'semestre' => 2,
            'observacion' => '-'
        ]);//Dato falso coordinador
        
        Kardex::create([
            'clave' => 222222,
            'Nombre_materia' => 'Calculo B',
            'calif' => 80,
            'tipo_examen' => 'EO',
            'semestre' => 2,
            'observacion' => '-'
        ]);
        
        Kardex::create([
            'clave' => 22223,
            'Nombre_materia' => 'Fisica A',
            'calif' => 80,
            'tipo_examen' => 'EO',
            'semestre' => 2,
            'observacion' => '-'
        ]);//Dato falso coordinador
        
        Kardex::create([
            'clave' => 22223,
            'Nombre_materia' => 'Fisica B',
            'calif' => 80,
            'tipo_examen' => 'EO',
            'semestre' => 2,
            'observacion' => '-'
        ]);
        
        Kardex::create([
            'clave' => 222224,
            'Nombre_materia' => 'Estructuras I',
            'calif' => 80,
            'tipo_examen' => 'EO',
            'semestre' => 2,
            'observacion' => '-'
        ]);//Dato falso coordinador
        
        Kardex::create([
            'clave' => 222224,
            'Nombre_materia' => 'Estructuras II',
            'calif' => 80,
            'tipo_examen' => 'EO',
            'semestre' => 2,
            'observacion' => '-'
        ]);
        
        Kardex::create([
            'clave' => 222225,
            'Nombre_materia' => 'Calculo C',
            'calif' => 80,
            'tipo_examen' => 'EO',
            'semestre' => 2,
            'observacion' => '-'
        ]);//Dato falso coordinador
        
        Kardex::create([
            'clave' => 222225,
            'Nombre_materia' => 'Calculo D',
            'calif' => 80,
            'tipo_examen' => 'EO',
            'semestre' => 2,
            'observacion' => '-'
        ]);
    }
}
