<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <style>
            .tamcarta{/*Tamano del documento, no modificar*/
                width:720px;
                height:1000px;
            }
            .tabla{/*Estilos para la tabla de respustas solamente*/
                position:static;
                width:720px;
                border-collapse: collapse;
                border: 1px solid black;
            }
            .td{/*Estilo para td de tabla de respustas solamente*/
                border: 1px solid black;
                font-family:Arial,Helvetica;
                font-weight: bold;
                font-size:0.8em;
                
            }
            .t{/*clase para tabla de respuestas solamente*/
                border: 1px solid black;
                font-family:Helvetica;
                font-weight: normal;
                font-size:0.7em;
            }
            /*
            table, td, th {
            border: 1px solid black;
            }
            */
            tr{
                width:720px;

            }
            #t1r2{
                width:80%;
                margin: 0 auto;
                padding-top:30px;
            }
            .r2{
                font-size:0.7em;
                font-family:Arial,Helvetica;
                font-weight: normal;
            }
            /*
            .r3{
                width:174px;
                font-size:0.7em;
                font-family:Arial,Helvetica;
                font-weight: normal;
            }*/
        </style>
    </head>
    <body>
        @for($i = 0; $i < 5; $i++)
        <div class="tamcarta">
        <table> 
            <tr>
                <td style="width:25%;">
                    <img src="logoIngenieria.jpg" width="180px">
                </td>
                <td style="text-align: center;font-size:0.7em; font-family:Arial,Helvetica;width:50%;padding-left:40px;">
                    <p>UNIVERSIDAD AUTONOMA DE SAN LUIS POTOSI <br>
                        FACULTAD DE INGENIERIA <br>
                        AREA DE CIENCIAS DE LA COMPUTACION <br>
                        SRRE
                    </p>
                </td>
                <td>
                    <img src="logoUASLP.jpg" width="150px" style="padding-left:70px;">
                </td>
            </tr>
            <tr>
                <th colspan="3" class="th">
                    <div id="t1r2">
                        <div class="r2" style="width:80px;height:auto;display:inline-block;">
                            <img src="badfoto.png" width="80px" style="padding-left:40px;">
                        </div>
                        <div class="r2" style="padding-left:10px;width:180px;display:inline-block;padding-left:40px;">
                            <p style="text-align: left;">Clave de usuario: 
                               <label style="color:blue;">
                               242325
                               </label><br>
                                Nombre: 
                                <label style="color:blue;text-transform:uppercase;">Miguel Angel Trujillo Esquivel
                                </label><br>
                                Filtrado por: 54534 
                            </p>
                        </div>
                        <div class="r2" style="display:inline-block;padding-right:160px;">
                            <p><b>SISTEMA DE EXAMENES DE EGRESO</b><br>
                                <small>REPORTE DE RETROALIMENTACION </small><br>
                                Fecha: hoy</p>
                        </div>
                    </div>
                </th>
            </tr>
        </table>

        <table class="tabla" width="95%" style="text-align: center; position:absolute">
            <thead>
                <tr>
                    <td rowspan="2" class="td">Carrera</td>
                    <td rowspan="2" class="td">Generación</td>
                    <td colspan="3" class="td">Resultados EGEL</td>
                    <td rowspan="2" class="td">Respuestas Retroalimentación</td>
                </tr>
                <tr>
                    <td class="td">Area</td>
                    <td class="td">Nivel</td>
                    <td class="td">Puntaje</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <!--Rowspan debera ir cambiando conformo se agreguen areas-->
                    <th rowspan="4" id="carrera" class="t">Ingenieria en...</th>
                    <th rowspan="4" id="generacion" class="t">2017 - 2021</th>
                    <!--Rowspan debera ir cambiando conformo se agreguen respuestas-->
                    <th rowspan="2" id="area" class="t">Area 1</th>
                    <th rowspan="2" id="generacion" class="t">D55</th>
                    <th rowspan="2" id="puntaje" class="t">1179</th>
                    <th class="t">Respuesta 1</th>
                </tr>
                <tr>
                    <th class="t">Respuesta 2</th>
                </tr>
                <tr>
                    <th rowspan="2" id="area" class="t">Area 2</th>
                    <th rowspan="2" id="generacion" class="t">D55</th>
                    <th rowspan="2" id="puntaje" class="t">1244</th>
                    <th class="t">Respuesta 3</th>
                </tr>
                <tr>
                    <th class="t">Respuesta 4</th>
                </tr> 
            </tbody>
        </table>
        </div>
    @endfor
    </body>
</html>


       <!-- No sirvio esta madre porque dompdf no acepta flexbox
<div style="width:720px;background-color:yellow;">
<div style="background-color:blue;width:20%;display:inline;margin:0px 0px;">
<img src="foto.png" width="80px" style="margin:0px 0px;">
</div>
<div style="background-color:red;width:40%;display:inline">
<p style="text-align: left;">Clave de usuario: <br>
Nombre: Miguel Angel Trujillo Esquivel<br>
Filtrado por: </p>
</div>
<div style="background-color:green;width:20%;text-align:center;display:inline;margin:0px;">
<p><b>SISTEMA DE EXAMENES DE EGRESO</b><br>
<small>REPORTE DE RETROALIMENTACION </small><br>
Fecha: hoy</p>
</div>
</div>

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
Fecha: hoy</p>
</div>
</div>
</th>
</tr>
-->