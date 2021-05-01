<!DOCTYPE html>
<html lang="en">
<head>
    @include('Plantillas.head',['titulo' => 'SREE - Coordinador'])
</head>
<body>
    
    @include('Plantillas.header')
    
    <div class="row">
        <div class="container mt-5">
            <div class="row justify-content-center">
                <p class="txtIdentificado">Identificado como: <strong>COORDINADOR</strong></p>
            </div>
            <div class="row justify-content-center mt-4">
                <a href="{{route('verexamenc')}}" class="btn boton">Ver Exámenes</a>
            </div>
            <div class="row justify-content-center mt-4">
                <a href="{{route('reportesc')}}" class="btn boton">Generar Reportes</a>
            </div> 
            <div class="row justify-content-center mt-4">
                @include('Plantillas.cerrarsesion')
            </div>             
        </div>
    </div>
    @include('Plantillas.footer')
</body>
</html>