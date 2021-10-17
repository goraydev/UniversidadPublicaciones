<!-- Para evitar el ingreso a esta página mediante la URL -->
<?php
if (($admin["fk_rol"] != 1) || ($admin["fk_rol"] != 3) || ($admin["fk_rol"] != 4)) {
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
                                        <th>Tipo</th>
                                        <th>Descargar</th>
                                        <th>Calificar</th>
                                        <th>Puntaje</th>
                                        <th>Observación</th>
                                    </tr>
                                </thead>
                                <tbody id="myTable">
                                    <tr>
                                        <td>¿Cómo instalar correctamente Proteus?</td>
                                        <td>Manual</td>
                                        <td><button class="btn btn-success">Descargar archivo</button></td>
                                        <td><button class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#subirObservacionM">Calificar</button></td>
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
                                        <td>La física</td>
                                        <td>Libro</td>
                                        <td><button class="btn btn-success">Descargar archivo</button></td>
                                        <td><button class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#subirObservacionL">Calificar</button></td>
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
                                        <td>La estadística</td>
                                        <td>Ensayo</td>
                                        <td><button class="btn btn-success">Descargar archivo</button></td>
                                        <td><button class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#subirObservacionE">Calificar</button></td>
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
                                        <td>La estadística</td>
                                        <td>Folleto</td>
                                        <td><button class="btn btn-success">Descargar archivo</button></td>
                                        <td><button class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#subirObservacionF">Calificar</button></td>
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
                                        <td>La libertad</td>
                                        <td>Guía</td>
                                        <td><button class="btn btn-success">Descargar archivo</button></td>
                                        <td><button class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#subirObservacionG">Calificar</button></td>
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
                                        <td>La botella</td>
                                        <td>Libro</td>
                                        <td><button class="btn btn-success">Descargar archivo</button></td>
                                        <td><button class="btn btn-primary">Calificado</button></td>
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

<!-- Ventana modal para subir una observación de LIBRO -->
<div class="modal fade" id="subirObservacionL" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="" method="POST">
                <div class="modal-header bg-secondary">
                    <h5 class="modal-title" id="staticBackdropLabel">Subir nueva observación - Libro</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- preguntas sobre el cumplimiento de la publicación -->
                    <div class="row input-group-text">
                        <div class="col">
                            <span>¿Cumple con las características designadas para las publicaciones?</span>
                        </div>
                        <div class="col">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="general" id="general0" value="option0">
                                <label class="form-check-label" for="general0">0</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="general" id="general1" value="option1">
                                <label class="form-check-label" for="general2">1</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="general" id="general2" value="option2">
                                <label class="form-check-label" for="general3">2</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="general" id="general3" value="option3">
                                <label class="form-check-label" for="general3">3</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="general" id="general4" value="option4">
                                <label class="form-check-label" for="general4">4</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="general" id="general5" value="option5">
                                <label class="form-check-label" for="general5">5</label>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row input-group-text">
                        <div class="col">
                            <span>¿El libro esta dentro del campo de acción del docente?</span>
                        </div>
                        <div class="col">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="campoAccion" id="campoAccion0" value="option0">
                                <label class="form-check-label" for="campoAccion0">0</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="campoAccion" id="campoAccion1" value="option1">
                                <label class="form-check-label" for="campoAccion2">1</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="campoAccion" id="campoAccion2" value="option2">
                                <label class="form-check-label" for="campoAccion3">2</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="campoAccion" id="campoAccion3" value="option3">
                                <label class="form-check-label" for="campoAccion3">3</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="campoAccion" id="campoAccion4" value="option4">
                                <label class="form-check-label" for="campoAccion4">4</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="campoAccion" id="campoAccion5" value="option5">
                                <label class="form-check-label" for="campoAccion5">5</label>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row input-group-text">
                        <div class="col">
                            <span>¿Cumple con las características generales que debe poseer un libro?</span>
                        </div>
                        <div class="col">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="caracteristicaLibro" id="caracteristicaLibro0" value="option0">
                                <label class="form-check-label" for="caracteristicaLibro0">0</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="caracteristicaLibro" id="caracteristicaLibro1" value="option1">
                                <label class="form-check-label" for="caracteristicaLibro2">1</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="caracteristicaLibro" id="caracteristicaLibro2" value="option2">
                                <label class="form-check-label" for="caracteristicaLibro3">2</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="caracteristicaLibro" id="caracteristicaLibro3" value="option3">
                                <label class="form-check-label" for="caracteristicaLibro3">3</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="caracteristicaLibro" id="caracteristicaLibro4" value="option4">
                                <label class="form-check-label" for="caracteristicaLibro4">4</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="caracteristicaLibro" id="caracteristicaLibro5" value="option5">
                                <label class="form-check-label" for="caracteristicaLibro5">5</label>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row input-group-text">
                        <div class="col">
                            <span>¿Cumple con la estructura mínima que debe cumplir un libro?</span>
                        </div>
                        <div class="col">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="estructuraLibro" id="estructuraLibro0" value="option0">
                                <label class="form-check-label" for="estructuraLibro0">0</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="estructuraLibro" id="estructuraLibro1" value="option1">
                                <label class="form-check-label" for="estructuraLibro2">1</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="estructuraLibro" id="estructuraLibro2" value="option2">
                                <label class="form-check-label" for="estructuraLibro3">2</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="estructuraLibro" id="estructuraLibro3" value="option3">
                                <label class="form-check-label" for="estructuraLibro3">3</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="estructuraLibro" id="estructuraLibro4" value="option4">
                                <label class="form-check-label" for="estructuraLibro4">4</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="estructuraLibro" id="estructuraLibro5" value="option5">
                                <label class="form-check-label" for="estructuraLibro5">5</label>
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

<!-- Ventana modal para subir una observación de Manual -->
<div class="modal fade" id="subirObservacionM" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="" method="POST">
                <div class="modal-header bg-secondary">
                    <h5 class="modal-title" id="staticBackdropLabel">Subir nueva observación - Manual</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- preguntas sobre el cumplimiento de la publicación -->
                    <div class="row input-group-text">
                        <div class="col">
                            <span>¿Cumple con las características designadas para las publicaciones?</span>
                        </div>
                        <div class="col">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="general" id="general0" value="option0">
                                <label class="form-check-label" for="general0">0</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="general" id="general1" value="option1">
                                <label class="form-check-label" for="general2">1</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="general" id="general2" value="option2">
                                <label class="form-check-label" for="general3">2</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="general" id="general3" value="option3">
                                <label class="form-check-label" for="general3">3</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="general" id="general4" value="option4">
                                <label class="form-check-label" for="general4">4</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="general" id="general5" value="option5">
                                <label class="form-check-label" for="general5">5</label>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row input-group-text">
                        <div class="col">
                            <span>¿El manual contiene , ejemplos resueltos , ejercicios propuestos<br> y/o cuestionarios?</span>
                        </div>
                        <div class="col">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="ejemManual" id="ejemManual0" value="option0">
                                <label class="form-check-label" for="ejemManual0">0</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="ejemManual" id="ejemManual1" value="option1">
                                <label class="form-check-label" for="ejemManual2">1</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="ejemManual" id="ejemManual2" value="option2">
                                <label class="form-check-label" for="ejemManual3">2</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="ejemManual" id="ejemManual3" value="option3">
                                <label class="form-check-label" for="ejemManual3">3</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="ejemManual" id="ejemManual4" value="option4">
                                <label class="form-check-label" for="ejemManual4">4</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="ejemManual" id="ejemManual5" value="option5">
                                <label class="form-check-label" for="ejemManual5">5</label>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row input-group-text">
                        <div class="col">
                            <span>¿Contiene el mínimo numero de páginas (80 páginas)?</span>
                        </div>
                        <div class="col">
                            <!-- No = 0, Si = 5 -->
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="minNumManual" id="minNumManual0" value="option0">
                                <label class="form-check-label" for="minNumManual0">No</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="minNumManual" id="minNumManual1" value="option1">
                                <label class="form-check-label" for="minNumManual2">Sí</label>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row input-group-text">
                        <div class="col">
                            <span>¿Cumple con la estructura mínima que debe cumplir un manual?</span>
                        </div>
                        <div class="col">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="estructuraManual" id="estructuraManual0" value="option0">
                                <label class="form-check-label" for="estructuraManual0">0</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="estructuraManual" id="estructuraManual1" value="option1">
                                <label class="form-check-label" for="estructuraManual2">1</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="estructuraManual" id="estructuraManual2" value="option2">
                                <label class="form-check-label" for="estructuraManual3">2</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="estructuraManual" id="estructuraManual3" value="option3">
                                <label class="form-check-label" for="estructuraManual3">3</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="estructuraManual" id="estructuraManual4" value="option4">
                                <label class="form-check-label" for="estructuraManual4">4</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="estructuraManual" id="estructuraManual5" value="option5">
                                <label class="form-check-label" for="estructuraManual5">5</label>
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

<!-- Ventana modal para subir una observación de Ensayos -->
<div class="modal fade" id="subirObservacionE" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="" method="POST">
                <div class="modal-header bg-secondary">
                    <h5 class="modal-title" id="staticBackdropLabel">Subir nueva observación - Ensayos</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- preguntas sobre el cumplimiento de la publicación -->
                    <div class="row input-group-text">
                        <div class="col">
                            <span>¿Cumple con las características designadas para las publicaciones?</span>
                        </div>
                        <div class="col">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="general" id="general0" value="option0">
                                <label class="form-check-label" for="general0">0</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="general" id="general1" value="option1">
                                <label class="form-check-label" for="general2">1</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="general" id="general2" value="option2">
                                <label class="form-check-label" for="general3">2</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="general" id="general3" value="option3">
                                <label class="form-check-label" for="general3">3</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="general" id="general4" value="option4">
                                <label class="form-check-label" for="general4">4</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="general" id="general5" value="option5">
                                <label class="form-check-label" for="general5">5</label>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row input-group-text">
                        <div class="col">
                            <span>¿El ensayo cumple en ejercitar la intuición analítica y prospectiva?</span>
                        </div>
                        <div class="col">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="cumEnsayo" id="cumEnsayo0" value="option0">
                                <label class="form-check-label" for="cumEnsayo0">0</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="cumEnsayo" id="cumEnsayo1" value="option1">
                                <label class="form-check-label" for="cumEnsayo2">1</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="cumEnsayo" id="cumEnsayo2" value="option2">
                                <label class="form-check-label" for="cumEnsayo3">2</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="cumEnsayo" id="cumEnsayo3" value="option3">
                                <label class="form-check-label" for="cumEnsayo3">3</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="cumEnsayo" id="cumEnsayo4" value="option4">
                                <label class="form-check-label" for="cumEnsayo4">4</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="cumEnsayo" id="cumEnsayo5" value="option5">
                                <label class="form-check-label" for="cumEnsayo5">5</label>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row input-group-text">
                        <div class="col">
                            <span>¿Contiene el mínimo numero de páginas (40 páginas)?</span>
                        </div>
                        <div class="col">
                            <!-- No = 0, Si = 5 -->
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="minNumEnsayo" id="minNumEnsayo0" value="option0">
                                <label class="form-check-label" for="minNumEnsayo0">No</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="minNumEnsayo" id="minNumEnsayo1" value="option1">
                                <label class="form-check-label" for="minNumEnsayo2">Sí</label>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row input-group-text">
                        <div class="col">
                            <span>¿Cumple con la estructura mínima que debe cumplir un ensayo?</span>
                        </div>
                        <div class="col">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="estructuraEnsayo" id="estructuraEnsayo0" value="option0">
                                <label class="form-check-label" for="estructuraEnsayo0">0</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="estructuraEnsayo" id="estructuraEnsayo1" value="option1">
                                <label class="form-check-label" for="estructuraEnsayo2">1</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="estructuraEnsayo" id="estructuraEnsayo2" value="option2">
                                <label class="form-check-label" for="estructuraEnsayo3">2</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="estructuraEnsayo" id="estructuraEnsayo3" value="option3">
                                <label class="form-check-label" for="estructuraEnsayo3">3</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="estructuraEnsayo" id="estructuraEnsayo4" value="option4">
                                <label class="form-check-label" for="estructuraEnsayo4">4</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="estructuraEnsayo" id="estructuraEnsayo5" value="option5">
                                <label class="form-check-label" for="estructuraEnsayo5">5</label>
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

<!-- Ventana modal para subir una observación de Guías -->
<div class="modal fade" id="subirObservacionG" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="" method="POST">
                <div class="modal-header bg-secondary">
                    <h5 class="modal-title" id="staticBackdropLabel">Subir nueva observación - Guías</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- preguntas sobre el cumplimiento de la publicación -->
                    <div class="row input-group-text">
                        <div class="col">
                            <span>¿Cumple con las características designadas para las publicaciones?</span>
                        </div>
                        <div class="col">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="general" id="general0" value="option0">
                                <label class="form-check-label" for="general0">0</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="general" id="general1" value="option1">
                                <label class="form-check-label" for="general2">1</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="general" id="general2" value="option2">
                                <label class="form-check-label" for="general3">2</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="general" id="general3" value="option3">
                                <label class="form-check-label" for="general3">3</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="general" id="general4" value="option4">
                                <label class="form-check-label" for="general4">4</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="general" id="general5" value="option5">
                                <label class="form-check-label" for="general5">5</label>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row input-group-text">
                        <div class="col">
                            <span>¿La guía brinda lineamientos para encaminar o dirigir casos <br> prácticos y específicos sobre un tema determinado?</span>
                        </div>
                        <div class="col">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="lineaGuia" id="lineaGuia0" value="option0">
                                <label class="form-check-label" for="lineaGuia0">0</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="lineaGuia" id="lineaGuia1" value="option1">
                                <label class="form-check-label" for="lineaGuia2">1</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="lineaGuia" id="lineaGuia2" value="option2">
                                <label class="form-check-label" for="lineaGuia3">2</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="lineaGuia" id="lineaGuia3" value="option3">
                                <label class="form-check-label" for="lineaGuia3">3</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="lineaGuia" id="lineaGuia4" value="option4">
                                <label class="form-check-label" for="lineaGuia4">4</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="lineaGuia" id="lineaGuia5" value="option5">
                                <label class="form-check-label" for="lineaGuia5">5</label>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row input-group-text">
                        <div class="col">
                            <span>¿Contiene el mínimo numero de páginas (50 páginas)?</span>
                        </div>
                        <div class="col">
                            <!-- No = 0, Si = 5 -->
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="minNumGuias" id="minNumGuias0" value="option0">
                                <label class="form-check-label" for="minNumGuias0">No</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="minNumGuias" id="minNumGuias1" value="option1">
                                <label class="form-check-label" for="minNumGuias2">Sí</label>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row input-group-text">
                        <div class="col">
                            <span>¿Cumple con la estructura mínima que debe cumplir una guía?</span>
                        </div>
                        <div class="col">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="estructuraGuia" id="estructuraGuia0" value="option0">
                                <label class="form-check-label" for="estructuraGuia0">0</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="estructuraGuia" id="estructuraGuia1" value="option1">
                                <label class="form-check-label" for="estructuraGuia2">1</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="estructuraGuia" id="estructuraGuia2" value="option2">
                                <label class="form-check-label" for="estructuraGuia3">2</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="estructuraGuia" id="estructuraGuia3" value="option3">
                                <label class="form-check-label" for="estructuraGuia3">3</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="estructuraGuia" id="estructuraGuia4" value="option4">
                                <label class="form-check-label" for="estructuraGuia4">4</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="estructuraGuia" id="estructuraGuia5" value="option5">
                                <label class="form-check-label" for="estructuraGuia5">5</label>
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

<!-- Ventana modal para subir una observación de Folletos -->
<div class="modal fade" id="subirObservacionF" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="" method="POST">
                <div class="modal-header bg-secondary">
                    <h5 class="modal-title" id="staticBackdropLabel">Subir nueva observación - Folleto</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- preguntas sobre el cumplimiento de la publicación -->
                    <div class="row input-group-text">
                        <div class="col">
                            <span>¿Cumple con las características designadas para las publicaciones?</span>
                        </div>
                        <div class="col">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="general" id="general0" value="option0">
                                <label class="form-check-label" for="general0">0</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="general" id="general1" value="option1">
                                <label class="form-check-label" for="general2">1</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="general" id="general2" value="option2">
                                <label class="form-check-label" for="general3">2</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="general" id="general3" value="option3">
                                <label class="form-check-label" for="general3">3</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="general" id="general4" value="option4">
                                <label class="form-check-label" for="general4">4</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="general" id="general5" value="option5">
                                <label class="form-check-label" for="general5">5</label>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row input-group-text">
                        <div class="col">
                            <span>¿El folleto proporciona o brinda la información y le dan <br> lineamientos para encaminar o dirigir
                                en casos prácticos y <br>específicos sobre un tema determinado?</span>
                        </div>
                        <div class="col">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="proporFolleto" id="proporFolleto0" value="option0">
                                <label class="form-check-label" for="proporFolleto0">0</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="proporFolleto" id="proporFolleto1" value="option1">
                                <label class="form-check-label" for="proporFolleto2">1</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="proporFolleto" id="proporFolleto2" value="option2">
                                <label class="form-check-label" for="proporFolleto3">2</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="proporFolleto" id="proporFolleto3" value="option3">
                                <label class="form-check-label" for="proporFolleto3">3</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="proporFolleto" id="proporFolleto4" value="option4">
                                <label class="form-check-label" for="proporFolleto4">4</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="proporFolleto" id="proporFolleto5" value="option5">
                                <label class="form-check-label" for="proporFolleto5">5</label>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row input-group-text">
                        <div class="col">
                            <span>¿Contiene el mínimo numero de páginas (20 páginas)?</span>
                        </div>
                        <div class="col">
                            <!-- No = 0, Si = 5 -->
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="minNumGuias" id="minNumGuias0" value="option0">
                                <label class="form-check-label" for="minNumGuias0">No</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="minNumGuias" id="minNumGuias1" value="option1">
                                <label class="form-check-label" for="minNumGuias2">Sí</label>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row input-group-text">
                        <div class="col">
                            <span>¿Cumple con la estructura mínima que debe cumplir un folleto?</span>
                        </div>
                        <div class="col">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="estructuraFolleto" id="estructuraFolleto0" value="option0">
                                <label class="form-check-label" for="estructuraFolleto0">0</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="estructuraFolleto" id="estructuraFolleto1" value="option1">
                                <label class="form-check-label" for="estructuraFolleto2">1</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="estructuraFolleto" id="estructuraFolleto2" value="option2">
                                <label class="form-check-label" for="estructuraFolleto3">2</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="estructuraFolleto" id="estructuraFolleto3" value="option3">
                                <label class="form-check-label" for="estructuraFolleto3">3</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="estructuraFolleto" id="estructuraFolleto4" value="option4">
                                <label class="form-check-label" for="estructuraFolleto4">4</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="estructuraFolleto" id="estructuraFolleto5" value="option5">
                                <label class="form-check-label" for="estructuraFolleto5">5</label>
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