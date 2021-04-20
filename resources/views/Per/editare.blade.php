<!DOCTYPE html>
<html lang="en">
    <head>
        @include('Plantillas.head',['titulo' => 'SREE - Editar examen'])
    </head>
    <body>

        @include('Plantillas.header')

        @include('Plantillas.inputsinflechas')

        <div class="container mt-5">

            <h5 class="titles">Editar Usuario</h5>

            <form action="{{route('guardarexamen')}}" method="post">
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

                            <input type="hidden" value="{{ $e->idExamen }}" name="id">

                            <div class="col-md-9">
                                <p><strong>Nombre de sustentante: </strong> 
                                    {{ $a->nombre }}
                                </p>

                                <p><strong>Fecha:</strong>
                                    <input type="date" value="{{$e->fechaExamen}}" name="fecha">
                                </p> 

                                <p><strong>Hora:</strong>
                                    <input type="time" value="{{ $e->horaExamen }}" name="hora">
                                </p>      

                                <p style="font-size: medium;">
                                    <strong>Sinodal 1: </strong>

                                    <select class="answer w-100" name="s1">
                                        <option value="-">-</option>
                                        @foreach($us as $u)
                                            <option value="{{ $u->rpe }}"> 
                                                {{ $u->name }}
                                            </option> 
                                            <!--Aqui van los nombres de los sinodales,extraidos de la BD-->
                                        @endforeach
                                    </select>

                                </p>

                                <p>
                                    <strong>Sinodal 2: </strong>
                                    <select class="answer w-100" name="s2">
                                        <option value="-">-</option>
                                        @foreach($us as $u)
                                            <option value="{{ $u->rpe }}"> 
                                                {{ $u->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </p>

                                <p>
                                    <strong>Sinodal 3: </strong>
                                    <select class="answer w-100" name="s3">
                                        <option value="-">-</option>
                                        @foreach($us as $u)
                                        <option value="{{ $u->rpe }}"> 


                                            {{ $u->name }}

                                        </option> <!--Aqui van los nombres de los sinodales, posiblemente extraidos de la BD-->
                                        @endforeach
                                    </select>
                                </p>

                                <p>
                                    <strong>Sinodal 4: </strong>
                                    <select class="answer w-100" name="s4">
                                        <option value="-">-</option>
                                        @foreach($us as $u)
                                        <option value="{{ $u->rpe }}"> 


                                            {{ $u->name }}

                                        </option> <!--Aqui van los nombres de los sinodales, posiblemente extraidos de la BD-->
                                        @endforeach
                                    </select>
                                </p>
                                <p>
                                    <strong>Recinto: </strong>
                                    <input type="text" value="{{ $e->recinto }}" name="recinto">
                                </p>
                            </div>
                        </div>
                        <div class="row justify-content-center mt-5">
                            <div class="col-md-4" style="margin-top: 5%">
                                <a class="btnFinalizar btn" href="{{route('mostrarexprof')}}">
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

