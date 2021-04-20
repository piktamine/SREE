<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CapturistaController;

//CAPTURISTA:
Route::get('/capturista/captura',[CapturistaController::class,'capturar'])
->middleware('role:capturista')->name('capturar');//Capturar resultados (capturista)
Route::post('/capturista/captura',[CapturistaController::class,'storecapturar'])->name('capturasubmit');//Capturar resultados (capturista)
