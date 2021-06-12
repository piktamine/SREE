<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\SinodalController;

Route::middleware('role:sinodal')->group(function () {
    //SINODAL
    Route::get('/sinodal/mostrarexamenesprofesionales',[SinodalController::class,'mesinodal'])->name('mesinodal');
    Route::get('/sinodal/mostrarexamenesprofesionales/{clave}',[SinodalController::class,'retro'])->name('retro');

    //Retroalimentaciones

    //retro carrera
    Route::get('/sinodal/mostrarexamenesprofesionales/{clave}/seccarrera/',[SinodalController::class,'seccar'])->name('seccar');
    Route::post('/sinodal/mostrarexamenesprofesionales/{clave}/seccarrera/guardar',[SinodalController::class,'guardarseccar'])->name('guardarseccar');

    //retro practicas
    Route::get('/sinodal/mostrarexamenesprofesionales/{clave}/secpracticas/',[SinodalController::class,'secpp'])->name('secpp');
    Route::post('/sinodal/mostrarexamenesprofesionales/{clave}/secpracticas/guardar',[SinodalController::class,'guardarsecpp'])->name('guardarsecpp');

    //retro egel
    Route::get('/sinodal/mostrarexamenesprofesionales/{clave}/secegel/',[SinodalController::class,'secegel'])->name('secegel'); 
    Route::post('/sinodal/mostrarexamenesprofesionales/{clave}/secegel/guardar',[SinodalController::class,'guardarsecegel'])->name('guardarsecegel');

    //Verificar 3 retro alimentaciones
    Route::get('/sinodal/mostrarexamenesprofesionales/{clave}/verificarretro',[SinodalController::class,'verifretro'])->name('verifretro');

});
