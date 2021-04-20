<!DOCTYPE html>
<html lang="en">
    <head>
        @include('Plantillas.head',['titulo' => 'SREE - Agregar usuario'])

        @include('Plantillas.inputsinflechas')
    </head>
    <body>

        @include('Plantillas.header')

        <div class="container mt-5">   
            <form action="{{ route('buscaru') }}" method="post">
                @csrf 

                <h5 class="titles">Agregar un Nuevo Usuario</h5>

                <div class="row mt-5">
                    <div class="col-md-3">
                        <p class="text"><strong>RPE: </strong></p>
                    </div>
                    <div class="col-md-9">
                        <input class="answer w-100" type="number" name="rpe" id="search">
                    </div>
                </div>

                {{-- 4 test --}}

                <div class="row mt-5">
                    <div class="col-md-3">
                        <p class="text"><strong>Rol: </strong></p>
                    </div>
                    <div class="col-md-2">
                        <input type="radio" name="rol" value="capturista"> Capturista
                    </div>
                    <div class="col-md-2">
                        <input type="radio" name="rol" value="sinodal"> Sinodal
                    </div>
                    <div class="col-md-2">
                        <input type="radio" name="rol" value="jefearea"> Jefe de Area
                    </div>
                    <div class="col-md-2">
                        <input type="radio" name="rol" value="coordinador"> Coordinador
                    </div>
                </div>
                <div class="row mt-5 justify-content-center">
                    <div class="col-2">
                        <input class="btn btnFinalizar" type="submit" value="Buscar"
                            @if(isset($autorizar))
                                disabled
                            @endif
                        >
                    </div>
                </div>

            </form>
            
            @if(isset($autorizar))
                    <script>
                        Swal.fire({
                            icon: 'success',
                            title: 'Usuario encontrado',
                            showConfirmButton: false,
                            timer: 1000
                        })
                    </script>
            @endif
           
            @if($errors->any())
                <script>
                    Swal.fire({
                        icon: 'error',
                        title: '¡Informacion incompleta!',
                        text: 'Todos los campos deben estar llenos',
                    })
                        .then((result) => {
                        if (result.isConfirmed) {
                            //location.reload();
                            @php
                            Session::forget('noencontrado');
                            @endphp
                            //window.history.back();
                            location.reload();
                        }
                    })
                </script>
            @endif
        </div>

        <div class="container mt-5">
            <div class="card" style="border-color: rgba(0, 0, 0, 0.39);">
                <div class="card-body">
                    <div class="row">
                        <!--Los datos a continuación serian los del usuario-->
                        <div class="col-md-3">
                            <img class="centrador"
                                @if(isset($datos))
                                    src="{{ asset('foto.png') }}" 
                                @else
                                    src="{{ asset('perfil.jpg') }}"
                                @endif
                            height="100px" width="100px" id="foto">
                        </div>
                        <div class="col-md-6">
                            <p>Nombre: 

                                @if(isset($datos))
                                    {{ $datos->nombre }}
                                @endif

                            </p>
                            <p style="font-size: medium;" id="correo">Correo electronico:

                                @if(isset($datos))
                                    {{ $datos->correo }}
                                @endif  

                            </p>
                            <p style="font-size: medium;" id="correo">Area: 

                                @if(isset($datos))
                                    {{ $datos->area }}
                                @endif 

                            </p>
                        </div>
                        <div class="col-md-3">

                            {{-- Datos enviados previamento --}}

                            <form action="{{ route('rusuario') }}" method="post">
                                @csrf 

                                @if(isset($datos))

                                    <input type="hidden" type="number" name="rpe" value="{{$datos->rpe}}">
                                    <input type="hidden" name="rol" value="{{$rol}}">
                                    <input type="hidden" name="nombre" value="{{$datos->nombre}}"> 
                                    <input type="hidden" name="correo" value="{{$datos->correo}}">
                                    <input type="hidden" name="area" value="{{$datos->area}}">    

                                @endif            
                                <div class="row mt-5 justify-content-center">

                                    <input class="btn btnFinalizar" type="submit" value="Finalizar"
                                        @if(!isset($autorizar))
                                           disabled
                                        @endif
                                    >
                                </div>
                            </form> 
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mt-3">
            <div class="row mt-5 justify-content-center">
                <a href="{{ route(('superu')) }}" class="btn btnFinalizar">Regresar</a>
            </div>
        </div>

        @include('Plantillas.footer')

        <script>
            @if(session('noencontrado'))
            Swal.fire({
                icon: 'error',
                title: 'Usuario no encontrado',
                text: 'Verificar rpe',
            })
                .then((result) => {
                if (result.isConfirmed) {
                    //location.reload();
                    @php
                    Session::forget('noencontrado');
                    @endphp
                    //window.history.back();
                    location.reload();
                }
            })

            @endif
        </script>

    </body>
