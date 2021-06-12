<!DOCTYPE html>
<html lang="en">
    <head>
        @include('Plantillas.head',['titulo' => 'SREE - Mostrar usuarios'])
    </head>
    <body>

        @include('Plantillas.header')

        <div class="row m-0 p-0">
            <div class="container mt-4">

                <h5 class="titles">Usuarios</h5>

                @forelse($datos as $d)

                    <div class="card mt-4" style="border-color: rgba(0, 0, 0, 0.39);">
                        <div class="card-body">
                            <div class="row">
                                <!--Los datos a continuación serian los del usuario-->
                                <div class="col-md-6">
                                    <p><strong>Nombre:</strong> 

                                        {{ $d->name }}

                                    </p>
                                    <p style="font-size: medium;" id="correo"><strong>Correo electronico:</strong> 

                                        {{ $d->email }}

                                    </p>
                                    <p style="font-size: medium;" id="correo"><strong>Rol:</strong>

                                        @switch($d->getRoleNames())

                                        @case('["superu"]')
                                            Super usuario
                                        @break

                                        @case('["capturista"]')
                                            Capturista
                                        @break 

                                        @case('["jefearea"]')
                                            Jefe de Área
                                        @break

                                        @case('["coordinador"]')
                                            Coordinador de carrera
                                        @break

                                        @case('["sinodal"]')
                                            Sinodal
                                        @break                                                                                 
                                        @default
                                            Sin rol
                                        @endswitch      

                                    </p>
                                </div>
                                <div class="col-md-6">
                                    {{-- Datos enviados previamento --}}
                                    <div class="row align-items-center h-100">
                                        <div class="col-6">
                                            <a href="{{ route('editaru', $d->id) }}">
                                                <button class="btn btnFinalizar">
                                                    Editar rol
                                                </button>
                                            </a>
                                        </div>
                                        <div class="col-6">
                                            <form action="{{ route('eliminaru',$d->id) }}" method="post" class="eliminar">
                                                @csrf
                                                <button  class="btn btnBorrar">
                                                    Eliminar usuario
                                                </button>
                                            </form>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        {{-- NUEVO CODIGO PARA LAS ALERTAS --}}

                        @if(session('borrar'))

                        <script>
                            Swal.fire(
                                'Eliminado!',
                                'Usuario eliminado con exito',
                                'success'
                            )
                                .then((result) => {
                                if (result.isConfirmed) {
                                    //location.reload();
                                    //window.history.back();
                                    location.reload();
                                }
                            })
                            //location.reload();
                        </script>

                        @endif

                        <script>

                            $('.eliminar').submit(function(e){
                                e.preventDefault();

                                Swal.fire({
                                    title: 'Estas seguro de borrar a este usuario?',
                                    text: "Esta accion no se puede revertir",
                                    icon: 'Alerta',
                                    showCancelButton: true,
                                    confirmButtonColor: '#3085d6',
                                    cancelButtonColor: '#d33',
                                    confirmButtonText: 'Si, borrar usuario!',
                                    cancelButtonText: 'Cancelar'
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        this.submit();
                                    }
                                })

                            });

                            ///*
                            //*/

                        </script>
                    </div>
                    
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
                    
                @empty
                    no hay usuarios
                @endforelse   

           
            </div>
        </div>

        <div class="row m-0 p-0 mt-5 justify-content-center">
            <a href="{{ route(('superu')) }}" class="btn btnFinalizar">Regresar</a>
        </div>

        @include('Plantillas.footer')

    </body>
