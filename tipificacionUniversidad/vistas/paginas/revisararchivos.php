<div class="content-wrapper" style="min-height: 1761.5px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Revisar archivos</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="inicio">Inicio</a></li>
                        <li class="breadcrumb-item active">Revisar archivos</li>
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
                            <h3 class="card-title">Publicaciones recientes</h3>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-striped dt-responsive tablaResultados" width="100%" id="TablaResultados">
                                <thead>
                                    <tr>
                                        <th>Publicación</th>
                                        <th>Descargar</th>
                                        <th>Calificar</th>
                                        <th>Puntaje</th>
                                        <th>Observación</th>
                                    </tr>
                                </thead>
                                <tbody id="myTable">
                                    <tr>
                                        <td>¿Cómo instalar correctamente Proteus?</td>
                                        <td><button class="btn btn-success">Descargar archivo</button></td>
                                        <td><button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#subirObservacion">Calificar</button></td>
                                        <td>Falta calificación</td>
                                        <td><button class="btn btn-warning">
                                                <div class="form-group">

                                                    <div class="form-group my-2">

                                                        <div class="btn btn-default btn-file">

                                                            <i class="fas fa-paperclip"></i> Adjuntar archivo

                                                            <input type="file" name="subirArchivo" accept=".pdf">

                                                        </div>
                                                    </div>
                                                </div>
                                            </button>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>¿Cómo instalar correctamente Proteus?</td>
                                        <td><button class="btn btn-success">Descargar archivo</button></td>
                                        <td><button class="btn btn-secondary">Calificado</button></td>
                                        <td>95</td>
                                        <td><button class="btn btn-warning">
                                                <div class="form-group">

                                                    <div class="form-group my-2">

                                                        <div class="btn btn-default btn-file">

                                                            <i class="fas fa-paperclip"></i> Adjuntar archivo

                                                            <input type="file" name="subirArchivo" accept=".pdf">

                                                        </div>
                                                    </div>
                                                </div>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            Footer
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

<!-- Ventana modal para subir una observación -->
<div class="modal fade" id="subirObservacion" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="" method="POST">
                <div class="modal-header bg-secondary">
                    <h5 class="modal-title" id="staticBackdropLabel">Subir nueva observación</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- preguntas sobre el cumplimiento de la publicación -->
                    <div class="row input-group-text">
                        <div class="col">
                            <span>¿Cumple con el tipo de letra?</span>
                        </div>
                        <div class="col">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="tipoLetra" id="tipoLetra1" value="option1">
                                <label class="form-check-label" for="tipoLetra1">Sí</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="tipoLetra" id="tipoLetra2" value="option2">
                                <label class="form-check-label" for="tipoLetra2">No</label>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row input-group-text">
                        <div class="col">
                            <span>¿Cumple con el máximo de páginas?</span>
                        </div>
                        <div class="col">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="maxPaginas" id="maxPaginas1" value="option1">
                                <label class="form-check-label" for="maxPaginas1">Sí</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="maxPaginas" id="maxPaginas2" value="option2">
                                <label class="form-check-label" for="maxPaginas2">No</label>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row input-group">
                        <span>Total: <strong>--</strong></span>
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