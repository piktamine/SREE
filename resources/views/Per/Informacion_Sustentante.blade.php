<!DOCTYPE html>
<html lang="en">
    <head>
        @include('Plantillas.head',['titulo' => 'SREE - Informacion sustentante'])
    </head>
    <body>

        @include('Plantillas.header')

        <div class="row m-0 p-0 mt-3">
            <!--A continuación se muestran los datos del alumno extraidos de la BD-->
            <div class="col-md-6 align-items-center justify-content-center">
                <img src="{{ asset('perfil.jpg') }}" class="centrador" alt="..." width="200">
            </div>
            <div class="col-md-6 align-items-center justify-content-center">
                <div>
                    <h5>Datos del alumno</h5>
                </div>
                <div>
                    <p class="m-0" id="nombre"><strong>Nombre: </strong> {{$al->nombre}}</p>
                    <p class="m-0" id="carrera"><strong>Carrera: </strong>{{$al->carrera}} </p>
                    <p class="m-0" id="generacion"><strong>Generación: </strong>{{$al->generacion}} </p>
                    <p class="m-0 text-capitalize" id="estado"><strong>Estado: </strong>{{$al->estado}} </p>
                    <p class="m-0" id="promedio"><strong>Promedio: </strong>{{$al->prom_gral}} </p>
                    <p class="m-0" id="semestre"><strong>Semestre: </strong>{{$al->sem_cursados}} </p>
                </div>
            </div>
        </div>
        
        <hr class="w-75">
        
        <h5 class="mt-4" style="text-align: center;">Kardex</h5>
        <center>
            <table width="70%" border="3" style="text-align: center;">
                <thead>
                    <tr>
                        <th>Materia</th>
                        <th>Calificación</th>
                        <th>EX</th>
                        <th>SEM</th>
                        <th>Observaciones</th>
                    </tr>
                </thead>
                <tbody>
                    <!--Aqui se van a ir agregando los datos del kardex como se hayan extraido de la BD-->

                    @foreach($kardex as $k)
                        <tr>
                            <td>{{ $k->Nombre_materia }}</td>
                            <td>{{ $k->calif }}</td>
                            <td>{{ $k->tipo_examen }}</td>
                            <td>{{ $k->semestre }}</td>
                            <td>{{ $k->observacion }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </center>
        <hr class="w-75">


        <div class="container mt-5">
            <h5 class="mb-5">Cuestionario de retroalimentación</h5>
            <div class="card" style="border-color: rgba(0, 0, 0, 0.39);">
                <div class="card-body">
                    <div class="row">
                        <div class="col-9">
                            <h5>Sección carrera</h5>
                            <p style="font-size: medium;" id="Scarrera">
                                <strong>Estado: </strong>
                                @if($r->resCarrera1==null){{-- para verificar seccion Carrera --}}
                                    Sin contestar
                                @else    
                                    Contestado
                                @endif
                            </p> <!--Tanto en esta sección cómo en la siguiente se tendria que señalar si los respectivos cuestionarios ya fueron contestados o no-->
                        </div>
                        <div class="col-3">
                            <div class="row mt-3">
                                <a href="
                                         @role('sinodal')
                                         {{route('seccar',$al)}}
                                         @endrole
                                         @role('coordinador')
                                         {{route('seccarc',$al)}}
                                         @endrole
                                         @role('jefearea')
                                         {{route('seccarj',$al)}}
                                         @endrole
                                         " class="btn btnFinalizar">
                                    @if($r->resCarrera1==null){{-- para verificar seccion PP --}}
                                        Iniciar
                                    @else    
                                        Editar
                                    @endif
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-3">
            <div class="card" style="border-color: rgba(0, 0, 0, 0.39);">
                <div class="card-body">
                    <div class="row">
                        <div class="col-9">
                            <h5>Sección Practicas Profesionales</h5>
                            <p style="font-size: medium;" id="Spracticas">
                                <strong>Estado: </strong> 
                                @if($r->resServicio1==null){{-- para verificar seccion PP --}}
                                    Sin contestar
                                @else    
                                    Contestado
                                @endif
                            </p>
                        </div>
                        <div class="col-3">
                            <div class="row mt-3">
                                <a href="
                                         @role('sinodal')
                                             {{route('secpp',$al)}}
                                         @endrole
                                         @role('coordinador')
                                             {{route('secppc',$al)}}
                                         @endrole
                                         @role('jefearea')
                                             {{route('secppj',$al)}}
                                         @endrole
                                         " class="btn btnFinalizar">
                                    @if($r->resServicio1==null){{-- para verificar seccion PP --}}
                                        Iniciar
                                    @else    
                                        Editar
                                    @endif
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-3">
            <div class="card" style="border-color: rgba(0, 0, 0, 0.39);">
                <div class="card-body">
                    <div class="row">
                        <div class="col-9">
                            <h5>Sección EGEL</h5>
                            <p style="font-size: medium;" id="Scarrera">
                                <strong>Estado: </strong>
                                @if($r->resArea1==null){{-- para verificar seccion Egel --}}
                                    Sin contestar
                                @else    
                                    Contestado
                                @endif
                            </p> <!--Tanto en esta sección cómo en la siguiente se tendria que señalar si los respectivos cuestionarios ya fueron contestados o no-->
                        </div>
                        <div class="col-3">
                            <div class="row mt-3">
                                <a href="
                                         @role('sinodal')
                                             {{route('secegel',$al)}}
                                         @endrole
                                         @role('coordinador')
                                             {{route('secegelc',$al)}}
                                         @endrole
                                         @role('jefearea')
                                             {{route('secegelj',$al)}}
                                         @endrole
                                         " class="btn btnFinalizar">
                                    @if($r->resArea1==null){{-- para verificar seccion Egel --}}
                                        Iniciar
                                    @else    
                                        Editar
                                    @endif
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="row p-0 m-0 justify-content-center mt-5 mb-5">
            @if($r->resCarrera1==null || $r->resServicio1==null || $r->resArea1==null)
                <a href="#">
                    <button type="submit" class="btn btnBorrar mb-3">
                        Retroalimentacion incompleta</button>
                </a>
            @else
                <a href="
                         @role('sinodal')
                         {{route('verifretro',$al)}}
                         @endrole
                         @role('coordinador')
                         {{route('verifretroc',$al)}}
                         @endrole
                         @role('jefearea')
                         {{route('verifretroj',$al)}}
                         @endrole
                         ">
                    <button type="submit" class="btn btnFinalizar mb-3">
                        Finalizar retroalimentación            
                    </button>
                </a>
            @endif
        </div>
        @include('Plantillas.footer')
    </body>