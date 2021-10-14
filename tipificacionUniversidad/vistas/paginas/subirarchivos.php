<!-- Para evitar el ingreso a esta página mediante la URL -->
<?php
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
                                        <th>Publicación</th>
                                        <th>Tipo</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody id="myTable">
                                    <tr>
                                        <td>Los algoritmos</td>
                                        <td>Ensayo</td>
                                        <td><button class="btn btn-primary btn-sm">editar</button>
                                            <button class="btn btn-danger btn-sm">eliminar</button>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>SQL vs NOSQL</td>
                                        <td>Libro</td>
                                        <td><button class="btn btn-primary btn-sm">editar</button>
                                            <button class="btn btn-danger btn-sm">eliminar</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Aprende calculo I</td>
                                        <td>Libro</td>
                                        <td><button class="btn btn-primary btn-sm">editar</button>
                                            <button class="btn btn-danger btn-sm">eliminar</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            La calificación de sus publicaciones lo puede ver en la sección de ver resultados
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

<!-- Venta modal para subir un nuevo archivo -->
<div class="modal fade" id="subirArchivo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="" method="POST">
                <div class="modal-header bg-secondary">
                    <h5 class="modal-title" id="staticBackdropLabel">Subir nuevo archivo</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
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

                            <option value="">Libro</option>

                            <option value="">Ensayo</option>

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
            </form>
        </div>
    </div>
</div>