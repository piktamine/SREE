<!DOCTYPE html>
<html>
    <head>
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
        <title>Página de login</title>
        <style type = "text/css">

        </style>

    </head>

    <body>
       @if($errors->any())
           <ul>
           @foreach($$errors->all() as $error)
               <li>{{$error}}</li>
           @endforeach   
           </ul>
       @endif
       
        <form method='post'>
           @csrf
            <label for="email">Email:</label><br>
            <input type="text" id="email" name="email"><br>
            <label for="contra">Password:</label><br>
            <input type="text" id="contra" name="password"><br><br>
            <label>
                <input type="checkbox" name="remember">Recuerda mi sesion
            </label><br>
            <input type="submit">
          </form> 
    </body>
</html>
