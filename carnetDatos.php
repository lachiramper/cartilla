<?php
$fechaAplicacionBCG = $_POST['fechaAplicacionBCG'];
$fechaAplicacionHEPATITISPRIMERA = $_POST['fechaAplicacionHEPATITISPRIMERA'];
$fechaAplicacionHEPATITISSEGUNDA = $_POST['fechaAplicacionHEPATITISSEGUNDA'];
$fechaAplicacionHEPATITISTERCERA = $_POST['fechaAplicacionHEPATITISTERCERA'];
$fechaAplicacionPENTAVALENTEPRIMERA = $_POST['fechaAplicacionPENTAVALENTEPRIMERA'];
$fechaAplicacionPENTAVALENTESEGUNDA = $_POST['fechaAplicacionPENTAVALENTESEGUNDA'];
$fechaAplicacionPENTAVALENTETERCERA = $_POST['fechaAplicacionPENTAVALENTETERCERA'];
$fechaAplicacionPENTAVALENTECUARTA = $_POST['fechaAplicacionPENTAVALENTECUARTA'];
$fechaAplicacionDPT = $_POST['fechaAplicacionDPT'];
$fechaAplicacionROTAVIRUSPRIMERA = $_POST['fechaAplicacionROTAVIRUSPRIMERA'];
$fechaAplicacionROTAVIRUSSEGUNDA = $_POST['fechaAplicacionROTAVIRUSSEGUNDA'];
$fechaAplicacionROTAVIRUSSTERCERA = $_POST['fechaAplicacionROTAVIRUSSTERCERA'];
$fechaAplicacionNEUMOCOCICAPRIMERA = $_POST['fechaAplicacionNEUMOCOCICAPRIMERA'];
$fechaAplicacionNEUMOCOCICASEGUNDA = $_POST['fechaAplicacionNEUMOCOCICASEGUNDA'];
$fechaAplicacionNEUMOCOCICATERCERA = $_POST['fechaAplicacionNEUMOCOCICATERCERA'];
$fechaAplicacionIFLUENZAPRIMERA = $_POST['fechaAplicacionIFLUENZAPRIMERA'];
$fechaAplicacionINFLUENZASEGUNDA = $_POST['fechaAplicacionINFLUENZASEGUNDA'];
$fechaAplicacionINFLUENZATERCERA = $_POST['fechaAplicacionINFLUENZATERCERA'];
$fechaAplicacionSRPPRIMERA = $_POST['fechaAplicacionSRPPRIMERA'];
$fechaAplicacionSRPSEGUNDA = $_POST['fechaAplicacionSRPSEGUNDA'];
$fechaAplicacionSABIN = $_POST['fechaAplicacionSABIN'];
$fechaAplicacionSRPPRIMERAA = $_POST['fechaAplicacionSRPPRIMERAA'];
$fechaAplicacionOtrasVacunasPrimera = $_POST['fechaAplicacionOtrasVacunasPrimera'];
$fechaAplicacionOtrasVacunasSegunda = $_POST['fechaAplicacionOtrasVacunasSegunda'];
$fechaAplicacionOtrasVacunasTercera = $_POST['fechaAplicacionOtrasVacunasTercera'];
$peso = $_POST['peso'];
$estatura = $_POST['estatura'];
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
    <form method="get" action="carnetDatos.php">
        <div class="row">
            <div class="col">
                <div class="alert alert-success" role="alert">
                    Cartilla de Vacunacion
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="alert alert-success" role="alert">
                    IMC: <?php echo ($peso / ($estatura * $estatura))?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col card text-center bg-success">
                <div class="text-white">
                    <b>Vacuna</b>
                </div>
            </div>
            <div class="col card text-center bg-success">
                <div class="text-white">
                    <b>Enfermedad que previene</b>
                </div>
            </div>
            <div class="col card text-center bg-success">
                <div class="text-white">
                    <b>Dosis</b>
                </div>
            </div>
            <div class="col card text-center bg-success">
                <div class="text-white">
                    <b>Edad y frecuencia</b>
                </div>
            </div>
            <div class="col card text-center bg-success">
                <div class="text-white">
                    <b>Fecha de Vacunacion</b>
                </div>
            </div>
        </div>
        <!--    header-->
        <div class="row">
            <div class="col card text-center bg-primary">
                <div class="text-white">
                    <b>B C G</b>
                </div>
            </div>
            <div class="col card text-center">
                <div>
                    <b>TUBERCULOSIS</b>
                </div>
            </div>
            <div class="col card text-center">
                <div>
                    <b>UNICA</b>
                </div>
            </div>
            <div class="col card text-center">
                <div>
                    <b>AL NACER</b>
                </div>
            </div>
            <div class="col card text-center">
                <div>
                    <b>
                        <p>
                            <?php 
                                if($fechaAplicacionBCG && $fechaAplicacionBCG != 0 && $fechaAplicacionBCG != " ") {
                                    echo "Aplicado: ", $fechaAplicacionBCG;
                                } else {
                                    echo "Pendiente: 0";} ?>
                        </

                    </b>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col card text-center bg-warning">
                <div class="text-white">
                    <b>HEPATITIS B</b>
                </div>
            </div>
            <div class="col card text-center">
                <div>
                    <b>HEPATITIS B</b>
                </div>
            </div>
            <div class="col card text-center">
                <div class="row">
                    <div class="card">
                        <b>PRIMERA</b>
                    </div>
                </div>
                <div class="row">
                    <div class="card">
                        <b>SEGUNDA</b>
                    </div>
                </div>
                <div class="row">
                    <div class="card">
                        <b>TERCERA</b>
                    </div>
                </div>
            </div>
            <div class="col card text-center">
                <div class="row">
                    <div class="card">
                        <b>AL NACER</b>
                    </div>
                </div>
                <div class="row">
                    <div class="card">
                        <b>3 MESES</b>
                    </div>
                </div>
                <div class="row">
                    <div class="card">
                        <b>6 MESES</b>
                    </div>
                </div>
            </div>
            <div class="col card text-center">
                <div class="row">
                    <div class="card">
                        <b>
                            <p>
                                <?php 
                                    if($fechaAplicacionHEPATITISPRIMERA && $fechaAplicacionHEPATITISPRIMERA != 0 && $fechaAplicacionHEPATITISPRIMERA != " ") {
                                        echo "Aplicado: ", $fechaAplicacionHEPATITISPRIMERA;
                                        } else {
                                        echo "Pendiente: 0";
                                    } 
                                    ?>
                            </p>
                        </b>
                    </div>
                </div>
                <div class="row">
                    <div class="card">
                        <b>
                            <p>
                                <?php 
                                    if($fechaAplicacionHEPATITISSEGUNDA && $fechaAplicacionHEPATITISSEGUNDA != 0 && $fechaAplicacionHEPATITISSEGUNDA != " ") {
                                        echo "Aplicado: ", $fechaAplicacionHEPATITISSEGUNDA;
                                    } else {
                                        echo "Pendiente: 0"; }?>
                            </p>
                        </b>
                    </div>
                </div>
                <div class="row">
                    <div class="card">
                        <b>
                            <p>
                                <?php 
                                    if($fechaAplicacionHEPATITISTERCERA && $fechaAplicacionHEPATITISTERCERA != 0 && $fechaAplicacionHEPATITISTERCERA != " ") {
                                    echo "Aplicado: ", $fechaAplicacionHEPATITISTERCERA;}
                                     else {
                                         echo "Pendiente: 0";
                                     }
                                     ?>
                                     
                            </p>
                        </b>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col card text-center bg-info">
                <div class="text-white">
                    <b>PENTAVALENTE

                        <BR>ACELULAR

                        <BR>DPaT+VPI+HiB

                    </b>
                </div>
            </div>
            <div class="col card text-center">
                <div>
                    <b>DIFTERIA

                        <BR>TOS FERINA

                        <BR>TETANOS

                        <BR>POLIOMELITIS

                        <BR>E INFECCIONES POR H INFLEUNSA B

                    </b>
                </div>
            </div>
            <div class="col card text-center">
                <div class="row">
                    <div class="card">
                        <b>PRIMERA</b>
                    </div>
                </div>
                <div class="row">
                    <div class="card">
                        <b>SEGUNDA</b>
                    </div>
                </div>
                <div class="row">
                    <div class="card">
                        <b>TERCERA</b>
                    </div>
                </div>
                <div class="row">
                    <div class="card">
                        <b>CUARTA</b>
                    </div>
                </div>
            </div>
            <div class="col card text-center">
                <div class="row">
                    <div class="card">
                        <b>2 MESES</b>
                    </div>
                </div>
                <div class="row">
                    <div class="card">
                        <b>4 MESES</b>
                    </div>
                </div>
                <div class="row">
                    <div class="card">
                        <b>6 MESES</b>
                    </div>
                </div>
                <div class="row">
                    <div class="card">
                        <b>12 MESES</b>
                    </div>
                </div>
            </div>
            <div class="col card text-center">
                <div class="row">
                    <div class="card">
                        <b>
                            <p>
                                <?php 
                                    if($fechaAplicacionPENTAVALENTEPRIMERA && $fechaAplicacionPENTAVALENTEPRIMERA != 0 && $fechaAplicacionPENTAVALENTEPRIMERA != " ") {
                                        echo "Aplicado: ", $fechaAplicacionPENTAVALENTEPRIMERA;
                                    } else {
                                        echo "Pendiente: 0"; }?>
                            </p>
                        </b>
                    </div>
                </div>
                <div class="row">
                    <div class="card">
                        <b>
                            <p>
                                <?php 
                                    if($fechaAplicacionPENTAVALENTESEGUNDA && $fechaAplicacionPENTAVALENTESEGUNDA != 0 && $fechaAplicacionPENTAVALENTESEGUNDA != " ") {
                                    echo "Aplicado: ", $fechaAplicacionPENTAVALENTESEGUNDA;}
                                     else {echo
                                      "Pendiente: 0"; }?>
                            </p>
                        </b>
                    </div>
                </div>
                <div class="row">
                    <div class="card">
                        <b>
                            <p>
                                <?php 
                                    if($fechaAplicacionPENTAVALENTETERCERA && $fechaAplicacionPENTAVALENTETERCERA != 0 && $fechaAplicacionPENTAVALENTETERCERA != " ") {
                                        echo "Aplicado: ", $fechaAplicacionPENTAVALENTETERCERA;
                                    } else {
                                        echo "Pendiente: 0"; }?>
                            </p>
                        </b>
                    </div>
                </div>
                <div class="row">
                    <div class="card">
                        <b>
                            <p>
                                <?php 
                                    if($fechaAplicacionPENTAVALENTECUARTA && $fechaAplicacionPENTAVALENTECUARTA != 0 && $fechaAplicacionPENTAVALENTECUARTA != " ") {
                                    echo "Aplicado: ", $fechaAplicacionPENTAVALENTECUARTA;}
                                     else {echo
                                      "Pendiente: 0"; }?>
                            </p>
                        </b>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col card text-center bg-warning">
                <div class="text-white">
                    <b>DPT</b>
                </div>
            </div>
            <div class="col card text-center">
                <div>
                    <b>DIFTERIA

                        <BR>TOS FERINA

                        <BR> Y TETANOS

                    </b>
                </div>
            </div>
            <div class="col card text-center">
                <div>
                    <b>REFUERZO</b>
                </div>
            </div>
            <div class="col card text-center">
                <div>
                    <b>4 AÑOS</b>
                </div>
            </div>
            <div class="col card text-center">
                <div>
                    <b>
                        <p>
                            <?php 
                                if($fechaAplicacionDPT && $fechaAplicacionDPT != 0 && $fechaAplicacionDPT != " ") {
                                    echo "Aplicado: ", $fechaAplicacionDPT;
                                } else {
                                    echo "Pendiente: 0"; }?>
                        </p>
                    </b>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col card text-center bg-success">
                <div class="text-white">ROTAVIRUS

                    </b>
                </div>
            </div>
            <div class="col card text-center">
                <div>
                    <b>DIARREA POR ROTAVIRUS</b>
                </div>
            </div>
            <div class="col card text-center">
                <div class="row">
                    <div class="card">
                        <b>PRIMERA</b>
                    </div>
                </div>
                <div class="row">
                    <div class="card">
                        <b>SEGUNDA</b>
                    </div>
                </div>
                <div class="row">
                    <div class="card">
                        <b>TERCERA</b>
                    </div>
                </div>
            </div>
            <div class="col card text-center">
                <div class="row">
                    <div class="card">
                        <b>2 MESES</b>
                    </div>
                </div>
                <div class="row">
                    <div class="card">
                        <b>4 MESES</b>
                    </div>
                </div>
                <div class="row">
                    <div class="card">
                        <b>6 MESES</b>
                    </div>
                </div>
            </div>
            <div class="col card text-center">
                <div class="row">
                    <div class="card">
                        <b>
                            <p>
                                <?php 
                                    if($fechaAplicacionROTAVIRUSPRIMERA && $fechaAplicacionROTAVIRUSPRIMERA != 0 && $fechaAplicacionROTAVIRUSPRIMERA != " ") {
                                    echo "Aplicado: ", $fechaAplicacionROTAVIRUSPRIMERA;}
                                     else {echo
                                      "Pendiente: 0"; }?>
                            </p>
                        </b>
                    </div>
                </div>
                <div class="row">
                    <div class="card">
                        <b>
                            <p>
                                <?php 
                                    if($fechaAplicacionROTAVIRUSSEGUNDA && $fechaAplicacionROTAVIRUSSEGUNDA != 0 && $fechaAplicacionROTAVIRUSSEGUNDA != " ") {
                                        echo "Aplicado: ", $fechaAplicacionROTAVIRUSSEGUNDA;
                                    } else {
                                        echo "Pendiente: 0"; }?>
                            </p>
                        </b>
                    </div>
                </div>
                <div class="row">
                    <div class="card">
                        <b>
                            <p>
                                <?php 
                                    if($fechaAplicacionROTAVIRUSSTERCERA && $fechaAplicacionROTAVIRUSSTERCERA != 0 && $fechaAplicacionROTAVIRUSSTERCERA != " ") {
                                    echo "Aplicado: ", $fechaAplicacionROTAVIRUSSTERCERA;}
                                     else {echo
                                      "Pendiente: 0"; }?>
                            </p>
                        </b>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col card text-center bg-info">
                <div class="text-white">
                    <b>NEUMOCOCICA

                        <BR>CONJUGADA

                    </b>
                </div>
            </div>
            <div class="col card text-center">
                <div>
                    <b>INFECCION

                        <BR> POR

                        <BR> NEUMOCOCO

                    </b>
                </div>
            </div>
            <div class="col card text-center">
                <div class="row">
                    <div class="card">
                        <b>PRIMERA</b>
                    </div>
                </div>
                <div class="row">
                    <div class="card">
                        <b>SEGUNDA</b>
                    </div>
                </div>
                <div class="row">
                    <div class="card">
                        <b>REFUERZO</b>
                    </div>
                </div>
            </div>
            <div class="col card text-center">
                <div class="row">
                    <div class="card">
                        <b>2 MESES</b>
                    </div>
                </div>
                <div class="row">
                    <div class="card">
                        <b>4 MESES</b>
                    </div>
                </div>
                <div class="row">
                    <div class="card">
                        <b>12 MESES</b>
                    </div>
                </div>
            </div>
            <div class="col card text-center">
                <div class="row">
                    <div class="card">
                        <b>
                            <p>
                                <?php 
                                    if($fechaAplicacionNEUMOCOCICAPRIMERA && $fechaAplicacionNEUMOCOCICAPRIMERA != 0 && $fechaAplicacionNEUMOCOCICAPRIMERA != " ") {
                                        echo "Aplicado: ", $fechaAplicacionNEUMOCOCICAPRIMERA;
                                    } else {
                                        echo "Pendiente: 0"; }?>
                            </p>
                        </b>
                    </div>
                </div>
                <div class="row">
                    <div class="card">
                        <b>
                            <p>
                                <?php 
                                    if($fechaAplicacionNEUMOCOCICASEGUNDA && $fechaAplicacionNEUMOCOCICASEGUNDA != 0 && $fechaAplicacionNEUMOCOCICASEGUNDA != " ") {
                                    echo "Aplicado: ", $fechaAplicacionNEUMOCOCICASEGUNDA;}
                                     else {echo
                                      "Pendiente: 0"; }?>
                            </p>
                        </b>
                    </div>
                </div>
                <div class="row">
                    <div class="card">
                        <b>
                            <p>
                                <?php 
                                    if($fechaAplicacionNEUMOCOCICATERCERA && $fechaAplicacionNEUMOCOCICATERCERA != 0 && $fechaAplicacionNEUMOCOCICATERCERA != " ") {
                                        echo "Aplicado: ", $fechaAplicacionNEUMOCOCICATERCERA;
                                    } else {
                                        echo "Pendiente: 0"; }?>
                            </p>
                        </b>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col card text-center bg-danger">
                <div class="text-white">
                    <b>INFLUENZA</b>
                </div>
            </div>
            <div class="col card text-center">
                <div>
                    <b>INFLUENZA</b>
                </div>
            </div>
            <div class="col card text-center">
                <div class="row">
                    <div class="card">
                        <b>PRIMERA</b>
                    </div>
                </div>
                <div class="row">
                    <div class="card">
                        <b>SEGUNDA</b>
                    </div>
                </div>
                <div class="row">
                    <div class="card">
                        <b>REVACUNACION</b>
                    </div>
                </div>
            </div>
            <div class="col card text-center">
                <div class="row">
                    <div class="card">
                        <b>6 MESES</b>
                    </div>
                </div>
                <div class="row">
                    <div class="card">
                        <b>7 MESES</b>
                    </div>
                </div>
                <div class="row">
                    <div class="card">
                        <b>ANUAL HASTA

                            <BR> LOS 59 MESES

                        </b>
                    </div>
                </div>
            </div>
            <div class="col card text-center">
                <div class="row">
                    <b>
                        <p>
                            <?php 
                                if($fechaAplicacionIFLUENZAPRIMERA && $fechaAplicacionIFLUENZAPRIMERA != 0 && $fechaAplicacionIFLUENZAPRIMERA != " ") {
                                echo "Aplicado: ", $fechaAplicacionIFLUENZAPRIMERA;}
                                 else {echo
                                  "Pendiente: 0"; }?>
                        </p>
                </div>
                <div class="row">
                    <div class="card">
                        <b>
                            <p>
                                <?php 
                                    if($fechaAplicacionINFLUENZASEGUNDA && $fechaAplicacionINFLUENZASEGUNDA != 0 && $fechaAplicacionINFLUENZASEGUNDA != " ") {
                                        echo "Aplicado: ", $fechaAplicacionINFLUENZASEGUNDA;
                                    } else {
                                        echo "Pendiente: 0"; }?>
                            </p>
                        </b>
                    </div>
                </div>
                <div class="row">
                    <div class="row">
                        <div class="card">
                            <b>
                                <p>
                                    <?php 
                                        if($fechaAplicacionINFLUENZATERCERA && $fechaAplicacionINFLUENZATERCERA != 0 && $fechaAplicacionINFLUENZATERCERA != " ") {
                                        echo "Aplicado: ", $fechaAplicacionINFLUENZATERCERA;}
                                         else {echo
                                          "Pendiente: 0"; }?>
                                </p>
                            </b>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col card text-center bg-primary">
                <div class="text-white">
                    <b>S R P</b>
                </div>
            </div>
            <div class="col card text-center">
                <div>
                    <b>SARAMPION

                        <BR>RUBEOLA

                        <BR>PROTIDITIS</BR>
                    </b>
                </div>
            </div>
            <div class="col card text-center">
                <div class="row">
                    <div class="card">
                        <b>PRIMERA</b>
                    </div>
                </div>
                <div class="row">
                    <div class="card">
                        <b>REFUERZO</b>
                    </div>
                </div>
            </div>
            <div class="col card text-center">
                <div class="row">
                    <div class="card">
                        <b>1 AÑO</b>
                    </div>
                </div>
                <div class="row">
                    <div class="card">
                        <b>6 AÑOS</b>
                    </div>
                </div>
            </div>
            <div class="col card text-center">
                <div class="row">
                    <div class="card">
                        <b>
                            <p>
                                <?php 
                                    if($fechaAplicacionSRPPRIMERA && $fechaAplicacionSRPPRIMERA != 0 && $fechaAplicacionSRPPRIMERA != " ") {
                                        echo "Aplicado: ", $fechaAplicacionSRPPRIMERA;
                                    } else {
                                        echo "Pendiente: 0"; }?>
                            </p>
                        </b>
                    </div>
                </div>
                <div class="row">
                    <div class="card">
                        <b>
                            <p>
                                <?php 
                                    if($fechaAplicacionSRPSEGUNDA && $fechaAplicacionSRPSEGUNDA != 0 && $fechaAplicacionSRPSEGUNDA != " ") {
                                    echo "Aplicado: ", $fechaAplicacionSRPSEGUNDA;}
                                     else {echo
                                      "Pendiente: 0"; }?>
                            </p>
                        </b>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col card text-center bg-secondary">
                <div class="text-white">
                    <b>SABIN</b>
                </div>
            </div>
            <div class="col-sm card text-center">
                <div>
                    <b>POLEOMELITIS</b>
                </div>
            </div>
            <div class="col-sm card text-center">
                <div>
                    <b>ADICIONALES</b>
                </div>
            </div>
            <div class="col card text-center">
                <div>
                    <b>
                        <p>
                            <?php 
                                if($fechaAplicacionSABIN && $fechaAplicacionSABIN != 0 && $fechaAplicacionSABIN != " ") {
                                    echo "Aplicado: ", $fechaAplicacionSABIN;
                                } else {
                                    echo "Pendiente: 0"; }?>
                        </p>
                    </b>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col card text-center bg-success">
                <div class="text-white">
                    <b>S R</b>
                </div>
            </div>
            <div class="col-sm card text-center">
                <div>
                    <b>SARAMPION

                        <BR> Y ER¿RUBEOLA

                    </b>
                </div>
            </div>
            <div class="col-sm card text-center">
                <div>
                    <b>ADICIONALES</b>
                </div>
            </div>
            <div class="col card text-center">
                <div>
                    <b>
                        <p>
                            <?php 
                                if($fechaAplicacionSRPPRIMERAA && $fechaAplicacionSRPPRIMERAA != 0 && $fechaAplicacionSRPPRIMERAA != " ") {
                                echo "Aplicado: ", $fechaAplicacionSRPPRIMERAA;}
                                 else {echo
                                  "Pendiente: 0"; }?>
                        </p>
                    </b>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col card text-center bg-danger">
                <div class="text-white">
                    <b>OTRAS

                        <BR>VACUNAS

                    </b>
                </div>
            </div>
            <div class="col card text-center">
                <div class="row">
                    <div class="card">
                        <b>PRIMERA</b>
                    </div>
                </div>
                <div class="row">
                    <div class="card">
                        <b>PRIMERA</b>
                    </div>
                </div>
                <div class="row">
                    <div class="card">
                        <b>PRIMERA</b>
                    </div>
                </div>
            </div>
            <div class="col card text-center">
                <div class="row">
                    <div class="card">
                        <b>PRIMERA</b>
                    </div>
                </div>
                <div class="row">
                    <div class="card">
                        <b>PRIMERA</b>
                    </div>
                </div>
                <div class="row">
                    <div class="card">
                        <b>PRIMERA</b>
                    </div>
                </div>
            </div>
            <div class="col card text-center">
                <div class="row">
                    <div class="card">
                        <b>PRIMERA</b>
                    </div>
                </div>
                <div class="row">
                    <div class="card">
                        <b>PRIMERA</b>
                    </div>
                </div>
                <div class="row">
                    <div class="card">
                        <b>PRIMERA</b>
                    </div>
                </div>
            </div>
            <div class="col card text-center">
                <div class="row">
                    <div class="card">
                        <b>
                            <p>
                                <?php 
                                    if($fechaAplicacionOtrasVacunasPrimera && $fechaAplicacionOtrasVacunasPrimera != 0 && $fechaAplicacionOtrasVacunasPrimera != " ") {
                                        echo "Aplicado: ", $fechaAplicacionOtrasVacunasPrimera;
                                    } else {
                                        echo "Pendiente: 0"; }?>
                            </p>
                        </b>
                    </div>
                </div>
                <div class="row">
                    <div class="card">
                        <b>
                            <p>
                                <?php 
                                    if($fechaAplicacionOtrasVacunasSegunda && $fechaAplicacionOtrasVacunasSegunda != 0 && $fechaAplicacionOtrasVacunasSegunda != " ") {
                                    echo "Aplicado: ", $fechaAplicacionOtrasVacunasSegunda;}
                                     else {echo
                                      "Pendiente: 0"; }?>
                            </p>
                        </b>
                    </div>
                </div>
                <div class="row">
                    <div class="card">
                        <b>
                            <p>
                                <?php 
                                    if($fechaAplicacionOtrasVacunasTercera && $fechaAplicacionOtrasVacunasTercera != 0 && $fechaAplicacionOtrasVacunasTercera != " ") {
                                        echo "Aplicado: ", $fechaAplicacionOtrasVacunasTercera;
                                    } else {
                                        echo "Pendiente: 0"; }?>
                            </p>
                        </b>
                    </div>
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
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
        crossorigin="anonymous"></script>
</body>
</html>
