<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CoordinadorController;

//COORDINADOR

//JEFE DEL AREA
Route::get('/coordinador/mostrarexamenesprofesionales',[CoordinadorController::class,'mesinodal'])->middleware('role:coordinador')->name('verexamenc');
Route::get('/coordinador/mostrarexamenesprofesionales/{clave}',[CoordinadorController::class,'retro'])->middleware('role:coordinador')->name('retroc');

//Retroalimentaciones

//retro carrera
Route::get('/coordinador/mostrarexamenesprofesionales/{clave}/seccarrera/',[CoordinadorController::class,'seccar'])->middleware('role:coordinador')->name('seccarc');
Route::post('/coordinador/mostrarexamenesprofesionales/{clave}/seccarrera/guardar',[CoordinadorController::class,'guardarseccar'])->middleware('role:coordinador')->name('guardarseccarc');

//retro practicas
Route::get('/coordinador/mostrarexamenesprofesionales/{clave}/secpracticas/',[CoordinadorController::class,'secpp'])->middleware('role:coordinador')->name('secppc');
Route::post('/coordinador/mostrarexamenesprofesionales/{clave}/secpracticas/guardar',[CoordinadorController::class,'guardarsecpp'])->middleware('role:coordinador')->name('guardarsecppc');

//retro egel
Route::get('/coordinador/mostrarexamenesprofesionales/{clave}/secegel/',[CoordinadorController::class,'secegel'])->middleware('role:coordinador')->name('secegelc'); 
Route::post('/coordinador/mostrarexamenesprofesionales/{clave}/secegel/guardar',[CoordinadorController::class,'guardarsecegel'])->middleware('role:coordinador')->name('guardarsecegelc');

//Verificar 3 retro alimentaciones
Route::get('/coordinador/mostrarexamenesprofesionales/{clave}/verificarretro',[CoordinadorController::class,'verifretro'])->middleware('role:coordinador')->name('verifretroc');

//Reportes
Route::get('/sinodal/Reportes',[SinodalController::class,'reportes'])->middleware('role:sinodal')->name('reportesc');