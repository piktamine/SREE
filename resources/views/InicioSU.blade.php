<!DOCTYPE html>
<html lang="en">
    <head>
        @include('Plantillas.head',['titulo' => 'SREE - Super Usuario'])
    </head>
    <body>
        @include('Plantillas.header')

        <div class="row m-0 p-0">
            <div class="container mt-5">
                <div class="row justify-content-center">
                    <p class="txtIdentificado">Identificado como: <strong>SUPER USUARIO</strong></p>
                </div>
                <div class="row justify-content-center mt-3">
                    <a href="{{route('addi')}}" class="btn boton">Adición de Usuarios</a>
                </div>
                <div class="row justify-content-center mt-3">
                    <a href="{{route('mostrarus')}}" class="btn boton">Mostrar Usuarios</a>
                </div> 
                <div class="row justify-content-center mt-3">
                    <a href="{{route('mostrarexprof')}}" class="btn boton">Mostrar Exámenes Profesionales</a>
                </div>
                <div class="row justify-content-center mt-3">
                    <a href="{{route('agendarexprof')}}" class="btn boton">Agendar Exámenes Profesionales</a>
                </div>            
                <div class="row justify-content-center mt-3">
                    <a href="{{route('mostrarcues')}}" class="btn boton">Dar de Alta Formato de Retroalimentación</a>
                </div>
                <div class="row justify-content-center mt-3">
                    <a href="{{route('modifcues')}}" class="btn boton">Modificar Formato de Retroalimentación</a>
                </div>            
                <div class="row justify-content-center mt-3">
                    @include('Plantillas.cerrarsesion')
                </div>                    
            </div>
        </div>

        @include('Plantillas.footer')
        
        @if(session('success')){{-- --}}
        <script>
            Swal.fire({
                icon: 'success',
                title: '{{session('success')}}',
                showConfirmButton: false,
                timer: 2000
            }).then((result) => {
                /* Esto checa que haya finalizado el timer*/
                if (result.dismiss === Swal.DismissReason.timer) {
                    //console.log('I was closed by the timer')
                    location.reload();
                }
            })

        </script>
        @endif
        
        @if(session('error'))
                <script>
                    Swal.fire({
                        icon: 'error',
                        title: '{{session('error')}}',
                    })
                        .then((result) => {
                        if (result.isConfirmed) {
                            //location.reload();
                            @php
                            Session::forget('noencontrado');
                            @endphp
                            //window.history.back();
                            location.reload();
                        }
                    })
                </script>
        @endif
    </body>
</html>