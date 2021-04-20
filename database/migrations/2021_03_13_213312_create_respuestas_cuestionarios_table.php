<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRespuestasCuestionariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('respuestas_cuestionarios', function (Blueprint $table) {
            $table->id('idRespuestas');
            
            $table->string('resCarrera1',200)->nullable();//retro carrera
            $table->string('resMaterias1',200)->nullable();//retro carrera
            $table->string('resMaterias2',200)->nullable();//retro carrera
            $table->string('resServicio1',200)->nullable();//retro practicas
            $table->string('resServicio2',200)->nullable();//retro practicas
            $table->string('resPracticas1',200)->nullable();//retro practicas
            $table->string('resPracticas2',200)->nullable();//retro practicas
            $table->string('resArea1',200)->nullable();//egel
            $table->string('resArea2',200)->nullable();//egel
            $table->string('observaciones3',200)->nullable();//egel
            
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
        Schema::dropIfExists('respuestas_cuestionarios');
    }
}
