<!DOCTYPE html>
<html lang="en">
    <head>
        @include('Plantillas.head',['titulo' => 'SREE - Capturar resultados'])
    </head>
    <body>

        @include('Plantillas.header')
        @include('Plantillas.inputsinflechas')

        <div class="row justify-content-center mt-5">
            <h3>Captura resultados EGEL</h3>
        </div>

        @if($hayalumno)
        <div class="row m-0 p-0">
            <div class="container mt-5 ">
                <form action="{{ route('capturasubmit') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-3">
                            <strong>Clave del alumno: </strong>
                        </div>

                        <div class="col-md-9">
                            <div class="input-group mb-3">
                                <input class="w-75" value="{{$alumno->claveAlumno ?? ''}}" type="number" name="nombremuestra" disabled>
                                <input type="hidden" value="{{$alumno->claveAlumno ?? ''}}" name="nombre">
                                <a class="input-group-append w-25 text-decoration-none d-flex justify-content-end" 
                                   href="{{route('capturar')}}">
                                    <button type="button" class="btn btnFinalizar m-0"> <small><b>Reiniciar busqueda</b></small>
                                    </button>
                                </a>
                            </div>
                        </div>

                    </div>
                    <div class="row mt-3">
                        <div class="col-md-3">
                            <strong>Nombre del alumno: </strong>
                        </div>
                        <div class="col-md-9">
                            <input class="w-100" value="{{$alumno->nombre ?? ''}}" name="nombremuestra" disabled>
                        </div>
                    </div>
                    <hr>

                    <div class="row text-center justify-content-center mt-4">
                        <p class="textoSeccion">Selección de sistemas computacionales para aplicaciones específicas</p>
                    </div>


                    <div class="row mt-3">
                        <div class="col-md-1 text-center">
                            Nivel: 
                        </div>
                        <div class="col-md-8">
                            <div class="row justify-content-center">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="resn1" id="sec1Radio1" value="ANS">
                                    <label class="form-check-label" for="sec1Radio1">Aún No Satisfecho (ANS)</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="resn1" id="sec1Radio2" value="DS">
                                    <label class="form-check-label" for="sec1Radio2">Satisfactorio (DS)</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="resn1" id="sec1Radio3" value="DSS">
                                    <label class="form-check-label" for="sec1Radio3">Sobresaliente (DSS)</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-1">
                            Puntaje:
                        </div>
                        <div class="col-md-2">
                            <input type="number" class="form-control selPuntaje" id="puntajeSec1" placeholder="1234" name="p1">
                        </div>
                    </div>
                    <hr>
                    <div class="row text-center justify-content-center mt-3">
                        <p class="textoSeccion">Nuevas tecnologías para la implementación de sistemas de cómputo</p>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-1 text-center">
                            Nivel: 
                        </div>
                        <div class="col-md-8">
                            <div class="row justify-content-center">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="resn2" id="sec2Radio1" value="ANS">
                                    <label class="form-check-label" for="sec2Radio1">Aún No Satisfecho (ANS)</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="resn2" id="sec2Radio2" value="DS">
                                    <label class="form-check-label" for="sec2Radio2">Satisfactorio (DS)</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="resn2" id="sec2Radio3" value="DSS">
                                    <label class="form-check-label" for="sec2Radio3">Sobresaliente (DSS)</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-1">
                            Puntaje:
                        </div>
                        <div class="col-md-2">
                            <input type="number" class="form-control selPuntaje" id="puntajeSec2" placeholder="1234" name="p2">
                        </div>
                    </div>
                    <hr>
                    <div class="row text-center justify-content-center mt-3">
                        <p class="textoSeccion">Desarrollo de hardware y su software asociado para aplicaciones específicas</p>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-1 text-center">
                            Nivel: 
                        </div>
                        <div class="col-md-8">
                            <div class="row justify-content-center">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="resn3" id="sec3Radio1" value="ANS">
                                    <label class="form-check-label" for="sec3Radio1">Aún No Satisfecho (ANS)</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="resn3" id="sec3Radio2" value="DS">
                                    <label class="form-check-label" for="sec3Radio2">Satisfactorio (DS)</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="resn3" id="sec3Radio3" value="DSS">
                                    <label class="form-check-label" for="sec3Radio3">Sobresaliente (DSS)</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-1">
                            Puntaje:
                        </div>
                        <div class="col-md-2">
                            <input type="number" class="form-control selPuntaje" id="puntajeSec3" placeholder="1234" name="p3">
                        </div>
                    </div>
                    <hr>
                    <div class="row text-center justify-content-center mt-3">
                        <p class="textoSeccion">Adaptación de harware o software para aplicaciones específicas</p>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-1 text-center">
                            Nivel: 
                        </div>
                        <div class="col-md-8">
                            <div class="row justify-content-center">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="resn4" id="sec4Radio1" value="ANS">
                                    <label class="form-check-label" for="sec4Radio1">Aún No Satisfecho (ANS)</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="resn4" id="sec4Radio2" value="DS">
                                    <label class="form-check-label" for="sec4Radio2">Satisfactorio (DS)</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="resn4" id="sec4Radio3" value="DSS">
                                    <label class="form-check-label" for="sec4Radio3">Sobresaliente (DSS)</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-1">
                            Puntaje:
                        </div>
                        <div class="col-md-2">
                            <input type="number" class="form-control selPuntaje" id="puntajeSec4" placeholder="1234" name="p4">
                        </div>
                    </div>

                    <hr>
                    <div class="row text-center justify-content-center mt-3">
                        <p class="textoSeccion">Redes de computo para necesidades especificas</p>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-1 text-center">
                            Nivel: 
                        </div>
                        <div class="col-md-8">
                            <div class="row justify-content-center">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="resn5" id="sec4Radio1" value="ANS">
                                    <label class="form-check-label" for="sec4Radio1">Aún No Satisfecho (ANS)</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="resn5" id="sec4Radio2" value="DS">
                                    <label class="form-check-label" for="sec4Radio2">Satisfactorio (DS)</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="resn5" id="sec4Radio3" value="DSS">
                                    <label class="form-check-label" for="sec4Radio3">Sobresaliente (DSS)</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-1">
                            Puntaje:
                        </div>
                        <div class="col-md-2">
                            <input type="number" class="form-control selPuntaje" id="puntajeSec4" placeholder="1234" name="p5">
                        </div>
                    </div>

                    <hr>

                    <div class="row justify-content-center">
                        <p class="textoSeccion">Testimonio de desempeño</p>
                    </div>
                    <div class="row justify-content-center">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input5" type="radio" name="testim" id="desempenioRadio1" value="ANS">
                            <label class="form-check-label" for="desempenioRadio1">Aún No Satisfecho (ANS)</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input5" type="radio" name="testim" id="desempenioRadio2" value="DS">
                            <label class="form-check-label" for="desempenioRadio2">Satisfactorio (DS)</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input5" type="radio" name="testim" id="desempenioRadio3" value="DSS">
                            <label class="form-check-label" for="desempenioRadio3">Sobresaliente (DSS)</label>
                        </div>
                    </div>

                    @if($errors->any())
                    <ul class="text-danger">
                        Todos los campos deben estar llenos 
                    </ul>
                    @endif

                    @if(session('erroralguardar'))
                    <ul class="text-danger">
                        {{session('erroralguardar')}}
                    </ul>
                    @endif

                    @if(session('erroralumno'))
                    <ul class="text-danger">
                        {{session('erroralumno')}}
                    </ul>
                    @endif

                    <div class="row justify-content-center mt-5">
                        <button type="submit" class="btn btnFinalizar mb-3">Finalizar</button>
                    </div>

                </form>

            </div>
        </div>
        @else
        <div class="text-center pt-5">
            <form action="{{route('cap_buscaru')}}" method="get">
                @csrf
                <p>Ingrese la clave del alumno para comenzar</p>
                <input class="answer w-50" type="text" name="clave"><br>
                <button class="btn btnFinalizar mt-5" type="submit">Buscar Usuario</button>
            </form>
            <div class="row justify-content-center mt-5 mb-2">
                <div class="col-md-12 text-center align-items-center justify-content-center mb-3">
                    <a href="{{ route(('capturista')) }}" class="btn btnFinalizar">Regresar</a>
                </div>
            </div>
        </div>
        @endif

        @if(session('success')){{-- --}}
        <script>
            Swal.fire({
                icon: 'success',
                title: '{{session('success')}}',
                showConfirmButton: false,
                timer: 2000
            }).then((result) => {
                /* Esto checa que haya finalizado el timer*/
                if (result.dismiss === Swal.DismissReason.timer) {
                    //console.log('I was closed by the timer')
                    location.reload();
                }
            })

        </script>
        @endif

        @include('Plantillas.footer')
    </body>
</html>