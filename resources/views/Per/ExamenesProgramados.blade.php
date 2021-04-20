<!DOCTYPE html>
<html lang="en">
    <head>
        @include('Plantillas.head',['titulo' => 'SREE - Examenes agendados'])
    </head>
    <body>

        @include('Plantillas.header')

       @if(isset($examenes))
        <div class="row mt-5">
            <div class="container">

                <div class="row">

                    <div class="card w-100">
                        {{-- AQUI VAN LOS DATOS --}}

                        @foreach($examenes as $e)
                        <div class="card-body">
                            <div class="row">
                                <!--Los datos a continuación serian los del usuario-->
                                <div class="col-md-3">
                                    <img class="centrador" src="{{ asset('foto.png') }}" height="100px" width="100px" id="foto">{{-- extraer de la api --}}
                                </div>
                                <div class="col-md-6">
                                    <p><strong>Nombre:</strong>{{-- Nombre de el alumno de ese examen --}} 

                                        @foreach($alumnos as $a)
                                            @if($e->claveAlumno==$a->claveAlumno)
                                                {{ $a->nombre }}
                                            @break
                                            @endif
                                        @endforeach
                                    </p>
                                    <p style="font-size: medium;" id="correo"><strong>Fecha de inicio:</strong> 

                                        {{ $e->fechaExamen }} - {{ $e->horaExamen }}

                                    </p>
                                    <p style="font-size: medium;" id="correo"><strong>Fecha limite:</strong>

                                        {{ $e->fechaExamen }} -

                                        {{$e->horaExamen = date('H:i:s', strtotime($e->horaExamen.'+1 hour')) }}


                                    </p>
                                    <p style="font-size: medium;" id="correo"><strong>Sinodales:</strong>


                                        @foreach($sinodales as $s)
                                            @if($e->idExamen==$s->idExamen)
                                                @foreach($usuarios as $u) 
                                                    @if($s->rpe == $u->rpe)
                                                    {{ $u->name }}
                                                    @endif
                                                @endforeach 
                                            @endif
                                        @endforeach


                                    </p>
                                    <p style="font-size: medium;" id="correo"><strong>Recinto:</strong>

                                        {{   $e->recinto  }}

                                    </p>
                                </div>
                                <div class="col-md-3">
                                    {{-- Datos enviados previamento --}}
                                    <div class="row align-items-center h-100">
                                        <div class="col-6">
                                            <a href="{{route('editarexamen',$e->idExamen)}}">
                                                <button class="btn btnFinalizar">
                                                    Editar
                                                </button>
                                            </a>
                                        </div>
                                        <div class="col-6">
                                            <form action="{{route('borrarexamen',$e->idExamen)}}" method="get" class="eliminar">
                                                @csrf
                                                <button  class="btn btnBorrar">
                                                    Cancelar
                                                </button>
                                            </form>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        @endforeach

                        @if(session('borrar'))

                        <script>
                            Swal.fire(
                                'Cancelado!',
                                'Examen cancelado eliminado con exito',
                                'success'
                            )
                                .then((result) => {
                                if (result.isConfirmed) {
                                    //location.reload();
                                    //window.history.back();
                                    location.reload();
                                }
                            })
                            //location.reload();
                        </script>

                        @endif

                        <script>

                            $('.eliminar').submit(function(e){
                                e.preventDefault();

                                Swal.fire({
                                    title: 'Estas seguro de cancelar este examen?',
                                    text: "Esta accion no se puede revertir",
                                    icon: 'Alerta',
                                    showCancelButton: true,
                                    confirmButtonColor: '#3085d6',
                                    cancelButtonColor: '#d33',
                                    confirmButtonText: 'Si, cancelar examen!',
                                    cancelButtonText: 'Cancelar'
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        this.submit();
                                    }
                                })

                            });

                            ///*
                            //*/

                        </script>
                    </div>{{-- aa --}}

                </div>
            </div>
        </div>
        
        @elseif(!isset($examenes))
           
            <div class="container mt-5">
                <div class="card">
                    <div class="card-body text-center align-items-center justify-content-center">
                        No existen examenes programados
                        <br>
                        Si deseas programar un examen da click aqui abajo <br>
                        <a href="{{ route('agendarexprof') }}">Programar examen</a>
                    </div>
                </div>
            </div>
        @endif

        <div class="row justify-content-center mt-5">
            <a href="{{ route(('superu')) }}" class="btn btnFinalizar">Regresar</a>
        </div>

        @include('Plantillas.footer')
    </body>
</html>