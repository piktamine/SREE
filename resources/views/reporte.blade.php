<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        table{
            position:static;
            width:720px;
        }
        tr{
            width:720px;
        }
        #t1r2{
            width:80%;
            margin: 0 auto;
            display:flex;
            flex-wrap: nowrap;
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
        }
        .r2{
            font-size:0.7em;
            font-family:Arial,Helvetica;
            font-weight: normal;
        }
        .r3{
            width:174px;
            font-size:0.7em;
            font-family:Arial,Helvetica;
            font-weight: normal;
        }
    </style>
</head>
<body>
    <table border="1">
           
            <tr>
                <td style="width:25%;">
                    <img src="logoIngenieria.jpg" width="180px">
                </td>
                <td style="text-align: center;font-size:0.7em; font-family:Arial,Helvetica;width:50%;">
                    <p>UNIVERSIDAD AUTONOMA DE SAN LUIS POTOSI <br>
                    FACULTAD DE INGENIERIA <br>
                    AREA DE CIENCIAS DE LA COMPUTACION <br>
                    SRRE
                    </p>
                </td>
                <td>
                    <img src="logoUASLP.jpg" width="150px">
                </td>
            </tr>
            <tr>
              <th colspan="3">
               <div id="t1r2">
                    <div class="r2">
                        <img src="foto.png" width="80px">
                    </div>
                    <div class="r2" style="padding-left:10px; width:290px;">
                        <p style="text-align: left;">Clave de usuario: <br>
                        Nombre: Miguel Angel Trujillo Esquivel<br>
                        Filtrado por: </p>
                    </div>
                    <div class="r3">
                        <p><b>SISTEMA DE EXAMENES DE EGRESO</b><br>
                        <small>REPORTE DE RETROALIMENTACION </small><br>
                        Fecha: hoy</p> <!--Aqui va la fecha y hora en la que se extrajo el reporte-->
                    </div>
                </div>
                </th>
            </tr>
    </table>
    
    <table border="1" width="95%" style="text-align: center; margin-top:30px">
            <thead>
                <tr>
                    <td rowspan="2">Carrera</td>
                    <td rowspan="2">Generación</td>
                    <td colspan="3">Resultados EGEL</td>
                    <td rowspan="2">Respuestas Retroalimentación</td>
                </tr>
                <tr>
                    <td>Area</td>
                    <td>Nivel</td>
                    <td>Puntaje</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <!--Rowspan debera ir cambiando conformo se agreguen areas-->
                    <th rowspan="4" id="carrera">Ingenieria en...</th>
                    <th rowspan="4" id="generacion">2017 - 2021</th>
                    <!--Rowspan debera ir cambiando conformo se agreguen respuestas-->
                    <th rowspan="2" id="area">Area 1</th>
                    <th rowspan="2" id="generacion">D55</th>
                    <th rowspan="2" id="puntaje">1179</th>
                    <th>Respuesta 1</th>
                </tr>
                <tr>
                    <th>Respuesta 2</th>
                </tr>
                <tr>
                    <th rowspan="2" id="area">Area 2</th>
                    <th rowspan="2" id="generacion">D55</th>
                    <th rowspan="2" id="puntaje">1244</th>
                    <th>Respuesta 3</th>
                </tr>
                <tr>
                    <th>Respuesta 4</th>
                </tr>
            </tbody>
    </table>
</body>
</html>