<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\SinodalController;

//SINODAL
Route::get('/sinodal/mostrarexamenesprofesionales',[SinodalController::class,'mesinodal'])->middleware('role:sinodal')->name('mesinodal');
Route::get('/sinodal/mostrarexamenesprofesionales/{clave}',[SinodalController::class,'retro'])->middleware('role:sinodal')->name('retro');

//Retroalimentaciones

//retro carrera
Route::get('/sinodal/mostrarexamenesprofesionales/{clave}/seccarrera/',[SinodalController::class,'seccar'])->middleware('role:sinodal')->name('seccar');
Route::post('/sinodal/mostrarexamenesprofesionales/{clave}/seccarrera/guardar',[SinodalController::class,'guardarseccar'])->middleware('role:sinodal')->name('guardarseccar');

//retro practicas
Route::get('/sinodal/mostrarexamenesprofesionales/{clave}/secpracticas/',[SinodalController::class,'secpp'])->middleware('role:sinodal')->name('secpp');
Route::post('/sinodal/mostrarexamenesprofesionales/{clave}/secpracticas/guardar',[SinodalController::class,'guardarsecpp'])->middleware('role:sinodal')->name('guardarsecpp');

//retro egel
Route::get('/sinodal/mostrarexamenesprofesionales/{clave}/secegel/',[SinodalController::class,'secegel'])->middleware('role:sinodal')->name('secegel'); 
Route::post('/sinodal/mostrarexamenesprofesionales/{clave}/secegel/guardar',[SinodalController::class,'guardarsecegel'])->middleware('role:sinodal')->name('guardarsecegel');

//Verificar 3 retro alimentaciones
Route::get('/sinodal/mostrarexamenesprofesionales/{clave}/verificarretro',[SinodalController::class,'verifretro'])->middleware('role:sinodal')->name('verifretro');