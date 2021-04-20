<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Auth;
use App\Models\EGEL;
use App\Models\User;
use App\Models\Profesor;
use App\Models\ExamenProfesional;
use App\Models\RegistroSinodal;
use App\Models\Alumno;
use App\Models\Cuestionario;
use App\Models\Kardex;
use App\Models\RespuestasCuestionario;
use Cookie;

class SuperuController extends Controller
{
    public function agregarusuarios(){
        $datos = User::all();
        return view('Per.Agregar_Usuario')->with('usuarios',$datos);
    }

    public function buscarusarios(Request $request){
        $datosdelform = $request;

        $request->validate([
            //'email' => ['required','email','string'],
            'rpe' => ['required','integer'],
            'rol' => ['required'],
        ]);

        $rpe = $datosdelform->rpe;
        $rol = $datosdelform->rol;
        $datos = Profesor::find($rpe);


        //$sql = 'select * from profesors where rpe = "'.$rpe.'"';
        //$datos = DB::select($sql);
        //return $datos;

        ///*
        if(empty($datos)){
            return redirect(route('addi'))->with('noencontrado','no');
            //return "Error";
            //$aut='no';
        }
        else
        {
            $aut='si';
            //return $datos;
            return view('Per.Agregar_Usuario')
                ->with('datos',$datos)
                ->with('rol',$rol)
                ->with('autorizar',$aut);
        }

        return redirect(route('addi'));
        //$datos->save();
    }

    public function rusario(Request $request){//Regitrar usuario
        $datosdelform = $request;

        $usr = new User;

        $usr->name = $datosdelform->nombre;
        $usr->rpe = $datosdelform->rpe;
        $usr->email = $datosdelform->correo;
        $usr->password = bcrypt('12345678');

        //return $usr;

        //Asignar un rol
        //->assignRole($datosdelform->rol)
        //guardamos y redireccionamos

        //return $datosdelform->rol;
        //NOTA: CHECAR Los duplicados

        ///*
        try{
            $usr->save();
        }catch(\Exception $e){
            return redirect(route('superu'))
                ->with('error','Error al guardar a el usuario');
        }
        $usr->assignRole($datosdelform->rol);

        return redirect(route('superu'));

        //*/

        //return redirect(route('superu'));
    }
    public function mostraru(){
        //$datos = User::all();
        $datos = User::role(['sinodal','jefearea','capturista','coordinador'])->get();
        //$datos = User::role('capturista')->get();
        //$usrs3 = User::role('jefearea');
        //$usrs4 = User::role('coordinador');
        //$datos = $usrs1->merge($usrs2)->merge($usrs3)->merge($usrs4);
        //$users = User::role('writer')->get();
        //$roles = $user->getRoleNames();

        return view('Per.Mostrar_Usuarios')->with('datos',$datos);
        //return $datos;
    }

    public function editaru($id)
    {
        $usr = User::findOrFail($id);

        return view ('Per.editaru',compact('usr'));
    }

    public function guardaredicion(Request $request){
        //return $request;
        ///*
        $usrnuevo=User::find($request->id);
        //$datosnuevos = new MPR; 
        if(!is_null($usrnuevo) && $request->rol!=null){

            $rol=$usrnuevo->getRoleNames();    
            //$usrnuevo->removeRole();    
            $usrnuevo->removeRole($rol[0]);//eliminar rol
            $usrnuevo->assignRole($request->rol);
            //$usrnuevo->role()->sync([$request->input($usrnuevo->getRoleNames())]);

            //$usrnuevo->save();  
        } 

        return redirect(route('mostrarus'))
            ->with("success","Rol editado con exito");
        //*/
    }

    public function eliminarus($id){

        $dato=User::find($id);
        $dato->delete();

        return back()->with('borrar','ok');
    }

    public function agendar(){//vista de Agendar Examenes

        //Todos los usuarios que no tienen el rol: capturista y SU
        $usuariosc = $users = User::role('coordinador')->get();
        $usuarioss = $users = User::role('sinodal')->get();
        $usuariosj = $users = User::role('jefearea')->get();
        $usuarios = $usuariosc->merge($usuarioss)->merge($usuariosj);

        //return $usuarios;
        return view('Per.Calendarizacion_Examenes')->with('sinodales',$usuarios);
    }

    public function agendare(Request $request){//Guarda la info de el examen
        //return $request;
        ///*
        $request->validate([
            //'email' => ['required','email','string'],
            'clave' => ['required','integer'],
            'nombre' => ['required'],
            'fecha' => ['required'],
            'hora' => ['required'],
            's1' => ['required'],
            's2' => ['required'], 
            's3' => ['required'], 
            's4' => ['required'],
            'recinto' => ['required']
        ]);

        $datosdelform = $request;
        //return $datosdelform;

        //$al = Alumno::find($request->nombre); //el nombre del form es la clave unica
        //if(!empty($al)){

        $examen = new ExamenProfesional;
        $c = Cuestionario::first();//cuestionario (solo debeb haber 1)

        $examen->claveAlumno = $datosdelform->clave;
        $examen->fechaExamen = $datosdelform->fecha;
        $examen->horaExamen = $datosdelform->hora;
        $examen->realizoCuestionario = false;
        $examen ->recinto = $datosdelform->recinto;
        $examen->idCuestionario = $c->idCuestionario;
        //$examen->idRespuestas = 6;
        //$id=$examen->idExamen;
        try{
            $examen->save();
        }catch(\Exception $e){
            return redirect(route('agendarexprof'))
                ->with('erroralguardar','Informacion erronea favor de verificar nuevamente');
        }

        //$examen->getKey();

        // return $examen->getKey();
        //Sinodales
        //$idex = ExamenProfesional::latest('idExamen')->first()->idExamen; 

        $sinodal1 = new RegistroSinodal;
        $sinodal1->tipoSinodal = 'principal';
        $sinodal1->rpe = $datosdelform->s1;  
        $sinodal1->idExamen = $examen->getKey();
        $sinodal1->save();

        $sinodal2 = new RegistroSinodal;
        $sinodal2->tipoSinodal = 'principal';
        $sinodal2->rpe = $datosdelform->s2;  
        $sinodal2->idExamen = $examen->getKey();
        $sinodal2->save();

        $sinodal3 = new RegistroSinodal;
        $sinodal3->tipoSinodal = 'principal';
        $sinodal3->rpe = $datosdelform->s3;  
        $sinodal3->idExamen = $examen->getKey();
        $sinodal3->save();

        $sinodal4 = new RegistroSinodal; 
        $sinodal4->tipoSinodal = 'suplente';
        $sinodal4->rpe = $datosdelform->s4;  
        $sinodal4->idExamen = $examen->getKey();
        $sinodal4->save();  

        return redirect(route('superu'))->with('success','Examen agendado correctamente');
        //*/ 
    }

    public function mostrarex(){

        $examenes = ExamenProfesional::all();
        $alumnos = Alumno::all();
        $sinodales = RegistroSinodal::all();
        $usuarios = User::all();

        return view('Per.ExamenesProgramados')
            ->with('examenes',$examenes)
            ->with('alumnos',$alumnos)
            ->with('sinodales',$sinodales)
            ->with('usuarios',$usuarios);
    }

    public function editarex($id){
        $usuariosc = $users = User::role('coordinador')->get();
        $usuarioss = $users = User::role('sinodal')->get();
        $usuariosj = $users = User::role('jefearea')->get();
        $usuarios = $usuariosc->merge($usuarioss)->merge($usuariosj);

        $e = ExamenProfesional::find($id);
        $a = Alumno::find($e->claveAlumno);

        $sin = RegistroSinodal::where('idExamen',$e->idExamen);//los sinodales
        $us = $usuarios;

        return view('Per.editare')
            ->with('e',$e)
            ->with('a',$a)
            ->with('sin',$sin)
            ->with('us',$us);
    }
    public function guardarex(Request $request){

        $ex=ExamenProfesional::find($request->id);
        //$sin = RegistroSinodal::where('idExamen',$ex->idExamen)->get();
        //return $sin[0];
        ///*
        //$e = ExamenProfesional::find($request->id);
        $sin = RegistroSinodal::where('idExamen',$ex->idExamen)->get();//los 4 sinodales

        $s1 = $sin[0]; 
        $s2 = $sin[1]; 
        $s3 = $sin[2]; 
        $s4 = $sin[3]; 

        //$datosnuevos = new MPR; 
        if(!is_null($ex)){
            $ex->fechaExamen = $request->fecha;
            $ex->horaExamen = $request->hora;
            $ex->recinto = $request->recinto;

            $ex->save();

            $sinodal1 = RegistroSinodal::find($s1->id);
            $sinodal1->tipoSinodal = 'principal';
            $sinodal1->rpe = $request->s1;  
            $sinodal1->save();

            $sinodal2 = RegistroSinodal::find($s2->id);
            $sinodal2->tipoSinodal = 'principal';
            $sinodal2->rpe = $request->s2;  
            $sinodal2->save();

            $sinodal3 = RegistroSinodal::find($s3->id);
            $sinodal3->tipoSinodal = 'principal';
            $sinodal3->rpe = $request->s3;  
            $sinodal3->save();

            $sinodal4 = RegistroSinodal::find($s4->id);
            $sinodal4->tipoSinodal = 'suplente';
            $sinodal4->rpe = $request->s4;  
            $sinodal4->save();
        } 

        return redirect(route('mostrarexprof'));
        //*/
    }

    public function borrarex($id){
        $dato=ExamenProfesional::find($id);
        $dato->delete();

        return back()->with('borrar','ok');
    } 

    public function mostrarcues(){
        $datos = Cuestionario::all();
        return view('Per.DarAltaCuestionario')->with('datos',$datos);
        //return $datos;
    }

    public function setcues(Request $request){
        $request->validate([
            //'email' => ['required','email','string'],
            'titulo' => ['required'],
            'pc1' => ['required'],
            'pc2' => ['required'],
            'pc3' => ['required'],
            'ps1' => ['required'],
            'ps2' => ['required'], 
            'pp1' => ['required'], 
            'pp2' => ['required'],
            'pe1' => ['required'],
            'pe2' => ['required'],
            'pe3' => ['required']
        ]);

        $cues = new Cuestionario;

        $cues->titulo = $request->titulo;
        $cues->pregCarrera1 = $request->pc1;
        $cues->pregCarrera2 = $request->pc2;
        $cues->pregCarrera3 = $request->pc3;
        $cues->pregServicio1 = $request->ps1;
        $cues->pregServicio2 = $request->ps2;
        $cues->pregPracticas1 = $request->pp1;
        $cues->pregPracticas2 = $request->pp2;
        $cues->pregEgel1 = $request->pe1;
        $cues->pregEgel2 = $request->pe2;
        $cues->pregEgel3 = $request->pe3;

        $cues->save();

        return redirect(route('superu'))->with('success','ok');
    }
    public function modifcues(){
        $c = Cuestionario::first();
        return view('Per.ModificarFormatoRetro')->with('c',$c);
    }

    public function actualizarcues(Request $request){
        $request->validate([
            //'email' => ['required','email','string'],
            'titulo' => ['required'],
            'pc1' => ['required'],
            'pc2' => ['required'],
            'pc3' => ['required'],
            'ps1' => ['required'],
            'ps2' => ['required'], 
            'pp1' => ['required'], 
            'pp2' => ['required'],
            'pe1' => ['required'],
            'pe2' => ['required'],
            'pe3' => ['required']
        ]);

        $cues = Cuestionario::first();

        $cues->titulo = $request->titulo;
        $cues->pregCarrera1 = $request->pc1;
        $cues->pregCarrera2 = $request->pc2;
        $cues->pregCarrera3 = $request->pc3;
        $cues->pregServicio1 = $request->ps1;
        $cues->pregServicio2 = $request->ps2;
        $cues->pregPracticas1 = $request->pp1;
        $cues->pregPracticas2 = $request->pp2;
        $cues->pregEgel1 = $request->pe1;
        $cues->pregEgel2 = $request->pe2;
        $cues->pregEgel3 = $request->pe3;

        $cues->save();

        return redirect(route('superu'))->with('actualizado','ok');
    }
}
