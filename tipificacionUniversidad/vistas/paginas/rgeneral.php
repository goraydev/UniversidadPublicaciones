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
                    <h1>Ranking general</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="inicio">Inicio</a></li>
                        <li class="breadcrumb-item active">Ranking general</li>
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
                        <div class="card-body">
                            <table class="table table-bordered table-striped dt-responsive tablaResultados" width="100%" id="TablaResultados">
                                <thead>
                                    <tr>
                                        <th>Publicación</th>
                                        <th>Resultado</th>
                                        <th>Año</th>
                                    </tr>
                                </thead>
                                <tbody id="myTable">
                                    <tr>
                                        <td>Las matemáticas son tus amigas</td>
                                        <td>98</td>
                                        <td>2019</td>

                                    </tr>
                                    <tr>
                                        <td>¿Qué son las computadoras cuánticas?</td>
                                        <td>88</td>
                                        <td>2019</td>
                                    </tr>
                                    <tr>
                                        <td>Estadística para todos</td>
                                        <td>85</td>
                                        <td>2020</td>
                                    </tr>
                                    <tr>
                                        <td>Los algoritmos</td>
                                        <td>78</td>
                                        <td>2021</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            El rankig general de todas las publicaciones esta basada en la calificación brindada por los miembros de tipificación
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