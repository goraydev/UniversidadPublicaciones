<!-- Para evitar el ingreso a esta página mediante la URL -->
<?php
if ($admin["fk_rol"] != 4) {
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
                    <h1>Gestor de roles</h1>
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
                            <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#nuevoRol">
                                Nuevo rol
                            </button>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-striped dt-responsive tablaSubirArchivos" width="100%" id="TablaSubirArchivos">
                                <thead>
                                    <tr>
                                        <th>Código</th>
                                        <th>Rol</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody id="myTable">
                                    <tr>
                                        <td>1</td>
                                        <td>Director</td>
                                        <td>
                                            <div class="btn-group" role="group">
                                                <button type="button" class="btn btn-primary"><i class="fas fa-edit"></i></button>
                                                <button type="button" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Docente</td>
                                        <td>
                                            <div class="btn-group" role="group">
                                                <button type="button" class="btn btn-primary"><i class="fas fa-edit"></i></button>
                                                <button type="button" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Presidente</td>
                                        <td>
                                            <div class="btn-group" role="group">
                                                <button type="button" class="btn btn-primary"><i class="fas fa-edit"></i></button>
                                                <button type="button" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>

<!-- Venta modal para subir un nuevo archivo -->
<div class="modal fade" id="nuevoRol" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="" method="POST">
                <div class="modal-header bg-secondary">
                    <h5 class="modal-title" id="staticBackdropLabel">Crear nueva escuela</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Input archivo -->
                    <div class="input-group mb-4">

                        <div class="input-group-append input-group-text">
                            <span class="fas fa-users-cog"></span>
                        </div>

                        <input type="text" class="form-control" name="registroRol" placeholder="Ingrese nombre de rol" required>

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