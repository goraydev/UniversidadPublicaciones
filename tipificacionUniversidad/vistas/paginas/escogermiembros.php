<!-- Para evitar el ingreso a esta página mediante la URL -->
<?php

require "conexion.php";
$sql = "SELECT * FROM v_cuentasper WHERE fk_rol NOT IN(1,4)";
$resultado = $mysqli->query($sql);


if ($admin["fk_rol"] != 1) {
    echo '<script> window.location = "inicio" </script>';
    return;
}


?>
<div class="content-wrapper" style="min-height: 1761.5px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Escoger miembros</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="inicio">Inicio</a></li>
                        <li class="breadcrumb-item active">Escoger miembros</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Default box -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Docentes</h3>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-striped dt-responsive tablaResultados" width="100%" id="TablaResultados">
                                <thead>
                                    <tr>
                                        <th>Código</th>
                                        <th>Docente</th>
                                        <th>Cargo</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody id="myTable">
                                    <?php
                                    while ($row = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>
                                        <tr>
                                            <td><?php echo $row['codidentificacion'] ?></td>
                                            <td><?php echo $row['Personas'] ?></td>
                                            <td><?php if ($row['fk_rol'] != 3) {
                                                    echo "<button class='btn btn-warning btn-sm'>" . $row['tipo'] . "</button>";
                                                } else {
                                                    echo "<button class='btn btn-secondary btn-sm'>" .  $row['tipo'] . "</button>";
                                                } ?></td>
                                            <td>
                                                <button class='btn btn-primary btn-sm'><a href="modificarCuenta.php?codIdentificacion=<?php echo $row['codidentificacion']; ?>"><i class="far fa-edit text-white"></i></a></button>
                                            </td>

                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            Nota: Los miembros de tipificación escogidos ahora serán retirados de su cargo automáticamente pasado un año
                        </div>
                        <!-- /.card-footer-->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>