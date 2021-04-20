<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistroSinodalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registro_sinodals', function (Blueprint $table) {
            $table->id();
            
            $table->string('tipoSinodal',50);
            $table->unsignedBigInteger('rpe');//Llave foranea
            $table->unsignedBigInteger('idExamen');//Llave foranea
            
            $table->foreign('idExamen')//llave foranea definicion
                ->references('idExamen')
                ->on('examen_profesionals')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            
            $table->foreign('rpe')//llave foranea definicion
                ->references('rpe')
                ->on('users')
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
        Schema::dropIfExists('registro_sinodals');
    }
}
