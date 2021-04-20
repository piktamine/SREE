<!DOCTYPE html>
<html lang="en">
<head>
    @include('Plantillas.head',['titulo' => 'SREE - Jefe Area'])
</head>
<body>
    
    @include('Plantillas.header')
    
    <div class="row">
        <div class="container mt-5">
            <div class="row justify-content-center">
                <p class="txtIdentificado">Identificado como: <strong>JEFE DE ÁREA</strong></p>
            </div>
            <div class="row justify-content-center mt-4">
                <a href="{{route('verexamenja')}}" class="btn boton">Ver Exámenes</a>
            </div>
            <div class="row justify-content-center mt-4">
                <a href="#" class="btn boton">Generar Reportes</a>
            </div> 
            <div class="row justify-content-center mt-4">
                @include('Plantillas.cerrarsesion')
            </div>             
        </div>
    </div>
    @include('Plantillas.footer')
</body>
</html>