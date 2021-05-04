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
      
       @if(isset($datos))
        @foreach($datos as $d)
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
                               {{$d->clave ?? "-" }}
                               </label><br>
                                Nombre: 
                                <label style="color:blue;text-transform:uppercase;">{{$d->nombre ?? "-" }}
                                </label><br>
                                Filtrado por: {{$d->filtro ?? "-" }} 
                            </p>
                        </div>
                        <div class="r2" style="display:inline-block;padding-right:160px;">
                            <p><b>SISTEMA DE EXAMENES DE EGRESO</b><br>
                                <small>REPORTE DE RETROALIMENTACION </small><br>
                                Fecha: {{ date('d-m-Y H:i:s') }}
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
                    <th rowspan="10" id="carrera" class="t">{{$d->carrera ?? "-" }}</th>
                    <th rowspan="10" id="generacion" class="t">{{$d->gen_i ?? "-" }} - {{$d->gen_f ?? "-" }}</th>
                    <!--Rowspan debera ir cambiando conformo se agreguen respuestas-->
                    <th rowspan="5" id="area" class="t">{{$d->area1 ?? "-" }}</th>
                    <th rowspan="5" id="generacion" class="t">{{$d->generacion1 ?? "-" }}</th>
                    <th rowspan="5" id="puntaje" class="t">{{$d->puntaje1 ?? "-" }}</th>
                    <th class="t">{{$d->r1 ?? "-" }}</th>
                </tr>
                <tr>
                    <th class="t">{{$d->r2 ?? "-" }}</th>
                </tr>
                <tr>
                    <th class="t">{{$d->r3 ?? "-" }}</th>
                </tr>
                <tr>
                    <th class="t">{{$d->r4 ?? "-" }}</th>
                </tr>
                <tr>
                    <th class="t">{{$d->r5 ?? "-" }}</th>
                </tr>
                <tr>
                    <th rowspan="2" id="area" class="t">{{$d->area2 ?? "-" }}</th>
                    <th rowspan="2" id="generacion" class="t">{{$d->generacion2 ?? "-" }}</th>
                    <th rowspan="2" id="puntaje" class="t">{{$d->puntaje2 ?? "-" }}</th>
                    <th class="t">{{$d->r6 ?? "-" }}</th>
                </tr>
                <tr>
                    <th class="t">{{$d->r7 ?? "-" }}</th>
                </tr> 
                <tr>
                    <th rowspan="3" id="area" class="t">{{$d->area3 ?? "-" }}</th>
                    <th rowspan="3" id="generacion" class="t">{{$d->generacion3 ?? "-" }}</th>
                    <th rowspan="3" id="puntaje" class="t">{{$d->puntaje3 ?? "-" }}</th>
                    <th class="t">{{$d->r8 ?? "-" }}</th>
                </tr>
                <tr>
                    <th class="t">{{$d->r9 ?? "-" }}</th>
                </tr>
                <tr>
                    <th class="t">{{$d->r9 ?? "-" }}</th>
                </tr>
            </tbody>
        </table>
        </div>
        
    @endforeach
    @else
        No existen datos para generar el reporte
    @endif
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