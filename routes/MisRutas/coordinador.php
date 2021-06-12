<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CoordinadorController;

Route::middleware('role:coordinador')->group(function () {

    //COORDINADOR
    Route::get('/coordinador/mostrarexamenesprofesionales',[CoordinadorController::class,'mesinodal'])->name('verexamenc');
    Route::get('/coordinador/mostrarexamenesprofesionales/{clave}',[CoordinadorController::class,'retro'])->name('retroc');

    //Retroalimentaciones

    //retro carrera
    Route::get('/coordinador/mostrarexamenesprofesionales/{clave}/seccarrera/',[CoordinadorController::class,'seccar'])->name('seccarc');
    Route::post('/coordinador/mostrarexamenesprofesionales/{clave}/seccarrera/guardar',[CoordinadorController::class,'guardarseccar'])->name('guardarseccarc');

    //retro practicas
    Route::get('/coordinador/mostrarexamenesprofesionales/{clave}/secpracticas/',[CoordinadorController::class,'secpp'])->name('secppc');
    Route::post('/coordinador/mostrarexamenesprofesionales/{clave}/secpracticas/guardar',[CoordinadorController::class,'guardarsecpp'])->name('guardarsecppc');

    //retro egel
    Route::get('/coordinador/mostrarexamenesprofesionales/{clave}/secegel/',[CoordinadorController::class,'secegel'])->name('secegelc'); 
    Route::post('/coordinador/mostrarexamenesprofesionales/{clave}/secegel/guardar',[CoordinadorController::class,'guardarsecegel'])->name('guardarsecegelc');

    //Verificar 3 retro alimentaciones
    Route::get('/coordinador/mostrarexamenesprofesionales/{clave}/verificarretro',[CoordinadorController::class,'verifretro'])->name('verifretroc');

    //Reporte vista
    Route::get('/coordinador/Reportes',[CoordinadorController::class,'reportes'])->name('reportesc');

});