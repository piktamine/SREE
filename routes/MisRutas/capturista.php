<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CapturistaController;

Route::middleware('role:capturista')->group(function () {
    //CAPTURISTA:
    Route::get('/capturista/captura',[CapturistaController::class,'capturar'])->name('capturar');//Capturar resultados (capturista)
    Route::post('/capturista/captura',[CapturistaController::class,'storecapturar'])->name('capturasubmit');//Capturar resultados (capturista)
    Route::get('/capturista/buscaru',[CapturistaController::class,'buscaru'])->name('cap_buscaru');//Capturar resultados (capturista)
});

