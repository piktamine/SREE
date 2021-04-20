<!DOCTYPE html>
<html lang="en">
    <head>
        @include('Plantillas.head',['titulo' => 'SREE - Capturar resultados'])
    </head>
    <body>

        @include('Plantillas.header')
        @include('Plantillas.inputsinflechas')

        <div class="row m-0 p-0">
            <div class="container mt-5 ">
                <div class="row justify-content-center mb-5">
                    <p class="textoSeccion"><strong>Captura resultados EGEL</strong></p>
                </div>
                <form action="{{ route('capturasubmit') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-3">
                            <strong>Clave del alumno: </strong>
                        </div>
                        <div class="col-md-9">
                            <input class="w-100" type="number" name="nombre">
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
        @include('Plantillas.footer')
    </body>
</html>