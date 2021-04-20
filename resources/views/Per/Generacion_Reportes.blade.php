<!DOCTYPE html>
<html lang="en">
    <head>
        @include('Plantillas.head',['titulo' => 'SREE - Reportes'])
    </head>
    <body>

        @include('Plantillas.header')

        <div class="row" style="padding-bottom: 5em">
            <div class="container mt-5">
                <h5 class="titles">Generar reporte</h5>
            </div>
            <div class="container mt-4" id="usuario">
                <p class="text">Identificado cómo: </p> <!--Aqui va el tipo de usuario que ha accedido-->
            </div>
            <div class="container mt-5">
                <p class="text">Rangos de reporte</p>
                <div class="row">
                    <div class="col">
                        <p class="text">
                            Fecha de inicio:
                            <select>
                                <option value="2017">2017</option>
                                <option value="2018">2018</option>
                                <option value="2019">2019</option>
                                <option value="2020">2020</option>
                                <option value="2021">2021</option>
                                <option value="2022">2022</option>
                                <option value="2023">2023</option>
                                <option value="2024">2024</option>
                                <option value="2025">2025</option>
                                <option value="2026">2026</option>
                                <option value="2027">2027</option>
                            </select>
                        </p>
                    </div>
                    <div class="col">
                        <p class="text">
                            Fecha de fin:
                            <select>
                                <option value="2017">2017</option>
                                <option value="2018">2018</option>
                                <option value="2019">2019</option>
                                <option value="2020">2020</option>
                                <option value="2021">2021</option>
                                <option value="2022">2022</option>
                                <option value="2023">2023</option>
                                <option value="2024">2024</option>
                                <option value="2025">2025</option>
                                <option value="2026">2026</option>
                                <option value="2027">2027</option>
                            </select>
                        </p>
                    </div>
                </div>
                <hr style="border-color: black;">
            </div>
            <div class="container mt-3">
                <p class="text">Generaciones</p>
                <div class="row">
                    <div class="col">
                        <p class="text">
                            Inicio de generación:
                            <select>
                                <option value="2013">2013</option>
                                <option value="2014">2014</option>
                                <option value="2015">2015</option>
                                <option value="2016">2016</option>
                                <option value="2017">2017</option>
                                <option value="2018">2018</option>
                                <option value="2019">2019</option>
                                <option value="2020">2020</option>
                                <option value="2021">2021</option>
                                <option value="2022">2022</option>
                            </select>
                        </p>
                    </div>
                    <div class="col">
                        <p class="text">
                            Fin de generación:
                            <select>
                                <option value="2017">2017</option>
                                <option value="2018">2018</option>
                                <option value="2019">2019</option>
                                <option value="2020">2020</option>
                                <option value="2021">2021</option>
                                <option value="2022">2022</option>
                                <option value="2023">2023</option>
                                <option value="2024">2024</option>
                                <option value="2025">2025</option>
                                <option value="2026">2026</option>
                            </select>
                        </p>
                    </div>
                </div>
                <hr style="border-color: black;">
            </div>
            <div class="container mt-3">
                <p class="text">Datos a incluir</p>
                <div class="row">
                    <p class="text">
                    <div class="col text">
                        <input type="radio" name="data" value="retro"> Solo retroalimentación
                    </div>
                    <div class="col text">
                        <input type="radio" name="data" value="egel"> Solo EGEL
                    </div>
                    <div class="col text">
                        <input type="radio" name="data" value="ambos"> Ambos
                    </div>
                    </p>
            </div>
            <hr style="border-color: black;">
        </div>
        <div class="container mt-3">
            <p class="text">Formato del reporte</p>
            <div class="row">
                <p class="text">
                <div class="col text">
                    <input type="radio" name="formato" value="pdf"> PDF
                </div>
                <div class="col text">
                    <input type="radio" name="formato" value="excel"> Excel
                </div>
                </p>
        </div>
        <div class="row justify-content-center mt-5">
            <a class="btn btnInicioSesion">Finalizar</a>
        </div>
        </div>
    </div>
    @include('Plantillas.footer')
</body>
</html>