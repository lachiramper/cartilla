<html>
<head>
    <title>Clinica Medica</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-3"></div>
        <div class="col">
            <div class="alert alert-success text-center">
                <b>Cartillas de Vacunacion</b>
            </div>
            <div class="card">
                <form method="get" action="carnet.php">
                    <div class="card-header text-center">
                        <b>Datos del paciente</b>
                    </div>
                    <div class="card-content">
                        <div class="m-2">
                            <label for="curp" class="form-label">CURP</label>
                            <input type="text" class="form-control" id="curp" required>
                        </div>
                        <div class="m-2">
                            <label for="apellidoPaterno" class="form-label">Apellido Paterno</label>
                            <input type="text" class="form-control" id="apellidoPaterno" required>
                        </div>
                        <div class="m-2">
                            <label for="apellidoMaterno" class="form-label">Apellido Materno</label>
                            <input type="text" class="form-control" id="apellidoMaterno" required>
                        </div>
                        <div class="m-2">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="nombre" required>
                        </div>
                        <div class="m-2">
                            <label for="matricula" class="form-label">Matricula</label>
                            <input type="text" class="form-control" id="matricula" required>
                        </div>
                        <div class="m-2">
                            <label for="unidadMedica" class="form-label">Unidad Medica</label>
                            <input type="text" class="form-control" id="unidadMedica" required>
                        </div>
                        <div class="m-2">
                            <label for="edad" class="form-label">Edad</label>
                            <input type="text" class="form-control" id="edad" required>
                        </div>
                        <div class="m-2">
                            <label for="sexo" class="form-label">Sexo</label>
                            <input type="text" class="form-control" id="sexo" required>
                        </div>
                        <div class="m-2">
                            <label for="domicilio" class="form-label">Domicilio</label>
                            <input type="text" class="form-control" id="domicilio" required>
                        </div>
                        <div class="m-2">
                            <label for="calle" class="form-label">Calle</label>
                            <input type="text" class="form-control" id="calle" required>
                        </div>
                        <div class="m-2">
                            <label for="colonia" class="form-label">Colonia</label>
                            <input type="text" class="form-control" id="colonia" required>
                        </div>
                        <div class="m-2">
                            <label for="municipio" class="form-label">Municipio</label>
                            <input type="text" class="form-control" id="municipio" required>
                        </div>
                        <div class="m-2">
                            <label for="cp" class="form-label">Codigo Postal</label>
                            <input type="text" class="form-control" id="cp" required>
                        </div>
                        <div class="m-2">
                            <label for="entidadFederativa" class="form-label">Entidad Federativa</label>
                            <input type="text" class="form-control" id="entidadFederativa" required>
                        </div>
                        <div class="m-2">
                            <label for="Fecha de registro" class="form-label">Fecha de Registro</label>
                            <input type="text" class="form-control" id="Fecha de registro" required>
                        </div>
                        <div class="m-2">
                            <label for="Estatura" class="form-label">Estatura</label>
                            <input type="text" class="form-control" id="Fecha de registro" required>
                        </div>
                        <div class="m-2">
                            <label for="Peso" class="form-label">Peso</label>
                            <input type="text" class="form-control" id="Peso" required>
                        </div>

                    </div>
            </div>
            <div class="card-footer">
                <div class="row">
                    <div class="col-8"></div>
                    <div class="col">
                        <button class="btn btn-danger btn-sm">Cancelar</button>
                        <button class="btn btn-primary btn-sm" value="guardar">Guardar</button>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
    <div class="col-3"></div>
</div>
</div>


<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
        crossorigin="anonymous"></script>
</body>
</html>
