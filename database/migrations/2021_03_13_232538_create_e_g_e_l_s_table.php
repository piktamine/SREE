<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEGELSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('e_g_e_l_s', function (Blueprint $table) {
            $table->id();
            
            $table->integer('claveAlumno')->unique();
            $table->integer('punArea1');
            $table->integer('punArea2');
            $table->integer('punArea3');
            $table->integer('punArea4');
            $table->integer('punArea5');
            $table->string('nivelArea1',10);
            $table->string('nivelArea2',10);
            $table->string('nivelArea3',10);
            $table->string('nivelArea4',10);
            $table->string('nivelArea5',10);
            $table->string('testimonio',50);
            
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
        Schema::dropIfExists('e_g_e_l_s');
    }
}
