<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CapturistaController extends Controller
{
    public function capturar(){
        return view('Per.CapturaResultados');
    }

    public function storecapturar(Request $request){//capturista
        //
        $request->validate([
            //'email' => ['required','email','string'],
            'nombre' => ['required','integer'],
            'p1' => ['required'],
            'p2' => ['required'],
            'p3' => ['required'],
            'p4' => ['required'],
            'p5' => ['required'], 
            'resn1' => ['required'], 
            'resn2' => ['required'],
            'resn3' => ['required'],
            'resn4' => ['required'],
            'resn5' => ['required'],
            'testim' => ['required'],
        ]);

        //return "Hola";

        $datosdelform = $request;

        $al = Alumno::find($request->nombre); //el nombre del form es la clave unica
        if(!empty($al)){
            //si existe

            $datos = new EGEL;

            $datos->claveAlumno = $datosdelform->nombre;
            $datos->punArea1 = $datosdelform->p1;
            $datos->punArea2 = $datosdelform->p2;
            $datos->punArea3 = $datosdelform->p3;
            $datos->punArea4 = $datosdelform->p4;
            $datos->punArea5 = $datosdelform->p5;
            $datos->nivelArea1 = $datosdelform->resn1;
            $datos->nivelArea2 = $datosdelform->resn2;
            $datos->nivelArea3 = $datosdelform->resn3;
            $datos->nivelArea4 = $datosdelform->resn4;
            $datos->nivelArea5 = $datosdelform->resn5;
            $datos->testimonio = $datosdelform->testim;

            try{
                $datos->save();
            }catch(\Exception $e){
                return back()
                    ->with('erroralguardar','Alumno ya registrado');
            }
        }else{
            return redirect()->back()
                ->with('erroralumno','El alumno no existe');
        }

        return redirect(route('capturista'));

        //return $datosdelform;
    }
}
