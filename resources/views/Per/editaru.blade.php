<!DOCTYPE html>
<html lang="en">
    <head>
        @include('Plantillas.head',['titulo' => 'SREE - Editar usuario'])
    </head>
    <body>

        @include('Plantillas.header')

        @include('Plantillas.inputsinflechas')

        <div class="container mt-5">

            <h5 class="titles">Editar Usuario</h5>

            <form action="{{route('guardaru')}}" method="post">
                @csrf

                <div class="card mt-5" style="border-color: rgba(0, 0, 0, 0.39);">
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <h4>Datos del usuario</h4>
                        </div>
                        <div class="row mt-4">
                            <!--Los datos a continuación serian los del usuario-->
                            <div class="col-md-3">
                                <img class="centrador" src="{{ asset('foto.png') }}" height="100px" width="100px" id="foto">
                            </div>

                            <input type="hidden" name="id" value="{{$usr->id}}">

                            <div class="col-md-9">
                                <p><strong>Nombre: </strong> 
                                    {{ $usr->name }}
                                </p>

                                <p><strong>RPE:</strong>
                                    {{ $usr->rpe }} 
                                </p>   

                                <p style="font-size: medium;" id="correo"><strong>Correo electronico: </strong>
                                    {{ $usr->email }}
                                </p>

                                <p><strong>Rol actual: </strong>

                                    @switch($usr->getRoleNames())

                                        @case('["superu"]')
                                            Super usuario
                                        @break

                                        @case('["capturista"]')
                                            Capturista
                                        @break 

                                        @case('["jefearea"]')
                                            Jefe de Área
                                        @break

                                        @case('["coordinador"]')
                                            Coordinador de carrera
                                        @break

                                        @case('["sinodal"]')
                                            Sinodal
                                        @break                                                                                 
                                        @default
                                            Sin rol
                                    @endswitch

                                </p>
                            </div>
                        </div>
                        <div class="row mt-4 justify-content-center">
                            <h4>Asignar nuevo rol como:</h4>
                        </div>

                        <div class="row mt-4 justify-content-center">
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
                        <div class="row justify-content-center mt-5">
                            <div class="col-md-4" style="margin-top: 5%">
                                <a class="btnFinalizar btn" href="{{route('mostrarus')}}">
                                    Regresar
                                </a>
                            </div>
                            <div class="col-md-4" style="margin-top: 5%">
                                <input class="btnFinalizar btn" type="submit" value="Guardar edición">
                            </div>
                        </div>

                    </div>
                </div>

            </form>
        </div>

        @include('Plantillas.footer')
    </body>

