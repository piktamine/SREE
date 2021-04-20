<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\GeneralController;


//RUTAS LOGIN

Route::get('/',[LoginController::class,'home']);
Route::get('/login',[LoginController::class,'login'])->name('login')->middleware('guest');
Route::post('/login',[LoginController::class,'validarlogin']);
Route::get('/logout',[LoginController::class,'cerrarsesion'])->name('logout');

//RUTAS SEGUN EL ROL

Route::get('/capturista',[GeneralController::class,'cap'])
->middleware('role:capturista')->name('capturista');//
Route::get('/superu',[GeneralController::class,'su'])
->middleware('role:superu')->name('superu');
Route::get('/sinodal',[GeneralController::class,'sin'])
->middleware('role:sinodal')->name('sinodal');
Route::get('/jefearea',[GeneralController::class,'jef'])
->middleware('role:jefearea')->name('jefearea');
Route::get('/coordinador',[GeneralController::class,'coor'])
->name('coordinador');

//prueba PDF
Route::get('/reportestest',function(){
    //$pdf = PDF::loadHTML('<h1>test</h1>');
    $pdf = PDF::loadView('reporte');
    
    return $pdf->stream();
    //return $pdf->download();
    //return hola;
});
