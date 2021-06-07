<?php

namespace App\Exports;

use App\Invoice;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
//MORE
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\EGEL;
use App\Models\Alumno;
use App\Models\RespuestasCuestionario;
use App\Models\User;

class ReportesExport implements FromView
{
    private $fechaini,$fechafin,$gen;

    public function __construct($fi,$ff,$gen) 
    {
        $this->fechaini = $fi;
        $this->fechafin = $ff;
        $this->gen = $gen;
    }

    public function view(): View
    {
        ///*
        $examenes_lista = DB::table('examen_profesionals')
            ->whereYear('fechaExamen','>=',$this->fechaini)
            ->whereYear('fechaExamen','<=',$this->fechafin)
            ->get();
        $datos = collect();

        foreach($examenes_lista as $el){
            if($el->idRespuestas){
                $alumno = Alumno::find($el->claveAlumno);
                //$examen = EGEL::find($el->claveAlumno);

                if($alumno->generacion == $this->gen){

                    $respuestas = RespuestasCuestionario::find($el->idRespuestas);
                    $egels = EGEL::where('claveAlumno',$el->claveAlumno)->first();

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
                    ]);
                }
            }
        }
        //*/

        return view('repexcel', [
            'datos' => $datos
        ]);
    }
}
