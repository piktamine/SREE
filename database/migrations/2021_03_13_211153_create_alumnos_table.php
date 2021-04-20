<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //TABLA SOLO PRUEBAS
        Schema::create('alumnos', function (Blueprint $table) {
            $table->id('claveAlumno');
            //
            //Nombre,carrera,generacion,estado (regular o irregular), prom gral, semestrescursados
            $table->string('nombre',80);
            $table->string('carrera',80);
            $table->string('generacion',80);
            $table->string('estado',80);
            $table->string('prom_gral',80);
            $table->string('sem_cursados',80);
            //$table->json('kardex');//se espera guardar el kardex completo del alumno, este tipo de dato puede cambiar   
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alumnos');
    }
}
