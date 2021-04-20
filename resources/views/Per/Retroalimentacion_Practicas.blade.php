<!DOCTYPE html>
<html lang="en">
    <head>
        @include('Plantillas.head',['titulo' => 'SREE - Retroalimentacion Practicas profesionales'])
    </head>
    <body>
        @include('Plantillas.header')

        @if($errors->any())
            <script>
                Swal.fire('Debe llenar todos los campos')
                    .then((result) => {
                    if (result.isConfirmed) {
                        //location.reload();
                        //window.history.back();
                        location.reload();
                    }
                })
            </script>
        @endif

        <div class="row">
            <div class="container mt-5 ">
                <div class="row justify-content-center">
                    <p class="texto"><strong>Cuestionario de Retrolimentación - Sección Practicas/Servico</strong></p>
                </div>
                <div class="row justify-content-center">
                    <p class="texto">Alumno: {{$al->nombre}}</p>
                </div>
                <form action="
                              @role('sinodal')
                                  {{route('guardarsecpp',$al)}}
                              @endrole
                              @role('coordinador')
                                  {{route('guardarsecppc',$al)}}
                              @endrole
                              @role('jefearea')
                                  {{route('guardarsecppj',$al)}}
                              @endrole
                              " method="post">
                    @csrf

                    <input type="hidden" value="{{$al->claveAlumno}}" name="clave">  

                    <div class="row mt-3">
                        <p class="textoSeccion">{{$cues->pregServicio1}}</p>
                    </div>
                    <div class="row mt-3">

                        <textarea class="form-control" id="Textarea1" rows="3" 
                                  name="r1">{{$resp->resServicio1}}</textarea>
                    </div>
                    <hr>
                    <div class="row mt-3">
                        <p class="textoSeccion">{{$cues->pregServicio2}}</p>
                    </div>
                    <div class="row mt-3">

                        <textarea class="form-control" id="Textarea2" rows="3"
                                  name="r2"> {{$resp->resServicio2}} </textarea>

                    </div>
                    <hr>

                    <div class="row mt-3">
                        <p class="textoSeccion">{{$cues->pregPracticas1}}</p>
                    </div>
                    <div class="row mt-3">

                        <textarea class="form-control" id="Textarea3" rows="3"
                                  name="r3">{{$resp->resPracticas1}}</textarea>

                    </div>
                    <hr>

                    <div class="row mt-3">
                        <p class="textoSeccion">{{$cues->pregPracticas2}}</p>
                    </div>
                    <div class="row mt-3">

                        <textarea class="form-control" id="Textarea4" rows="3"
                                  name="r4">{{$resp->resPracticas2}}</textarea>

                    </div>
                    <hr>

                    <div class="row justify-content-center mt-5">
                        <button type="submit" class="btn btnFinalizar mb-3">Finalizar</button>
                    </div>
                </form>

            </div>
        </div>
        @include('Plantillas.footer')
    </body>
</html>