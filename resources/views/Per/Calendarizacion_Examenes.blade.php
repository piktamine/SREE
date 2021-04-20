<!DOCTYPE html>
<html lang="en">
    <head>
        @include('Plantillas.head',['titulo' => 'SREE - Agendar examen'])
        @include('Plantillas.inputsinflechas')
    </head>
    <body>

        @include('Plantillas.header')


        <div class="container mt-5">
            <form action="{{route('agendarexprofpost')}}" method="post">
                @csrf
                <h5 class="titles">Agendar Examen Profesional</h5>

                <div class="row mt-5">
                    <p>Clave del alumno (Sustentante)</p>
                    <input class="answer w-100" type="number" name="clave">
                </div>
                <div class="row mt-3">
                    <p class="mt-2">Nombre Sustentante</p>
                    <input class="answer" name="nombre">
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