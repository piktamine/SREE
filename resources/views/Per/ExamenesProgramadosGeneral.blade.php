<!DOCTYPE html>
<html lang="en">
    <head>
        @include('Plantillas.head',['titulo' => 'SREE - Examenes agendados'])
    </head>
    <body>

        @include('Plantillas.header')

        <div class="row m-0 p-0 mt-5">
            <div class="container">
                
                <h3 class="titles mt-3">Tus examenes programados</h3>
                <hr>

                @php
                    $prol = Auth::user()->roles->pluck('name');//obtiene arreglo con el rol
                    $rol = $prol[0];//arreglo a string
                @endphp

                @if($rol=='sinodal' || $rol=='jefearea' || $rol=='coordinador')

                    <div class="row mt-5">
                        
                        @if(!empty($sinodales) || !empty($examenes))

                        @foreach($sinodales as $s)
                            @foreach($examenes as $e)
                                @if($e->idExamen == $s->idExamen && !$e->realizoCuestionario) 
                                    @foreach($alumnos as $a)
                                        @if($e->claveAlumno==$a->claveAlumno)
                                            @php
                                                $alum = $a;
                                            @endphp
                                            @break
                                        @endif
                                    @endforeach   

                                    <div class="card w-100 mt-5">        
                                        <div class="card-body">
                                            <div class="row">

                                                <!--Los datos a continuación serian los del usuario-->
                                                <div class="col-md-6">
                                                    <p><strong>Nombre:</strong><!-- Nombre de el alumno de ese examen --> 
                                                        {{ $alum->nombre }}
                                                    </p>

                                                    <p style="font-size: medium;" id="correo"><strong>Carrera:</strong>
                                                        {{ $alum->carrera }}

                                                    </p>

                                                    <p style="font-size: medium;" id="correo">

                                                        <strong>Fecha de inicio:</strong> 

                                                        {{ $e->fechaExamen }} - {{ $e->horaExamen }}
                                                    </p>

                                                    <p style="font-size: medium;" id="correo"><strong>Fecha limite:</strong>

                                                        {{ $e->fechaExamen }} -

                                                        {{$e->horaExamen = date('H:i:s', strtotime($e->horaExamen.'+1 hour')) }}


                                                    </p>

                                                </div>
                                                <div class="col-md-6 d-flex justify-content-center">
                                                    <!-- Datos enviados previamento -->
                                                    <div class="row align-items-center h-100">
                                                        <div class="col-6">
                                                            <a href="
                                                                     @role('sinodal')
                                                                         {{route('retro',$alum)}}
                                                                     @endrole
                                                                     @role('coordinador')
                                                                         {{route('retroc',$alum)}}
                                                                     @endrole
                                                                     @role('jefearea')
                                                                         {{route('retroj',$alum)}}
                                                                     @endrole
                                                                     ">
                                                                <button class="btn btnFinalizar">
                                                                    Iniciar con la retroalimentación
                                                                </button>
                                                            </a>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>         

                        </div>
                        @endif                                                                                   

                                @endforeach                                                
                            @endforeach
                            
                            @else
                                <div class="row mx-auto">No Existen cuestionarios por validar</div>
                            @endif
                    @endif

                </div>
            </div>
        </div>

        <div class="row m-0 p-0 text-center align-items-center justify-content-center mt-5">
            <a href="
                @role('sinodal')
                    {{route('sinodal')}}
                @endrole
                @role('coordinador')
                    {{route('coordinador')}}
                @endrole
                @role('jefearea')
                    {{route('jefearea')}}
                @endrole
                ">
                    <button class="btn btnFinalizar">
                        Regresar
                    </button>
            </a>
        </div>

        @include('Plantillas.footer')
    </body>
</html>