<!DOCTYPE html>
<html lang="en">
    <head>
        @include('Plantillas.head',['titulo' => 'SREE - Alta Cuestionario'])
    </head>
    <body>
    
        @include('Plantillas.header')
        
        <h5 class="titles mt-5">Dar de alta cuestionario</h5>

        @if($datos->isEmpty())

            <div class="row">
                <div class="container mt-5 ">
                    <div class="row justify-content-center">
                        <p class="texto"><strong>Formato de Retrolimentación</strong></p>
                    </div>
                    <form action="{{ route('setcues') }}" method="post">
                        @csrf

                        <div class="row mt-3">
                            <p class="textoSeccion">Titulo del formulario</p>
                        </div>
                        <div class="row mt-3">
                            <input type="text" class="form-control" id="FormControlInput1" placeholder="Titulo"
                                   name="titulo">
                        </div>
                        <hr>
                        <div class="row mt-3">
                            <p class="textoSeccion">Pregunta de carrera 1</p>
                        </div>
                        <div class="row mt-3">
                            <input type="text" class="form-control" id="FormControlInput2" placeholder="Pregunta 1"
                                   name="pc1">
                        </div>
                        <hr>
                        <div class="row mt-3">
                            <p class="textoSeccion">Pregunta de carrera 2</p>
                        </div>
                        <div class="row mt-3">
                            <input type="text" class="form-control" id="FormControlInput3" placeholder="Pregunta 2"
                                   name="pc2">
                        </div>
                        <hr>
                        <div class="row mt-3">
                            <p class="textoSeccion">Pregunta de carrera 3</p>
                        </div>
                        <div class="row mt-3">
                            <input type="text" class="form-control" id="FormControlInput4" placeholder="Pregunta 5"
                                   name="pc3">
                        </div>
                        <hr>
                        <div class="row mt-3">
                            <p class="textoSeccion">Pregunta de Servicio 1</p>
                        </div>
                        <div class="row mt-3">
                            <input type="text" class="form-control" id="FormControlInput5" placeholder="Pregunta servicio 1"
                                   name="ps1">
                        </div>
                        <hr>
                        <div class="row mt-3">
                            <p class="textoSeccion">Pregunta de Servicio 2</p>
                        </div>
                        <div class="row mt-3">
                            <input type="text" class="form-control" id="FormControlInput5" placeholder="Pregunta servicio 2"
                                   name="ps2">
                        </div>
                        <hr>
                        <div class="row mt-3">
                            <p class="textoSeccion">Pregunta de Practicas 1</p>
                        </div>
                        <div class="row mt-3">
                            <input type="text" class="form-control" id="FormControlInput5" placeholder="Pregunta practicas 1"
                                   name="pp1">
                        </div>
                        <hr>
                        <div class="row mt-3">
                            <p class="textoSeccion">Pregunta de Practicas 2</p>
                        </div>
                        <div class="row mt-3">
                            <input type="text" class="form-control" id="FormControlInput5" placeholder="Pregunta practicas 2"
                                   name="pp2">
                        </div>
                        <hr>
                        <div class="row mt-3">
                            <p class="textoSeccion">Pregunta de EGEL 1</p>
                        </div>
                        <div class="row mt-3">
                            <input type="text" class="form-control" id="FormControlInput5" placeholder="Pregunta EGEL 1"
                                   name="pe1">
                        </div>
                        <hr><div class="row mt-3">
                        <p class="textoSeccion">Pregunta de EGEL 2</p>
                        </div>
                        <div class="row mt-3">
                            <input type="text" class="form-control" id="FormControlInput5" placeholder="Pregunta EGEL 2"
                                   name="pe2">
                        </div>
                        <hr>
                        <div class="row mt-3">
                            <p class="textoSeccion">Pregunta de EGEL 3</p>
                        </div>
                        <div class="row mt-3">
                            <input type="text" class="form-control" id="FormControlInput5" placeholder="Pregunta EGEL 3"
                                   name="pe3">
                        </div>
                        <hr>

                        @if($errors->any())
                            <ul class="text-danger">
                                Todos los campos deben estar llenos 
                            </ul>
                        @endif

                        <div class="row justify-content-center mt-5">
                            <button type="submit" class="btn btnFinalizar mb-3">Finalizar</button>
                        </div>
                    </form>

                </div>
            </div>

            @else

            <div class="container mt-5">
                <div class="card">
                    <div class="card-body text-center align-items-center justify-content-center">
                        Ya existe un cuestionario
                        <br>
                        Si deseas modificar el cuestionario da click aqui abajo <br>
                        <a href="{{ route('modifcues') }}">Modificar cuestionario</a>
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