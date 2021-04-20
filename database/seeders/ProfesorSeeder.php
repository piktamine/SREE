<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Profesor;

class ProfesorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Profesor::create([
            'rpe' => '144441',
            'nombre' => 'Juan garcia',
            'facultad' => 'ingenieria',
            'area' => 'Ciencias de la Computacion',
            'tipoMaestro' => 'Tiempo completo',
            'correo' => 'p1@uaslp.mx'
        ]);//Dato falso coordinador
            
        Profesor::create([
            'rpe' => '144442',
            'nombre' => 'Beto Espinoza',
            'facultad' => 'ingenieria',
            'area' => 'Ciencias de la Computacion',
            'tipoMaestro' => 'Tiempo completo',
            'correo' => 'p2@uaslp.mx'
        ]);//Dato falso coordinador 
        
        Profesor::create([
            'rpe' => '144443',
            'nombre' => 'Erick de garcia',
            'facultad' => 'ingenieria',
            'area' => 'Ciencias de la Computacion',
            'tipoMaestro' => 'Tiempo completo',
            'correo' => 'p3@uaslp.mx'
        ]);//Dato falso coordinador
            
        Profesor::create([
            'rpe' => '144444',
            'nombre' => 'Albert garcia',
            'facultad' => 'ingenieria',
            'area' => 'Ciencias de la Computacion',
            'tipoMaestro' => 'Tiempo completo',
            'correo' => 'p4@uaslp.mx'
        ]);//Dato falso coordinador
            
        Profesor::create([
            'rpe' => '144445',
            'nombre' => 'Luis garcia',
            'facultad' => 'ingenieria',
            'area' => 'Ciencias de la Computacion',
            'tipoMaestro' => 'Tiempo completo',
            'correo' => 'p5@uaslp.mx'
        ]);//Dato falso coordinador
    }
}
