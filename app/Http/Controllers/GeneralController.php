<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\EGEL;
use App\Models\Alumno;
use App\Models\RespuestasCuestionario;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Exports\ReportesExport;//clase que nos crea los excel
use PDF;//libreria para trabajar con Dompdf
use Excel;

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
        if($request->formato=='pdf'){
            //$examenes = ExamenProfesional::where('fechaExamen','>=',$request->fechaini)->get();
            $examenes_lista = DB::table('examen_profesionals')
                ->whereYear('fechaExamen','>=',$request->fechaini)
                ->whereYear('fechaExamen','<=',$request->fechafin)
                ->get();//consulta para filtrar segun 2 fechas
            $datos = collect();//crea coleccion vacia para guardar todos los datos

            ///*
            foreach($examenes_lista as $el){
                if($el->idRespuestas){
                    $alumno = Alumno::find($el->claveAlumno);
                    //$examen = EGEL::find($el->claveAlumno);
                    $respuestas = RespuestasCuestionario::find($el->idRespuestas);

                    $datos->add([
                        'clave' => $alumno->claveAlumno,
                        'nombre' => $alumno->nombre,
                        'filtro' => '-',
                        'carrera' => $alumno->carrera,
                        'gen_i' => $alumno->generacion,
                        'area1' => '-',
                        'area2' => '-',
                        'area3' => '-',
                        'generacion1' => '-',
                        'generacion2' => '-',
                        'generacion3' => '-',
                        'puntaje1' => '-',
                        'puntaje2' => '-',
                        'puntaje3' => '-',
                        'r1' => $respuestas->resCarrera1,
                        'r2' => $respuestas->resMaterias1,
                        'r3' => $respuestas->resMaterias2,
                        'r4' => $respuestas->resServicio1,
                        'r5' => $respuestas->resServicio2,
                        'r6' => $respuestas->resPracticas1,
                        'r7' => $respuestas->resPracticas2,
                        'r8' => $respuestas->resArea1,
                        'r9' => $respuestas->resArea2,
                    ]);
                }
                //*/
            }
            $pdf = PDF::loadView('reporte',compact('datos'));
            //*/
            return $pdf->stream();
            //return $examenes_lista;
            //return $datos;
            //return User::all();
        }
        if($request->formato=='excel'){
            return Excel::download(new ReportesExport, 'reporte.xlsx');
        }
        return back();
    }
}
