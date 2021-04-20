<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>
    @if(isset($titulo))
        {{ $titulo }}
    @else
        SREE
    @endif    
</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset('cssLohin.css') }}">
<link rel="stylesheet" href="{{ asset('css2.css') }}">
<link rel="stylesheet" href="{{ asset('css/cssPantallasInicio.css') }}">
<link rel="stylesheet" href="{{ asset('css/cssCapturista.css') }}">
<link rel="stylesheet" href="{{ asset('css/cssCoordinador.css') }}">
<!-- 4 jquery y ajax ?-->
<link rel="stylesheet" href="{{asset('ajax/jquery-ui/jquery-ui.min.css')}}">
<link rel="stylesheet" href="{{asset('jquerycookies/jquery.cookie.js')}}">

<script  src="https://code.jquery.com/jquery-3.5.1.min.js"   integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="  crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/f83a5ad260.js" crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<!-- 4 jquery y ajax ?-->
<script src="{{asset('ajax/jquery-ui/jquery-ui.min.js')}}"></script>