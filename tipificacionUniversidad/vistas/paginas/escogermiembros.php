<!-- Para evitar el ingreso a esta página mediante la URL -->
<?php
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
                                        <th>Docente</th>
                                        <th>Estado</th>
                                        <th>Cargo</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody id="myTable">
                                    <tr>
                                        <td>Mario Ninaquispe</td>
                                        <td><button class="btn btn-success">Activo</button></td>
                                        <td><button class="btn btn-warning">Presidente</button></td>
                                        <td>
                                            <div class="btn-group" role="group">
                                                <button type="button" class="btn btn-primary"><i class="fas fa-edit"></i></button>
                                                <button type="button" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>Robby Lugo Vargas</td>
                                        <td><button class="btn btn-success">Activo</button></td>
                                        <td><button class="btn btn-warning">Secretario</button></td>
                                        <td>
                                            <div class="btn-group" role="group">
                                                <button type="button" class="btn btn-primary"><i class="fas fa-edit"></i></button>
                                                <button type="button" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Coral villanueva</td>
                                        <td><button class="btn btn-success">Activo</button></td>
                                        <td><button class="btn btn-warning">Vocal</button></td>
                                        <td>
                                            <div class="btn-group" role="group">
                                                <button type="button" class="btn btn-primary"><i class="fas fa-edit"></i></button>
                                                <button type="button" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Miguel Silva Zapata</td>
                                        <td><button class="btn btn-secondary">Desactivado</button></td>
                                        <td><button class="btn btn-dark">Ninguno</button></td>
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