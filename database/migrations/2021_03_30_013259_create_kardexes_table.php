<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKardexesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kardexes', function (Blueprint $table) {
            $table->id()->unsigned();
            
            //4 kardex
        //Nombre materia, calif, tipo examen, semestre, obs
            $table->integer('clave');
            $table->string('Nombre_materia',80);
            $table->integer('calif');
            $table->string('tipo_examen',80);
            $table->integer('semestre');
            $table->string('observacion',80);
            
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
        Schema::dropIfExists('kardexes');
    }
}
