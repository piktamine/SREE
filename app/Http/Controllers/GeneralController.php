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

                    if($alumno->generacion == $request->gen){
                        //$examen = EGEL::find($el->claveAlumno);
                        $respuestas = RespuestasCuestionario::find($el->idRespuestas);
                        $egels = EGEL::where('claveAlumno',$el->claveAlumno)->first();

                        if($egels){
                            $datos->add([
                                'clave' => Auth::user()->rpe,
                                'nombre' => Auth::user()->nombre,
                                'filtro' => '-',
                                'carrera' => $alumno->carrera,
                                'gen_i' => $alumno->generacion,
                                'area1' => $egels->nivelArea1,
                                'area2' => $egels->nivelArea2,
                                'area3' => $egels->nivelArea3,
                                'area4' => $egels->nivelArea4,
                                'area5' => $egels->nivelArea5,
                                'generacion1' => '-',
                                'generacion2' => '-',
                                'generacion3' => '-',
                                'puntaje1' => $egels->punArea1,
                                'puntaje2' => $egels->punArea2,
                                'puntaje3' => $egels->punArea3,
                                'puntaje4' => $egels->punArea4,
                                'puntaje5' => $egels->punArea5,
                                'r1' => $respuestas->resCarrera1,
                                'r2' => $respuestas->resMaterias1,
                                'r3' => $respuestas->resMaterias2,
                                'r4' => $respuestas->resServicio1,
                                'r5' => $respuestas->resServicio2,
                                'r6' => $respuestas->resPracticas1,
                                'r7' => $respuestas->resPracticas2,
                                'r8' => $respuestas->resArea1,
                                'r9' => $respuestas->resArea2,
                                'ops' => $respuestas->observaciones3,
                            ]);
                        }
                    }
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
            return Excel::download(new ReportesExport($request->fechaini,$request->fechafin,$request->gen), 'SREE Reporte.xlsx');
        }
        return back();
    }
}
