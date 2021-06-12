<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SuperuController;

//SUPERUSUARIO

Route::middleware('role:superu')->group(function () {
    Route::get('/adiciondeusuarios',[SuperuController::class,'agregarusuarios'])->name('addi');
    Route::post('/su/adiciondeusuarios',[SuperuController::class,'buscarusarios'])->name('buscaru');
    Route::post('/su/adiciondeusuarioss',[SuperuController::class,'rusario'])->name('rusuario');
    //Route::view('/su/Mostrarusuario','Per.Mostrar_Usuarios')->middleware('role:superu')->name('mostrarus');
    Route::get('/su/Mostrarusuario',[SuperuController::class,'mostraru'])->name('mostrarus');

    //editar al usuario
    Route::get('/su/Mostrarusuario/{id}',[SuperuController::class,'editaru'])->name('editaru');

    //Guardar usr
    Route::post('/su/Guardaru',[SuperuController::class,'guardaredicion'])->name('guardaru');

    //eliminar usr
    Route::post('/su/eliminaru/{id}',[SuperuController::class,'eliminarus'])->name('eliminaru');

    //Mostrar examenes
    Route::get('/su/mostrarexamenesprofesionales',[SuperuController::class,'mostrarex'])->name('mostrarexprof');
    Route::get('/su/mostrarexamenesprofesionales/editar/{id}',[SuperuController::class,'editarex'])->name('editarexamen');
    Route::post('/su/mostrarexamenesprofesionales/editar/guardarexamen',[SuperuController::class,'guardarex'])->name('guardarexamen');
    Route::get('/su/mostrarexamenesprofesionales/eliminar/{id}',[SuperuController::class,'borrarex'])->name('borrarexamen');

    //Route::post('/su/mostrarexamenesprofesionales/{id}',[GeneralController::class,'editarex'])->middleware('role:superu')->name('mostrarexprof');

    //agendar examenes
    Route::get('/su/agendarexamenesprofesionales',[SuperuController::class,'agendar'])->name('agendarexprof');
    Route::post('/su/agendarexamenesprofesionales',[SuperuController::class,'agendare'])->name('agendarexprofpost');
    Route::get('/su/agendarexamenesprofesionales/buscarusuario',[SuperuController::class,'buscaru'])->name('ae_buscaru');


    //Registrar cuestionario
    Route::get('/su/Dardealtaformatoderetroalimentacion',[SuperuController::class,'mostrarcues'])->name('mostrarcues');
    Route::post('/su/Dardealtaformatoderetroalimentacion/setearcues',[SuperuController::class,'setcues'])->name('setcues');

    //modificar cuestionario
    Route::get('/su/Modificarformatoretroalimentacion',[SuperuController::class,'modifcues'])->name('modifcues');
    Route::post('/su/Modificarformatoretroalimentacion/actualizar',[SuperuController::class,'actualizarcues'])->name('actcues');
});