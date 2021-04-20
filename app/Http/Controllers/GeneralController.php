<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

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
}
