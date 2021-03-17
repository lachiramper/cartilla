<?php
$estatura = $_POST['estatura'];
$peso = $_POST['peso'];
$edad = $_POST['edad'];
?>

<html>
<head>
    <title>IMSS</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
<div class="container">

    <form method="post" action="carnetDatos.php">

        <div class="row">
            <div class="card"><b><input type="text" class="form-control" id="curp" hidden
                                        name="peso"
                                        value="<?php echo $peso ?>"
                                        placeholder="Fecha de Aplicacion"></b></div>
        </div>
        <div class="row">
            <div class="card"><b><input type="text" class="form-control" id="curp" hidden
                                        name="estatura"
                                        value="<?php echo $estatura ?>"
                                        placeholder="Fecha de Aplicacion"></b></div>
        </div>
    <div class="row">
        <div class="col">
            <div class="alert alert-success" role="alert">
                Cartilla de Vacunacion
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col card text-center bg-success">
            <div class="text-white"><b>Vacuna</b></div>
        </div>
        <div class="col card text-center bg-success">
            <div class="text-white"><b>Enfermedad que previene</b></div>
        </div>
        <div class="col card text-center bg-success">
            <div class="text-white"><b>Dosis</b></div>
        </div>
        <div class="col card text-center bg-success">
            <div class="text-white"><b>Edad y frecuencia</b></div>
        </div>
        <div class="col card text-center bg-success">
            <div class="text-white"><b>Fecha de Vacunacion</b></div>
        </div>
    </div>
    <!--    header-->
    <div class="row">
        <div class="col card text-center bg-primary">
            <div class="text-white"><b>B C G</b></div>
        </div>
        <div class="col card text-center">
            <div><b>TUBERCULOSIS</b></div>
        </div>
        <div class="col card text-center">
            <div><b>UNICA</b></div>
        </div>
        <div class="col card text-center">
            <div><b>AL NACER</b></div>
        </div>
        <div class="col card text-center">
            <div><b><input type="text" class="form-control" id="curp" name="fechaAplicacionBCG"
                           placeholder="Fecha de Aplicacion"></b></div>
        </div>
    </div>
    <div class="row">
        <div class="col card text-center bg-warning">
            <div class="text-white"><b>HEPATITIS B</b></div>
        </div>
        <div class="col card text-center">
            <div><b>HEPATITIS B</b></div>
        </div>
        <div class="col card text-center">
            <div class="row">
                <div class="card"><b>PRIMERA</b></div>
            </div>
            <div class="row">
                <div class="card"><b>SEGUNDA</b></div>
            </div>
            <div class="row">
                <div class="card"><b>TERCERA</b></div>
            </div>
        </div>
        <div class="col card text-center">
            <div class="row">
                <div class="card"><b>AL NACER</b></div>
            </div>
            <div class="row">
                <div class="card"><b>3 MESES</b></div>
            </div>
            <div class="row">
                <div class="card"><b>6 MESES</b></div>
            </div>
        </div>
        <div class="col card text-center">
            <div class="row">
                <div class="card"><b><input type="text" class="form-control" id="curp"
                                            name="fechaAplicacionHEPATITISPRIMERA"
                                            placeholder="Fecha de Aplicacion"></b></div>
            </div>
            <div class="row">
                <div class="card"><b><input type="text" class="form-control" id="curp"
                                            name="fechaAplicacionHEPATITISSEGUNDA"
                                            placeholder="Fecha de Aplicacion"></b></div>
            </div>
            <div class="row">
                <div class="card"><b><input type="text" class="form-control" id="curp"
                                            name="fechaAplicacionHEPATITISTERCERA"
                                            placeholder="Fecha de Aplicacion"></b></div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col card text-center bg-info">
            <div class="text-white"><b>PENTAVALENTE<BR>ACELULAR<BR>DPaT+VPI+HiB</b></div>
        </div>
        <div class="col card text-center">
            <div><b><b>DIFTERIA<BR>TOS FERINA<BR>TETANOS<BR>POLIOMELITIS<BR>E INFECCIONES POR H INFLEUNSA B</b>
            </div>
            </b>
        </div>
        <div class="col card text-center">
            <div class="row">
                <div class="card"><b>PRIMERA</b></div>
            </div>
            <div class="row">
                <div class="card"><b>SEGUNDA</b></div>
            </div>
            <div class="row">
                <div class="card"><b>TERCERA</b></div>
            </div>
            <div class="row">
                <div class="card"><b>CUARTA</b></div>
            </div>
        </div>
        <div class="col card text-center">
            <div class="row">
                <div class="card"><b>2 MESES</b></div>
            </div>
            <div class="row">
                <div class="card"><b>4 MESES</b></div>
            </div>
            <div class="row">
                <div class="card"><b>6 MESES</b></div>
            </div>
            <div class="row">
                <div class="card"><b>12 MESES</b></div>
            </div>
        </div>
        <div class="col card text-center">
            <div class="row">
                <div class="card"><b><input type="text" class="form-control" id="curp"
                                            name="fechaAplicacionPENTAVALENTEPRIMERA"
                                            placeholder="Fecha de Aplicacion"></b></div>
                </b>
            </div>
            <div class="row">
                <div class="card"><b><input type="text" class="form-control" id="curp"
                                            name="fechaAplicacionPENTAVALENTESEGUNDA"
                                            placeholder="Fecha de Aplicacion"></b></div>
                </b>
            </div>
            </b>
            <div class="row">
                <div class="card"><b><input type="text" class="form-control" id="curp"
                                            name="fechaAplicacionPENTAVALENTETERCERA"
                                            placeholder="Fecha de Aplicacion"></b></div>
                </b>
            </div>
            </b>
            <div class="row">
                <div class="card"><b><input type="text" class="form-control" id="curp"
                                            name="fechaAplicacionPENTAVALENTECUARTA"
                                            placeholder="Fecha de Aplicacion"></b></div>
                </b>
            </div>
            </b></div>
        <div class="row">
            <div class="col card text-center bg-warning">
                <div class="text-white"><b>DPT</b></div>
            </div>
            <div class="col card text-center">
                <div><b>DIFTERIA<BR>TOS FERINA<BR> Y TETANOS</b></div>
            </div>
            <div class="col card text-center">
                <div><b>REFUERZO</b></div>
            </div>
            <div class="col card text-center">
                <div><b>4 AÑOS</b></div>
            </div>
            <div class="col card text-center">
                <div><b><input type="text" class="form-control" id="curp"
                               name="fechaAplicacionDPT"
                               placeholder="Fecha de Aplicacion"></b></div></b></div>
            </div>
        </div>

        <div class="row">
            <div class="col card text-center bg-success">
                <div class="text-white">ROTAVIRUS</b></div>
            </div>
            <div class="col card text-center">
                <div><b>DIARREA POR ROTAVIRUS</b></div>
            </div>
            <div class="col card text-center">
                <div class="row">
                    <div class="card"><b>PRIMERA</b></div>
                </div>
                <div class="row">
                    <div class="card"><b>SEGUNDA</b></div>
                </div>
                <div class="row">
                    <div class="card"><b>TERCERA</b></div>
                </div>
            </div>
            <div class="col card text-center">
                <div class="row">
                    <div class="card"><b>2 MESES</b></div>
                </div>
                <div class="row">
                    <div class="card"><b>4 MESES</b></div>
                </div>
                <div class="row">
                    <div class="card"><b>6 MESES</b></div>
                </div>
            </div>
            <div class="col card text-center">
                <div class="row">
                    <div class="card"><b><input type="text" class="form-control" id="curp"
                            name="fechaAplicacionROTAVIRUSPRIMERA"
                            placeholder="Fecha de Aplicacion"></b></div>
                </div>
                <div class="row">
                    <div class="card"><b><input type="text" class="form-control" id="curp"
                                                name="fechaAplicacionROTAVIRUSSEGUNDA"
                                                placeholder="Fecha de Aplicacion"></b></div>
                </div>
                <div class="row">
                    <div class="card"><b><input type="text" class="form-control" id="curp"
                                                name="fechaAplicacionROTAVIRUSSTERCERA"
                                                placeholder="Fecha de Aplicacion"></b></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col card text-center bg-info">
                <div class="text-white"><b>NEUMOCOCICA<BR>CONJUGADA</b></div>
            </div>
            <div class="col card text-center">
                <div><b>INFECCION <BR> POR <BR> NEUMOCOCO</b></div>
            </div>
            <div class="col card text-center">
                <div class="row">
                    <div class="card"><b>PRIMERA</b></div>
                </div>
                <div class="row">
                    <div class="card"><b>SEGUNDA</b></div>
                </div>
                <div class="row">
                    <div class="card"><b>REFUERZO</b></div>
                </div>
            </div>
            <div class="col card text-center">
                <div class="row">
                    <div class="card"><b>2 MESES</b></div>
                </div>
                <div class="row">
                    <div class="card"><b>4 MESES</b></div>
                </div>
                <div class="row">
                    <div class="card"><b>12 MESES</b></div>
                </div>
            </div>
            <div class="col card text-center">
                <div class="row">
                    <div class="card"><b><input type="text" class="form-control" id="curp"
                                                name="fechaAplicacionNEUMOCOCICAPRIMERA"
                                                placeholder="Fecha de Aplicacion"></b></div>
                </div>
                <div class="row">
                    <div class="card"><b><input type="text" class="form-control" id="curp"
                                                name="fechaAplicacionNEUMOCOCICASEGUNDA"
                                                placeholder="Fecha de Aplicacion"></b></div>
                </div>
                <div class="row">
                    <div class="card"><b><input type="text" class="form-control" id="curp"
                                                name="fechaAplicacionNEUMOCOCICATERCERA"
                                                placeholder="Fecha de Aplicacion"></b></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col card text-center bg-danger">
                <div class="text-white"><b>INFLUENZA</b></div>
            </div>
            <div class="col card text-center">
                <div><b>INFLUENZA</b></div>
            </div>
            <div class="col card text-center">
                <div class="row">
                    <div class="card"><b>PRIMERA</b></div>
                </div>
                <div class="row">
                    <div class="card"><b>SEGUNDA</b></div>
                </div>
                <div class="row">
                    <div class="card"><b>REVACUNACION</b></div>
                </div>
            </div>

            <div class="col card text-center">
                <div class="row">
                    <div class="card"><b>6 MESES</b></div>
                </div>
                <div class="row">
                    <div class="card"><b>7 MESES</b></div>
                </div>
                <div class="row">
                    <div class="card"><b>ANUAL HASTA <BR> LOS 59 MESES</b></div>
                </div>
            </div>
            <div class="col card text-center">
                <div class="row"><b><input type="text" class="form-control"
                                           name="fechaAplicacionIFLUENZAPRIMERA"
                                           placeholder="Fecha de Aplicacion"></b>
                </div>
                <div class="row">
                    <div class="card"><b><input type="text" class="form-control" id="curp"
                                                name="fechaAplicacionINFLUENZASEGUNDA"
                                                placeholder="Fecha de Aplicacion"></b></div>
                </div>
                <div class="row">
                    <div class="row">
                        <div class="card"><b><input type="text" class="form-control" id="curp"
                                                    name="fechaAplicacionINFLUENZATERCERA"
                                                    placeholder="Fecha de Aplicacion"></b></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col card text-center bg-primary">
                <div class="text-white"><b>S R P</b></div>
            </div>
            <div class="col card text-center">
                <div><b>SARAMPION<BR>RUBEOLA<BR>PROTIDITIS</BR></b></div>
            </div>
            <div class="col card text-center">
                <div class="row">
                    <div class="card"><b>PRIMERA</b></div>
                </div>
                <div class="row">
                    <div class="card"><b>REFUERZO</b></div>
                </div>
            </div>
            <div class="col card text-center">
                <div class="row">
                    <div class="card"><b>1 AÑO</b></div>
                </div>
                <div class="row">
                    <div class="card"><b>6 AÑOS</b></div>
                </div>
            </div>
            <div class="col card text-center">
                <div class="row">
                    <div class="card"><b><input type="text" class="form-control" id="curp"
                                                name="fechaAplicacionSRPPRIMERA"
                                                placeholder="Fecha de Aplicacion"></b></div>
                </div>
                <div class="row">
                    <div class="card"><b><input type="text" class="form-control" id="curp"
                                                name="fechaAplicacionSRPSEGUNDA"
                                                placeholder="Fecha de Aplicacion"></b></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col card text-center bg-secondary">
                <div class="text-white"><b>SABIN</b></div>
            </div>
            <div class="col-sm card text-center">
                <div><b>POLEOMELITIS</b></div>
            </div>
            <div class="col-sm card text-center">
                <div><b>ADICIONALES</b></div>
            </div>
            <div class="col card text-center">
                <div><b><input type="text" class="form-control" id="curp"
                               name="fechaAplicacionSABIN"
                               placeholder="Fecha de Aplicacion"></b></div>
            </div>
        </div>
        <div class="row">
            <div class="col card text-center bg-success">
                <div class="text-white"><b>S R</b></div>
            </div>
            <div class="col-sm card text-center">
                <div><b>SARAMPION <BR> Y ER¿RUBEOLA</b></div>
            </div>
            <div class="col-sm card text-center">
                <div><b>ADICIONALES</b></div>
            </div>
            <div class="col card text-center">
                <div><b><input type="text" class="form-control" id="curp"
                               name="fechaAplicacionSRPPRIMERAA"
                               placeholder="Fecha de Aplicacion"></b></div>
            </div>
        </div>
        <div class="row">
            <div class="col card text-center bg-danger">
                <div class="text-white"><b>OTRAS<BR>VACUNAS</b></div>
            </div>
            <div class="col card text-center">
                <div class="row">
                    <div class="card"><b>PRIMERA</b></div>
                </div>
                <div class="row">
                    <div class="card"><b>PRIMERA</b></div>
                </div>
                <div class="row">
                    <div class="card"><b>PRIMERA</b></div>
                </div>
            </div>
            <div class="col card text-center">
                <div class="row">
                    <div class="card"><b>PRIMERA</b></div>
                </div>
                <div class="row">
                    <div class="card"><b>PRIMERA</b></div>
                </div>
                <div class="row">
                    <div class="card"><b>PRIMERA</b></div>
                </div>
            </div>
            <div class="col card text-center">
                <div class="row">
                    <div class="card"><b>PRIMERA</b></div>
                </div>
                <div class="row">
                    <div class="card"><b>PRIMERA</b></div>
                </div>
                <div class="row">
                    <div class="card"><b>PRIMERA</b></div>
                </div>
            </div>
            <div class="col card text-center">
                <div class="row">
                    <div class="card"><b><input type="text" class="form-control" id="fechaAplicacionOtrasVacunasPrimera"
                                                name="fechaAplicacionOtrasVacunasPrimera"
                                                placeholder="Fecha Aplicacion Otras Vacunas"></b></div>
                </div>
                <div class="row">
                    <div class="card"><b><input type="text" class="form-control" id="fechaAplicacionOtrasVacunasSegunda"
                                                name="fechaAplicacionOtrasVacunasSegunda"
                                                placeholder="Fecha Aplicacion Otras Vacunas"></b></div>
                </div>
                <div class="row">
                    <div class="card"><b><input type="text" class="form-control" id="fechaAplicacionOtrasVacunasTercera"
                                                name="fechaAplicacionOtrasVacunasTercera"
                                                placeholder="Fecha Aplicacion Otras Vacunas"></b></div>
                </div>
            </div>
        </div>

        <div class="card-footer">
            <div class="row">
                <div class="col-8"></div>
                <div class="col">
                    <button class="btn btn-primary btn-sm" value="send1">Guardar</button>
                </div>
            </div>
        </div>
    </form>
    </div>
</div>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
        crossorigin="anonymous"></script>
</body>
</html>