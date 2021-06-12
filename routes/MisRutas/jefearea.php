<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\JefeareaController;

Route::middleware('role:jefearea')->group(function () {
    //JEFE DEL AREA
    Route::get('/jefearea/mostrarexamenesprofesionales',[JefeareaController::class,'mesinodal'])->name('verexamenja');
    Route::get('/jefearea/mostrarexamenesprofesionales/{clave}',[JefeareaController::class,'retro'])->name('retroj');

    //Retroalimentaciones

    //retro carrera
    Route::get('/jefearea/mostrarexamenesprofesionales/{clave}/seccarrera/',[JefeareaController::class,'seccar'])->name('seccarj');
    Route::post('/jefearea/mostrarexamenesprofesionales/{clave}/seccarrera/guardar',[JefeareaController::class,'guardarseccar'])->name('guardarseccarj');

    //retro practicas
    Route::get('/jefearea/mostrarexamenesprofesionales/{clave}/secpracticas/',[JefeareaController::class,'secpp'])->name('secppj');
    Route::post('/jefearea/mostrarexamenesprofesionales/{clave}/secpracticas/guardar',[JefeareaController::class,'guardarsecpp'])->name('guardarsecppj');

    //retro egel
    Route::get('/jefearea/mostrarexamenesprofesionales/{clave}/secegel/',[JefeareaController::class,'secegel'])->name('secegelj'); 
    Route::post('/jefearea/mostrarexamenesprofesionales/{clave}/secegel/guardar',[JefeareaController::class,'guardarsecegel'])->name('guardarsecegelj');

    //Verificar 3 retro alimentaciones
    Route::get('/jefearea/mostrarexamenesprofesionales/{clave}/verificarretro',[JefeareaController::class,'verifretro'])->name('verifretroj');

    //Reportes
    Route::get('/jefearea/Reportes',[JefeareaController::class,'reportes'])->name('reportesj');
});