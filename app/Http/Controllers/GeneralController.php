<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use PDF;

class GeneralController extends Controller
{

    public function cap(){
        return view('InicioCapturista');
    }

    public function su(){//superusuario
        return view ('InicioSU');
    }

    public function sin(){
        return view ('InicioSinodal');
    }

    public function jef(){
        return view ('InicioJA');
    }

    public function coor(){
        return view ('InicioCoordinador');
    }
    public function reporte(){
        
        //$pdf = PDF::loadHTML('<h1>test</h1>');
        $pdf = PDF::loadView('reporte');

        return $pdf->stream();
        //return $pdf->download();
        //return view('reporte');
    }
}
