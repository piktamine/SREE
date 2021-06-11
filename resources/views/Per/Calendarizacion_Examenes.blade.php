<!DOCTYPE html>
<html lang="en">
    <head>
        @include('Plantillas.head',['titulo' => 'SREE - Agendar examen'])
        @include('Plantillas.inputsinflechas')
    </head>
    <body>

        @include('Plantillas.header')

        @if($hayalumno)
        <div class="container mt-5">
            <form action="{{route('agendarexprofpost')}}" method="post">
                @csrf
                <h5 class="titles">Agendar Examen Profesional</h5>

                <div class="row mt-5">

                    <p>Clave del alumno (Sustentante)</p> 

                    <div class="input-group mb-3">
                        <input class="answer w-75" value="{{$alumno->claveAlumno ?? ''}}" name="clavemuestra" disabled>
                        <input class="answer w-75" type="hidden" value="{{$alumno->claveAlumno ?? ''}}" name="clave">
                        <a class="input-group-append w-25 text-decoration-none" 
                           href="{{route('agendarexprof')}}">
                            <button type="button" class="btn btnFinalizar">Reiniciar busqueda</button>
                        </a>
                    </div>

                </div>
                <div class="row mt-3">
                    <p class="mt-2">Nombre Sustentante</p>
                    <input class="answer" type="hidden" name="nombre" value="{{$alumno->nombre ?? ''}}">
                    <input class="answer" name="nombremuestra" value="{{$alumno->nombre ?? ''}}" disabled>
                </div>
                <div class="row mt-3">
                    <p class="mt-2">Fecha</p>
                    <input class="answer" type="date" name="fecha">
                </div>
                <div class="row mt-3">
                    <p class="mt-2">Hora</p>
                    <input class="answer" type="time" name="hora">
                </div>

                {{-- 4Sinodales --}}

                <div class="row mt-3">
                    <p class="mt-2">Sinodal 1</p>
                    <select class="answer" name="s1">
                        <option value="">-</option>

                        @foreach($sinodales as $s)
                        <option value="{{$s->rpe}}">{{ $s->name }}</option> <!--Aqui van los nombres de los sinodales, posiblemente extraidos de la BD-->
                        @endforeach

                    </select>
                </div> 
                <div class="row mt-3">
                    <p class="mt-2">Sinodal 2</p>
                    <select class="answer" name="s2">
                        <option value="">-</option>

                        @foreach($sinodales as $s)
                        <option value="{{$s->rpe}}">{{ $s->name }}</option> <!--Aqui van los nombres de los sinodales, posiblemente extraidos de la BD-->
                        @endforeach

                    </select>
                </div>
                <div class="row mt-3">
                    <p class="mt-2">Sinodal 3</p>
                    <select class="answer" name="s3">
                        <option value="">-</option>

                        @foreach($sinodales as $s)
                        <option value="{{$s->rpe}}">{{ $s->name }}</option> <!--Aqui van los nombres de los sinodales, posiblemente extraidos de la BD-->
                        @endforeach

                    </select>
                </div>
                <div class="row mt-3">
                    <p style="padding-top: 25px;">Sinodal Suplente</p>
                    <select class="answer" name="s4">
                        <option value="">-</option>

                        @foreach($sinodales as $s)
                        <option value="{{$s->rpe}}">{{ $s->name }}</option> <!--Aqui van los nombres de los sinodales, posiblemente extraidos de la BD-->
                        @endforeach

                    </select>
                </div>

                {{-- Fin Sinodales --}}

                <div class="row mt-3">
                    <p class="mt-2">Recinto</p>
                    <input class="answer" name="recinto">
                </div>

                @if($errors->any())
                <ul class="text-danger">
                    Todos los campos deben estar llenos 
                </ul>
                @endif

                @if(session('erroralguardar'))
                <label class="text-danger"> 
                    {{session('erroralguardar')}}
                </label>
                @endif

                <div class="row mt-5 mb-2">
                    <div class="col-md-6 text-center align-items-center justify-content-center mb-3">
                        <a href="{{ route(('superu')) }}" class="btn btnFinalizar">Regresar</a>
                    </div>
                    <div class="col-md-6 text-center align-items-center justify-content-center">
                        <button class="btn btnFinalizar" type="submit">Agendar Examen</button>
                    </div>
                </div>
            </form>
        </div>
        @else
        <div class="text-center pt-5">
            <form action="{{route('ae_buscaru')}}" method="get">
                @csrf
                <p>Ingrese la clave del alumno sustentante para comenzar</p>
                <input class="answer w-50" type="text" name="clave"><br>
                <button class="btn btnFinalizar mt-5" type="submit">Buscar Usuario</button>
            </form>
        </div>
        @endif

        @include('Plantillas.footer')

        {{-- 
        <script>
            @forelse($usuarios as $u)
            var alumnos = ['{{$u-rpe}}']
            @empty
            var alumnos = [];
            @endforelse

            $('#search').autocomplete({
                source: alumnos; 
            });
        </script>
        --}}

    </body>
</html>