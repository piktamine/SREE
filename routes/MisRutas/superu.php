<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SuperuController;

//SUPERUSUARIO
Route::get('/adiciondeusuarios',[SuperuController::class,'agregarusuarios'])->middleware('role:superu')->name('addi');
Route::post('/su/adiciondeusuarios',[SuperuController::class,'buscarusarios'])->middleware('role:superu')->name('buscaru');
Route::post('/su/adiciondeusuarioss',[SuperuController::class,'rusario'])->middleware('role:superu')->name('rusuario');
//Route::view('/su/Mostrarusuario','Per.Mostrar_Usuarios')->middleware('role:superu')->name('mostrarus');
Route::get('/su/Mostrarusuario',[SuperuController::class,'mostraru'])->middleware('role:superu')->name('mostrarus');

//editar al usuario
Route::get('/su/Mostrarusuario/{id}',[SuperuController::class,'editaru'])->middleware('role:superu')->name('editaru');

//Guardar usr
Route::post('/su/Guardaru',[SuperuController::class,'guardaredicion'])->middleware('role:superu')->name('guardaru');

//eliminar usr
Route::post('/su/eliminaru/{id}',[SuperuController::class,'eliminarus'])->middleware('role:superu')->name('eliminaru');

//Mostrar examenes
Route::get('/su/mostrarexamenesprofesionales',[SuperuController::class,'mostrarex'])->middleware('role:superu')->name('mostrarexprof');
Route::get('/su/mostrarexamenesprofesionales/editar/{id}',[SuperuController::class,'editarex'])->middleware('role:superu')->name('editarexamen');
Route::post('/su/mostrarexamenesprofesionales/editar/guardarexamen',[SuperuController::class,'guardarex'])->middleware('role:superu')->name('guardarexamen');
Route::get('/su/mostrarexamenesprofesionales/eliminar/{id}',[SuperuController::class,'borrarex'])->middleware('role:superu')->name('borrarexamen');

//Route::post('/su/mostrarexamenesprofesionales/{id}',[GeneralController::class,'editarex'])->middleware('role:superu')->name('mostrarexprof');

//agendar examenes
Route::get('/su/agendarexamenesprofesionales',[SuperuController::class,'agendar'])->middleware('role:superu')->name('agendarexprof');
Route::post('/su/agendarexamenesprofesionales',[SuperuController::class,'agendare'])->middleware('role:superu')->name('agendarexprofpost');
Route::get('/su/agendarexamenesprofesionales/buscarusuario',[SuperuController::class,'buscaru'])->middleware('role:superu')->name('ae_buscaru');


//Registrar cuestionario
Route::get('/su/Dardealtaformatoderetroalimentacion',[SuperuController::class,'mostrarcues'])->middleware('role:superu')->name('mostrarcues');
Route::post('/su/Dardealtaformatoderetroalimentacion/setearcues',[SuperuController::class,'setcues'])->middleware('role:superu')->name('setcues');

//modificar cuestionario
Route::get('/su/Modificarformatoretroalimentacion',[SuperuController::class,'modifcues'])->middleware('role:superu')->name('modifcues');
Route::post('/su/Modificarformatoretroalimentacion/actualizar',[SuperuController::class,'actualizarcues'])->middleware('role:superu')->name('actcues');