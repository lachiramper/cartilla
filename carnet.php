<html>
<head>
    <title>Carnet</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
<div class="container">

    <?php
        $curp = $_GET['curp'];
        $apellidoPaterno = $_GET['apellidoPaterno'];
        $apellidoMaterno = $_GET['apellidoMaterno'];
        $nombre = $_GET['nombre'];
        $matricula = $_GET['matricula'];
        $unidadMedica = $_GET['unidadMedica'];
        $edad = $_GET['edad'];
        $sexo = $_GET['sexo'];
        $domicilio = $_GET['domicilio'];
        $calle = $_GET['calle'];
        $colonia = $_GET['colonia'];
        $municipio = $_GET['municipio'];
        $cp = $_GET['cp'];
        $entidadFederativa = $_GET['entidadFederativa'];
        $fechaRegistro = $_GET['fechaRegistro'];
        $estatura = $_GET['estatura'];
        $peso = $_GET['peso'];
    ?>
    <div class="row">
        <div class="col-1"></div>
        <div class="col">
            <div class="alert alert-success text-center">
                <b>Cartilla de Vacunacion</b>
            </div>
            <ul class="list-group">
                <li class="list-group-item active text-center"><b><?php echo  $apellidoPaterno, ' ', $apellidoMaterno,' ',$nombre?></b></li>
                <li class="list-group-item"><b>CURP: </b><?php echo $curp?></li>
                <li class="list-group-item"><b>Matricula: </b><?php echo $matricula?></li>
                <li class="list-group-item"><b>Unidad de Medica: </b><?php echo $unidadMedica?></li>
                <li class="list-group-item"><b>Edad: </b><?php echo $edad?></li>
                <li class="list-group-item"><b>Sexo: </b><?php echo $sexo?></li>
                <li class="list-group-item"><b>Domicilio: </b><?php echo $domicilio?></li>
                <li class="list-group-item"><b>Calle: </b><?php echo $calle?></li>
                <li class="list-group-item"><b>Colonia: </b><?php echo $colonia?></li>
                <li class="list-group-item"><b>Municipio: </b><?php echo $municipio?></li>
                <li class="list-group-item"><b>CP: </b><?php echo $cp?></li>
                <li class="list-group-item"><b>Entidad de Federativa: </b><?php echo $entidadFederativa?></li>
                <li class="list-group-item"><b>Fecha de Registro: </b><?php echo $fechaRegistro?></li>
                <li class="list-group-item"><b>Estatura: </b><?php echo $estatura?></li>
                <li class="list-group-item"><b>Peso: </b><?php echo $peso?></li>
        </div>
        <form method="get" action="cartillaFormulario.php">
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
    <div class="col-3"></div>
</div>


<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
        crossorigin="anonymous"></script>
</body>
</html>
