<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CapturistaController;

//CAPTURISTA:
Route::get('/capturista/captura',[CapturistaController::class,'capturar'])
->middleware('role:capturista')->name('capturar');//Capturar resultados (capturista)
Route::post('/capturista/captura',[CapturistaController::class,'storecapturar'])->middleware('role:capturista')->name('capturasubmit');//Capturar resultados (capturista)
Route::get('/capturista/buscaru',[CapturistaController::class,'buscaru'])->middleware('role:capturista')->name('cap_buscaru');//Capturar resultados (capturista)

