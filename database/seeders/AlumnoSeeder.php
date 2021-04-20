<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Alumno;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Str;

class AlumnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Alumno::create([
            'claveAlumno' => '222221',
            'nombre' => 'Bruce Wayne',
            'carrera' => 'ISI',
            'generacion' => '2017',
            'estado' => 'regular',
            'prom_gral' => '100',
            'sem_cursados' => '9',
        ]);
        
        Alumno::create([
            'claveAlumno' => '222222',
            'nombre' => 'Louis Lane',
            'carrera' => 'ISI',
            'generacion' => '2017',
            'estado' => 'regular',
            'prom_gral' => '100',
            'sem_cursados' => '9',
        ]);
        
        Alumno::create([
            'claveAlumno' => '22223',
            'nombre' => 'Sidney Brescot',
            'carrera' => 'ISI',
            'generacion' => '2017',
            'estado' => 'regular',
            'prom_gral' => '100',
            'sem_cursados' => '9',
        ]);
        
        Alumno::create([
            'claveAlumno' => '222224',
            'nombre' => 'Clark Kent',
            'carrera' => 'ISI',
            'generacion' => '2017',
            'estado' => 'regular',
            'prom_gral' => '100',
            'sem_cursados' => '9',
        ]);
        
        Alumno::create([
            'claveAlumno' => '222225',
            'nombre' => 'Barry Allen',
            'carrera' => 'ISI',
            'generacion' => '2017',
            'estado' => 'regular',
            'prom_gral' => '100',
            'sem_cursados' => '9',
        ]);
        
        Alumno::create([
            'claveAlumno' => '222226',
            'nombre' => 'Diana Prince',
            'carrera' => 'ISI',
            'generacion' => '2017',
            'estado' => 'regular',
            'prom_gral' => '100',
            'sem_cursados' => '9',
        ]);
        
        Alumno::create([
            'claveAlumno' => '222227',
            'nombre' => 'Tony Stark',
            'carrera' => 'ISI',
            'generacion' => '2017',
            'estado' => 'regular',
            'prom_gral' => '100',
            'sem_cursados' => '9',
        ]);
        
        Alumno::create([
            'claveAlumno' => '222228',
            'nombre' => 'Batman',
            'carrera' => 'ISI',
            'generacion' => '2017',
            'estado' => 'regular',
            'prom_gral' => '100',
            'sem_cursados' => '9',
        ]);
        Alumno::create([
            'claveAlumno' => '222229',
            'nombre' => 'Victor Stone',
            'carrera' => 'ISI',
            'generacion' => '2017',
            'estado' => 'regular',
            'prom_gral' => '100',
            'sem_cursados' => '9',
        ]);
    }
}
