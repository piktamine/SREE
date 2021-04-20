<!DOCTYPE html>
<html lang="en">
    <head>
        @include('Plantillas.head',['titulo' => 'SREE - Retroalimentacion Carrera'])
    </head>
    <body>
        @include('Plantillas.header')

        @php
        $prol = Auth::user()->roles->pluck('name');//obtiene arreglo con el rol
        $rol = $prol[0];//arreglo a string
        @endphp

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
                    <p class="texto"><strong>Cuestionario de Retrolimentación - Sección Carrera</strong></p>
                </div>
                <div class="row justify-content-center">
                    <p class="texto">Alumno: {{$al->nombre}}</p>
                </div>

                <form action="
                              @role('sinodal')
                                  {{route('guardarseccar',$al)}}
                              @endrole
                              @role('coordinador')
                                  {{route('guardarseccarc',$al)}}
                              @endrole
                              @role('jefearea')
                                  {{route('guardarseccarj',$al)}}
                              @endrole
                              " method="post">
                    @csrf

                    <input type="hidden" value="{{$al->claveAlumno}}" name="clave">  

                    <div class="row mt-3">
                        <p class="textoSeccion">{{$cues->pregCarrera1}}</p>
                    </div>
                    <div class="row mt-3">
                        <textarea class="form-control" id="Textarea1" rows="3" 
                                  name="rcarr1">{{$resp->resCarrera1}}</textarea>
                    </div>

                    <hr>
                    <div class="row mt-3">
                        <p class="textoSeccion">{{$cues->pregCarrera2}}</p>
                    </div>
                    <div class="row mt-3">  
                        <textarea class="form-control" id="Textarea2" rows="3" 
                                  name="rmat1">{{$resp->resMaterias1}}</textarea>
                    </div>
                    <hr>
                    <div class="row mt-3">
                        <p class="textoSeccion">{{$cues->pregCarrera3}}</p>
                    </div>
                    <div class="row mt-3">              
                        <textarea class="form-control" id="Textarea3" rows="3" 
                                  name="rmat2">{{$resp->resMaterias2}}</textarea>
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