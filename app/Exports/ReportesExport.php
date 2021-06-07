<?php

namespace App\Exports;

use App\Invoice;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
//MORE
use Illuminate\Support\Facades\DB;
use App\Models\EGEL;
use App\Models\Alumno;
use App\Models\RespuestasCuestionario;
use App\Models\User;

class ReportesExport implements FromView
{
    public function view($dato): View
    {
        /*
        $examenes_lista = DB::table('examen_profesionals')
            ->whereYear('fechaExamen','>=',$request->fechaini)
            ->whereYear('fechaExamen','<=',$request->fechafin)
            ->get();
        $datos = collect();

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
        }
        */
        
        return view('repexcel', [
            'datos' => 'Chingas a tu madre'
        ]);
    }
}
