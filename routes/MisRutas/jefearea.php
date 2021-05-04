<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\JefeareaController;

//JEFE DEL AREA
Route::get('/jefearea/mostrarexamenesprofesionales',[JefeareaController::class,'mesinodal'])->middleware('role:jefearea')->name('verexamenja');
Route::get('/jefearea/mostrarexamenesprofesionales/{clave}',[JefeareaController::class,'retro'])->middleware('role:jefearea')->name('retroj');

//Retroalimentaciones

//retro carrera
Route::get('/jefearea/mostrarexamenesprofesionales/{clave}/seccarrera/',[JefeareaController::class,'seccar'])->middleware('role:jefearea')->name('seccarj');
Route::post('/jefearea/mostrarexamenesprofesionales/{clave}/seccarrera/guardar',[JefeareaController::class,'guardarseccar'])->middleware('role:jefearea')->name('guardarseccarj');

//retro practicas
Route::get('/jefearea/mostrarexamenesprofesionales/{clave}/secpracticas/',[JefeareaController::class,'secpp'])->middleware('role:jefearea')->name('secppj');
Route::post('/jefearea/mostrarexamenesprofesionales/{clave}/secpracticas/guardar',[JefeareaController::class,'guardarsecpp'])->middleware('role:jefearea')->name('guardarsecppj');

//retro egel
Route::get('/jefearea/mostrarexamenesprofesionales/{clave}/secegel/',[JefeareaController::class,'secegel'])->middleware('role:jefearea')->name('secegelj'); 
Route::post('/jefearea/mostrarexamenesprofesionales/{clave}/secegel/guardar',[JefeareaController::class,'guardarsecegel'])->middleware('role:jefearea')->name('guardarsecegelj');

//Verificar 3 retro alimentaciones
Route::get('/jefearea/mostrarexamenesprofesionales/{clave}/verificarretro',[JefeareaController::class,'verifretro'])->middleware('role:jefearea')->name('verifretroj');

//Reportes
Route::get('/jefearea/Reportes',[JefeareaController::class,'reportes'])->middleware('role:jefearea')->name('reportesj');