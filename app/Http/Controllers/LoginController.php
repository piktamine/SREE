<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class LoginController extends Controller
{

    public function login(){
        if(!Auth::guest() && Auth::user()->roles==true){//si no es un invitado y tiene roles
            $prol = Auth::user()->roles->pluck('name');
            $rol = $prol[0];

            return redirect($rol);
        }else if (!Auth::guest() && Auth::user()->roles==false){//si incio usuario sin rol asignado
            //Esta funcion cierra sesion del usuario y lo redirige a login
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();

            return redirect('/login');
        }

        return view('login');
        //return $rol;

    }
    //
    public function validarlogin(Request $request){
        $credenciales = request()->only('rpe','password');//esto no devuelve un objeto sino un array


        $credenciales = $request->validate([
            //'email' => ['required','email','string'],
            'rpe' => ['required','integer',],
            'password' => ['required','string']
        ]);

        $remember = $request->filled('remember');//Obtiene el valor booleano de el checkbox con el nombre remember

        if(Auth::attempt($credenciales,$remember)){
            request()->session()->regenerate();//crea nueva sesion para evitar secuestro de sesiones

            //obtener rol
            $prol = Auth::user()->roles->pluck('name');
            $rol = $prol[0];

            return redirect($rol);
        }else{
            return redirect('/login')->with('error','Datos incorrectos');
        }



        //return $credenciales;
        //return 'chingas a tu madre';
        return redirect('/login');
    }

    public function cerrarsesion(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        //return $credenciales;
        //return 'chingas a tu madre';
        return redirect('/login');
    }
    public function home(){
        if(!Auth::guest() && Auth::user()->roles==true){//si incio usuario con rol

            $prol = Auth::user()->roles->pluck('name');//obtiene arreglo con el rol
            $rol = $prol[0];//arreglo a string

            return redirect($rol);
        }else if (!Auth::guest() && Auth::user()->roles==false){//si incio usuario sin rol asignado
            //Esta funcion cierra sesion del usuario y lo redirige a login
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();

            return redirect('/login');
        }

        return redirect('/login');
    }

    public function invitado(){
        if(!Auth::guest() && Auth::user()->roles==true){//si incio usuario con rol

            $prol = Auth::user()->roles->pluck('name');//obtiene arreglo con el rol
            $rol = $prol[0];//arreglo a string

            return redirect($rol);
        }else if (!Auth::guest() && Auth::user()->roles==false){//si incio usuario sin rol asignado
            //Esta funcion cierra sesion del usuario y lo redirige a login
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();

            return redirect('/login');
        }

        return redirect('/login');
    }
}
