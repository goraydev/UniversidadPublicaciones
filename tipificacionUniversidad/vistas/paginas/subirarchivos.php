<!-- Para evitar el ingreso a esta página mediante la URL -->
<?php

require "conexion.php";
$idDocente =  $docente["coddocent"];
$sql = "SELECT * FROM v_archivos WHERE coddocent = '$idDocente'";
$resultado = $mysqli->query($sql);

if ($admin["fk_rol"] != 3) {
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
                    <h1>Subir Archivos</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="inicio">Inicio</a></li>
                        <li class="breadcrumb-item active">Archivos nuevos</li>
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
                            <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#subirArchivo">
                                Nueva publicación
                            </button>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-striped dt-responsive tablaSubirArchivos" width="100%" id="TablaSubirArchivos">
                                <thead>
                                    <tr>
                                        <th>Código</th>
                                        <th>Publicación</th>
                                        <th>Tipo</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody id="myTable">
                                    <?php
                                    while ($row = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>
                                        <tr>
                                            <td><?php echo $row['codarchivo'] ?></td>
                                            <td><?php echo $row['titulo'] ?></td>
                                            <td><?php echo $row['formato'] ?></td>
                                            <td>
                                                <button class='btn btn-danger btn-sm'><a href="#" data-href="eliminarArchivoSubido.php?codArchivo=<?php echo $row['codarchivo']; ?>" data-bs-toggle="modal" data-bs-target="#confirm-delete"><i class="fas fa-trash-alt text-white"></i></a></button>
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
                            Los calificación de sus publicaciones lo puede ver en la sección de ver resultados
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

<!-- Para la ventan modal de eliminar reservas -->
<div class="modal fade" tabindex="-1" id="confirm-delete" aria-labelledby="myModalLabel" aria-hidden="true" role="dialog">
    <div class="modal-dialog">
        <form action="eliminarArchivoSubido.php" method="post">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Eliminación de archivos</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>¿Desea eliminar el archivo?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cancelar</button>
                    <a class="btn btn-danger btn-ok">Eliminar</a>
                </div>
            </div>
        </form>
    </div>
</div>
<script>
    $('#confirm-delete').on('shown.bs.modal', function(e) {
        $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));

        $('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
    });
</script>



<!-- Venta modal para subir un nuevo archivo -->
<div class="modal fade" id="subirArchivo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="modal-header bg-secondary">
                    <h5 class="modal-title" id="staticBackdropLabel">Subir nuevo archivo</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Input nombre -->
                    <div class="input-group mb-3">
                        <div class="input-group-append input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                        <input type="text" class="form-control" name="registroDocente" placeholder="Ingresa el nombre" value="<?php echo $docente["coddocent"]; ?>" readonly>
                    </div>

                    <!-- Input archivo -->
                    <div class="input-group mb-4">

                        <div class="input-group-append input-group-text">
                            <span class="fas fa-file-pdf"></span>
                        </div>

                        <input type="text" class="form-control" name="registroPublicacion" placeholder="Ingresa el nombre de la publicación" required>

                    </div>
                    <div class="input-group mb-3">

                        <div class="input-group-append input-group-text">

                            <span class="fas fa-book"></span>
                        </div>

                        <select class="form-control" name="registroTipo" required>

                            <option value="" disabled selected>Seleccione tipo</option>

                            <option value="1">Libro</option>

                            <option value="2">Manual</option>
                            <option value="3">Guías</option>
                            <option value="4">Folletos</option>
                            <option value="5">Ensayos</option>

                        </select>

                    </div>

                    <div class="form-group">

                        <div class="form-group my-2">

                            <div class="btn btn-default btn-file">

                                <i class="fas fa-paperclip"></i> Adjuntar archivo

                                <input type="file" name="subirArchivo" accept=".pdf">

                            </div>

                            <p class="help-block small">Peso Max. 10MB | Formato: PDF</p>

                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
                <?php
                $nuevoarchivo = new ControladorSubirArchivos();
                $nuevoarchivo->ctrRegistroSubirArchivos();
                ?>
            </form>
        </div>
    </div>
</div>