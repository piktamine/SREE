<!DOCTYPE html>
<html lang="en">
<head>
    @include('Plantillas.head')
</head>
<body>
    
    @include('Plantillas.header')
    
    <div class="row m-0 p-0">
        <div class="container mt-5">
         
           @if($errors->any())
           <ul>
           @foreach($errors->all() as $error)
               <li>{{$error}}</li>
           @endforeach   
           </ul>
           @endif
           
            <div class="card">
                 <h5 class="card-header" style="text-align: center;">Login</h5>
                <div class="card-body">
                  <div class="container">
                   <form method='POST' action="/login">
                   @csrf
                    <div class="row">
                        <div class="col-5">
                            <p class="textos">RPE</p>
                        </div>
                        <div class="col-7">
                            <input type="int" id="txtClaveUnica" class="form-control textClaveUnica" name="rpe" value="{{ old('rpe') }}">
                            {{ $errors->first('rpe') }}
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-5">
                            <p class="textos">Contraseña</p>
                        </div>
                        <div class="col-7">
                            <input type="password" id="txtContraseña" class="form-control textClaveUnica"  name="password">
                            {{ $errors->first('password') }}
                            @if(session('error'))
                                <label class="text-danger"> 
                                    {{session('error')}}
                                </label>
                            @endif
                        </div>
                    </div>
                    
                    <label>
                        <input type="checkbox" name="remember" style="margin-right:9px">Recuerda mi sesion
                    </label><br>
                    <div class="row justify-content-center mt-5">
                       <input type="submit" value="Iniciar sesión" class="btn btnFinalizar">
                    </div>
                     
                      </form>  
                        
                  </div>
                </div>
              </div>
        </div>
        
    </div>

    @include('Plantillas.footer')
</body>
</html>