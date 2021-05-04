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
    public function hacerReporte(Request $request){
        /*
        for(){
            $datos = [
                clave => [],
                nombre => [],
                filtro => [],
                carrera => [],
                gen_i => [],
                gen_f => [],
                area1 => [],
                area2 => [],
                area3 => [],
                generacion1 => [],
                generacion2 => [],
                generacion3 => [],
                puntaje1 => [],
                puntaje2 => [],
                puntaje3 => [],
                r1 => [],
                r2 => [],
                r3 => [],
                r4 => [],
                r5 => [],
                r6 => [],
                r7 => [],
                r8 => [],
                r9 => [],
            ] 
        }
        */
        return $request;
    }
}
