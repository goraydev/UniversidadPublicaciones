<?php
require "conexion.php";

$codIdentificacion = $_GET["codIdentificacion"];
$sql = "SELECT * FROM v_cuentasper WHERE codidentificacion = '$codIdentificacion'";
$resultado = $mysqli->query($sql);
$row = $resultado->fetch_array(MYSQLI_ASSOC);


/* guardamos en una variable el rol que tiene la persona en ese mommento */
$fkRol = $row["fk_rol"];

$sql2 = "SELECT * FROM rol WHERE id_rol NOT IN('$fkRol',1,2,4)";
$resultado2 = $mysqli->query($sql2);


$sql3 = "SELECT * FROM v_cuentasper WHERE fk_rol = '5'";
$resultado3 = $mysqli->query($sql3);

?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="vistas/img/plantilla/cooking.svg" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="zmfNZmXoNWBMemUOo1XUGFfc0ihGGLYdgtJS3KCr/l0=">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <title>Actualizar cargos</title>
</head>

<body>
    <div class="container" style="display: flex; flex-direction: column;align-items: center;">
        <div class=" row">
            <h3>Actualizar cargos</h3>
        </div>
        <div class="card" style="width: 50rem;">
            <div class="card-body">
                <form class="row g-3" method="POST" action="updateCuenta.php" autocomplete="off">
                    <h5>Datos del docente</h5>
                    <div class="col-md-3">
                        <label for="dirCliente" class="form-label">Código</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="telCliente" name="codPersona" value="<?php echo $row["codidentificacion"]; ?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="nombreCliente" class="form-label">Persona</label>
                        <input type="text" class="form-control" id="nombreCliente" name="Persona" value="<?php echo $row["Personas"]; ?>" readonly>
                    </div>


                    <div class="col-md-3">
                        <label for="validationDefault04" class="form-label">Cargo</label>
                        <select class="form-select" name="modificarCargo" id="validationDefault04">
                            <option disabled value="">Seleccione cargo</option>
                            <option value="<?php echo $row["fk_rol"]; ?>" selected><?php echo $row["tipo"]; ?></option>
                            <?php


                            if ($resultado2) {
                                while ($row2 = $resultado2->fetch_array(MYSQLI_ASSOC)) {
                                    echo "<option value='" . $row2['id_rol'] . "'>" . $row2['tipo'] . "</option>";
                                }
                            }

                            ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-2">
                            <a href="escogermiembros" class="btn btn-default">Regresar</a>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
</body>

</html>