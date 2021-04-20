<!DOCTYPE html>
<html lang="en">
    <head>
        @include('Plantillas.head',['titulo' => 'SREE - Retroalimentacion Egel'])
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
                    <p class="texto"><strong>Cuestionario de Retrolimentación - Sección EGEL</strong></p>
                </div>
                <div class="row justify-content-center">
                    <p class="texto">Alumno: {{$al->nombre}}</p>
                </div>
                <form action="
                              @role('sinodal')
                                  {{route('guardarsecegel',$al)}}
                              @endrole
                              @role('coordinador')
                                  {{route('guardarsecegelc',$al)}}
                              @endrole
                              @role('jefearea')
                                  {{route('guardarsecegelj',$al)}}
                              @endrole
                              " method="post">
                    @csrf

                    <input type="hidden" value="{{$al->claveAlumno}}" name="clave">  

                    <div class="row mt-3">
                        <p class="textoSeccion">{{$cues->pregEgel1}}</p>
                    </div>
                    <div class="row mt-3">
                        <textarea class="form-control" id="Textarea1" rows="3" 
                                  name="r1">{{$resp->resArea1}}</textarea>
                    </div>
                    <hr>
                    <div class="row mt-3">
                        <p class="textoSeccion">{{$cues->pregEgel2}}</p>
                    </div>
                    <div class="row mt-3">
                        <textarea class="form-control" id="Textarea2" rows="3"
                                  name="r2">{{$resp->resArea2}}</textarea>
                    </div>
                    <hr>

                    <div class="row mt-3">
                        <p class="textoSeccion">{{$cues->pregEgel3}}</p>
                    </div>
                    <div class="row mt-3">             
                        <textarea class="form-control" id="Textarea3" rows="3"
                                  name="r3">{{$resp->observaciones3}}</textarea>
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