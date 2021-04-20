<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCuestionariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuestionarios', function (Blueprint $table) {
            $table->id('idCuestionario');
            
            ///*NOTA: Cambiar esto si es necesario (Reunion con coordinadores)
            $table->string('titulo',100);
            $table->string('pregCarrera1',300);
            $table->string('pregCarrera2',300);
            $table->string('pregCarrera3',300);
            $table->string('pregServicio1',300);
            $table->string('pregServicio2',300);
            $table->string('pregPracticas1',300);
            $table->string('pregPracticas2',300);
            $table->string('pregEgel1',300);
            $table->string('pregEgel2',300);
            $table->string('pregEgel3',300);
            
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
        Schema::dropIfExists('cuestionarios');
    }
}
