<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Auth;
//use Illuminate\Support\Facades\Cookie;
use App\Models\EGEL;
use App\Models\User;
use App\Models\Profesor;
use App\Models\ExamenProfesional;
use App\Models\RegistroSinodal;
use App\Models\Alumno;
use App\Models\Cuestionario;
use App\Models\Kardex;
use App\Models\RespuestasCuestionario;
//use Cookie;
//use Symfony\Component\HttpFoundation\Cookie;
//use App\Models\;

class JefeareaController extends Controller
{
    //
    public function mesinodal(){
        $sinodales = RegistroSinodal::where('rpe',Auth::user()->rpe)->get();
        $examenes = ExamenProfesional::all();
        //$examenes = ExamenProfesional::where('',);
        $alumnos = Alumno::all();
        //$sinodales = RegistroSinodal::where('rpe',Auth::user()->id);
        $usuarios = User::all();

        //return $sinodales;

        ///*
        return view('Per.ExamenesProgramadosGeneral')
            ->with('examenes',$examenes)
            ->with('alumnos',$alumnos)
            ->with('sinodales',$sinodales)
            ->with('usuarios',$usuarios);
        //*/
    }

    public function retro($clave){ //General
        $e = ExamenProfesional::where('claveAlumno',$clave)->get();
        $ex = $e[0];
        if($ex->idRespuestas==null){
            $resp = new RespuestasCuestionario;
            $resp ->save();
            $ex->idRespuestas = $resp->getKey();
            $ex->save();
        }

        $r = RespuestasCuestionario::find($ex->idRespuestas);

        $al = Alumno::find($clave);
        $kardex = Kardex::where('clave',$clave)->get();

        //return $kardex;
        return view('Per.Informacion_Sustentante')
            ->with('al',$al)
            ->with('kardex',$kardex)
            ->with('r',$r);
    }
    public function verifretro($clave){
        $e = ExamenProfesional::where('claveAlumno',$clave)->get();
        $ex = $e[0];
        $resp = RespuestasCuestionario::find($ex->idRespuestas);
        if($resp){
            $ex->realizoCuestionario=true;
            $ex->save();
            //return view
        }
        $prol = Auth::user()->roles->pluck('name');//obtiene arreglo con el rol
        $rol = $prol[0];//arreglo a string

        return redirect(route('jefearea'));
    }

    public function seccar($clave){//Seccion Carrera
        $cues = Cuestionario::first();
        $ex = ExamenProfesional::where('claveAlumno',$clave)->get();
        $examen =$ex[0];
        $resp = RespuestasCuestionario::find($examen->idRespuestas);

        $al = Alumno::find($clave);
        return view('Per.RetroalimentacionCarrera')
            ->with('al',$al)
            ->with('cues',$cues)
            ->with('resp',$resp);
    }

    public function guardarseccar(Request $request){
        $request->validate([
            //'email' => ['required','email','string'],
            'rcarr1' => ['required'],
            'rmat1' => ['required'],
            'rmat2' => ['required'],
        ]);

        $ex = ExamenProfesional::where('claveAlumno',$request->clave)->get();
        $examen =$ex[0];
        $resp = RespuestasCuestionario::find($examen->idRespuestas);
        $resp->resCarrera1 =  $request->rcarr1;
        $resp->resMaterias1 =  $request->rmat1;
        $resp->resMaterias2 =  $request->rmat2;
        $resp->save();

        return redirect(route('retroj',$request->clave));
        //return $request;
    }

    public function secpp($clave){//Seccion Practicas
        $cues = Cuestionario::first();
        $ex = ExamenProfesional::where('claveAlumno',$clave)->get();
        $examen =$ex[0];
        $resp = RespuestasCuestionario::find($examen->idRespuestas);

        $al = Alumno::find($clave);
        return view('Per.Retroalimentacion_Practicas')
            ->with('al',$al)
            ->with('cues',$cues)
            ->with('resp',$resp);
    }
    public function guardarsecpp(Request $request){

        $request->validate([
            //'email' => ['required','email','string'],
            'r1' => ['required'],
            'r2' => ['required'],
            'r3' => ['required'],
            'r4' => ['required'],
        ]);

        $ex = ExamenProfesional::where('claveAlumno',$request->clave)->get();
        $examen =$ex[0];
        $resp = RespuestasCuestionario::find($examen->idRespuestas);
        $resp->resServicio1 =  $request->r1;
        $resp->resServicio2 =  $request->r2;
        $resp->resPracticas1 =  $request->r3;
        $resp->resPracticas2 =  $request->r4;
        $resp->save();

        return redirect(route('retroj',$request->clave));
        //return $request;
    }
    public function secegel($clave){//Seccion Egel
        $cues = Cuestionario::first();

        $ex = ExamenProfesional::where('claveAlumno',$clave)->get();
        $examen =$ex[0];
        $resp = RespuestasCuestionario::find($examen->idRespuestas);

        $al = Alumno::find($clave);

        return view('Per.RetroalimentacionEgel')
            ->with('al',$al)
            ->with('cues',$cues)
            ->with('resp',$resp);
    }
    public function guardarsecegel(Request $request){

        $request->validate([
            //'email' => ['required','email','string'],
            'r1' => ['required'],
            'r2' => ['required'],
            'r3' => ['required']
        ]);

        $ex = ExamenProfesional::where('claveAlumno',$request->clave)->get();
        $examen = $ex[0];
        $resp = RespuestasCuestionario::find($examen->idRespuestas);
        $resp->resArea1 =  $request->r1;
        $resp->resArea2 =  $request->r2;
        $resp->observaciones3 =  $request->r3;
        $resp->save();

        return redirect(route('retroj',$request->clave));
        //return $request;
    }
    public function reportes(){
        return view('Per.Generacion_Reportes');
    }
    public function hacerReporte(Request $request){
        /*
        for(){
            $dato->
        }
        */
        return $request;
    }
}
