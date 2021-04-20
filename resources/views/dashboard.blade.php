<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
       <div>
           <h1><b>Bienvenido al proyecto registro EGEL</b></h1><br>
       </div>
       
       Estas identificado como: 
       
       {{ $rol }}
       
       {{--@foreach($Opciones as $opc)
               
       @endforeach--}}
       
       {{--
       @if()
           
       @else if()
       
       @else
       --}}
       
       {{--
       <div class="Contenido">
           @foreach($permisos as $p)
              @can($p)
               <div style="background-color:blue;margin 20px 0;">
                   <a href="{{route($p)}}"></a>
               </div>
              @endcan 
           @endforeach
       </div>
       --}}
       
       
       <form action="/logout" method="post">
           @csrf
           <a href="#" 
               onclick="this.closest('form').submit()">
               Cerrar sesion</a>
       </form>
    </body>
</html>
