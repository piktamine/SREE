<!DOCTYPE html>
<html lang="en">
<head>
    @include('Plantillas.head',['titulo' => 'SREE - Capturista'])
</head>
<body>
    
    @include('Plantillas.header')
    
    <div class="row">
        <div class="container mt-5">
            <div class="row justify-content-center">
                <p class="txtIdentificado">Identificado como: <strong>CAPTURISTA</strong></p>
            </div>
            <div class="row justify-content-center">
                <p class="txtnombre">Nombre: <strong>{{ Auth::user()->name }}</strong></p>
            </div>
            <div class="row justify-content-center mt-4">
                <a href="{{ route('capturar') }}" class="btn boton">Capturar Resultados EGEL</a>
            </div>
            <div class="row justify-content-center mt-4">
                @include('Plantillas.cerrarsesion')
            </div>            
        </div>
    </div>
    
    @include('Plantillas.footer')
</body>
</html>