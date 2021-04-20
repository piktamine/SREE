<!DOCTYPE html>
<html lang="en">
    <head>
        @include('Plantillas.head',['titulo' => 'SREE - Modificar formato retroalimentacion'])
    </head>
    <body>
        @include('Plantillas.header')

        <div class="row m-0 p-0">
            <div class="container mt-5 ">
                <div class="row justify-content-center">
                    <p class="texto"><strong>Modificar Formato de Retrolimentación</strong></p>
                </div>
                <form action="{{ route('actcues') }}" method="post">
                    @csrf
                    <div class="row mt-3">
                        <p class="textoSeccion">Titulo</p>
                    </div>
                    <div class="row mt-3">
                        <input type="text" class="form-control" id="FormControlInput1" placeholder="Cuestionario de Retrolimentación"
                               name="titulo" value="{{ $c->titulo }}">
                    </div>
                    <hr>
                    <div class="row mt-3">
                        <p class="textoSeccion">Pregunta de carrera 1</p>
                    </div>
                    <div class="row mt-3">
                        <input type="text" class="form-control" id="FormControlInput2" placeholder="¿Cuáles son los tres profesores que le impactaron en su carrera?"
                               name="pc1" value="{{ $c->pregCarrera1 }}">
                    </div>
                    <hr>
                    <div class="row mt-3">
                        <p class="textoSeccion">Pregunta de carrera 2</p>
                    </div>
                    <div class="row mt-3">
                        <input type="text" class="form-control" id="FormControlInput3" placeholder="Materias que quitarias de la carrera"
                               name="pc2" value="{{ $c->pregCarrera2 }}">
                    </div>
                    <hr>
                    <div class="row mt-3">
                        <p class="textoSeccion">Pregunta de carrera 3</p>
                    </div>
                    <div class="row mt-3">
                        <input type="text" class="form-control" id="FormControlInput4" placeholder="Materias que se pueden mejorar de la carrera"
                               name="pc3" value="{{ $c->pregCarrera3 }}">
                    </div>
                    <hr>
                    <div class="row mt-3">
                        <p class="textoSeccion">Pregunta de Servicio 1</p>
                    </div>
                    <div class="row mt-3">
                        <input type="text" class="form-control" id="FormControlInput5" placeholder="Lugar de servicio social"
                               name="ps1" value="{{ $c->pregServicio1 }}">
                    </div>
                    <hr>
                    <div class="row mt-3">
                        <p class="textoSeccion">Pregunta de Servicio 2</p>
                    </div>
                    <div class="row mt-3">
                        <input type="text" class="form-control" id="FormControlInput5" placeholder="Función dentro de la empresa (ss)"
                               name="ps2" value="{{ $c->pregServicio2 }}">
                    </div>
                    <hr>
                    <div class="row mt-3">
                        <p class="textoSeccion">Pregunta de Practicas 1</p>
                    </div>
                    <div class="row mt-3">
                        <input type="text" class="form-control" id="FormControlInput5" placeholder="Lugar de practicas"
                               name="pp1" value="{{ $c->pregPracticas1 }}">
                    </div>
                    <hr>
                    <div class="row mt-3">
                        <p class="textoSeccion">Pregunta de Practicas 2</p>
                    </div>
                    <div class="row mt-3">
                        <input type="text" class="form-control" id="FormControlInput5" placeholder="Función dentro de la empresa (practicas)"
                               name="pp2" value="{{ $c->pregPracticas2 }}">
                    </div>
                    <hr>
                    <div class="row mt-3">
                        <p class="textoSeccion">Pregunta de EGEL 1</p>
                    </div>
                    <div class="row mt-3">
                        <input type="text" class="form-control" id="FormControlInput5" placeholder="Comentarios del estudiante"
                               name="pe1" value="{{ $c->pregEgel1 }}">
                    </div>
                    <hr><div class="row mt-3">
                    <p class="textoSeccion">Pregunta de EGEL 2</p>
                    </div>
                    <div class="row mt-3">
                        <input type="text" class="form-control" id="FormControlInput5" placeholder="Mejor área de desempeño"
                               name="pe2" value="{{ $c->pregEgel2 }}">
                    </div>
                    <hr>
                    <div class="row mt-3">
                        <p class="textoSeccion">Pregunta de EGEL 3</p>
                    </div>
                    <div class="row mt-3">
                        <input type="text" class="form-control" id="FormControlInput5" placeholder="Observaciones de los sinodales"
                               name="pe3" value="{{ $c->pregEgel3 }}">
                    </div>
                    <hr>

                    @if($errors->any()){{-- Si existe algun error durante la validadcion de el form--}}
                        <ul class="text-danger">
                            Todos los campos deben estar llenos 
                        </ul>
                    @endif

                    <div class="row mt-5 mb-2">
                        <div class="col-md-6 text-center align-items-center justify-content-center mb-3">
                            <a href="{{ route(('superu')) }}" class="btn btnFinalizar">Regresar</a>
                        </div>
                        <div class="col-md-6 text-center align-items-center justify-content-center">
                            <button type="submit" class="btn btnFinalizar mb-3">Finalizar</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
        @include('Plantillas.footer')
    </body>
</html>