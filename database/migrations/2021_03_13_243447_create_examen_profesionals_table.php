<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamenProfesionalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('examen_profesionals', function (Blueprint $table) {
            $table->id('idExamen');
            
            $table->unsignedBigInteger('claveAlumno')->nullable()->unique();//Llave foranea
            
            $table->date('fechaExamen');
            $table->time('horaExamen');
            $table->boolean('realizoCuestionario');
            $table->string('recinto');
            $table->unsignedBigInteger('idCuestionario')->nullable();//Llave foranea
            $table->unsignedBigInteger('idRespuestas')->nullable();//Llave foranea
            
            $table->foreign('idCuestionario')//llave foranea definicion
                ->references('idCuestionario')
                ->on('cuestionarios')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            
            $table->foreign('idRespuestas')//llave foranea definicion
                ->references('idRespuestas')
                ->on('respuestas_cuestionarios')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            
            $table->foreign('claveAlumno')//llave foranea definicion
                ->references('claveAlumno')
                ->on('alumnos')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            
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
        Schema::dropIfExists('examen_profesionals');
    }
}
