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
                    <h1>Gestor de docentes</h1>
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
                            <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#crearDocente">
                                Nuevo docente
                            </button>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-striped dt-responsive tablaResultados" width="100%" id="TablaResultados">
                                <thead>
                                    <tr>
                                        <th>Código</th>
                                        <th>Docente</th>
                                        <th>Usuario</th>
                                        <th>Escuela</th>
                                        <th>Estado</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody id="myTable">
                                    <tr>
                                        <td>122.366.151</td>
                                        <td>Mario Quispe Mamani</td>
                                        <td>Mario</td>
                                        <td>Matemáticas</td>
                                        <td><button class="btn btn-success">Activo</button></td>
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


<div class="modal fade" id="crearDocente" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="" method="POST">
                <div class="modal-header bg-secondary">
                    <h5 class="modal-title" id="staticBackdropLabel">Crear docente</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Input nombre -->
                    <div class="input-group mb-4">

                        <div class="input-group-append input-group-text">
                            <span class="fas fa-user"></span>
                        </div>

                        <input type="text" class="form-control" name="registroNombreD" placeholder="Ingresa el nombre" required>

                    </div>

                    <!-- Input apellido paterno -->
                    <div class="input-group mb-4">

                        <div class="input-group-append input-group-text">
                            <span class="fas fa-user"></span>
                        </div>

                        <input type="text" class="form-control" name="registroApellP" placeholder="Ingresa el apellido paterno" required>

                    </div>

                    <!-- Input apellido materno -->
                    <div class="input-group mb-4">

                        <div class="input-group-append input-group-text">
                            <span class="fas fa-user"></span>
                        </div>

                        <input type="text" class="form-control" name="registroApellM" placeholder="Ingresa el apellido materno" required>

                    </div>

                    <!-- Input celular -->
                    <div class="input-group mb-4">

                        <div class="input-group-append input-group-text">
                            <span class="fas fa-mobile"></span>
                        </div>

                        <input type="text" maxlength="9" minlength="9" class="form-control" name="registroCelular" placeholder="Ingresa el celular" required>

                    </div>

                    <!-- Input fecha nacimiento -->
                    <div class="input-group mb-4">

                        <div class="input-group-append input-group-text">
                            <span class="fas fa-calendar-alt"></span>
                        </div>

                        <input type="date" class="form-control" name="registroFechaN" required>

                    </div>

                    <!-- Input fecha nacimiento -->
                    <div class="row">
                        <div class="col">
                            <span>Seleccione sexo</span>
                        </div>
                        <div class="col">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="tipoLetra" id="tipoLetra1" value="option1">
                                <label class="form-check-label" for="tipoLetra1">Masculino</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="tipoLetra" id="tipoLetra2" value="option2">
                                <label class="form-check-label" for="tipoLetra2">Femenino</label>
                            </div>
                        </div>
                    </div> <br>

                    <!-- Input contraseña -->
                    <div class="input-group mb-4">

                        <div class="input-group-append input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>

                        <input type="password" class="form-control" name="registroPassword" placeholder="Crear constraseña" required>

                    </div>

                    <div class="input-group mb-3">

                        <div class="input-group-append input-group-text">

                            <span class="fas fa-university"></span>


                        </div>

                        <select class="form-control" name="registroTipo" required>

                            <option value="" disabled selected>Seleccione la escuela</option>

                            <option value="">Ingenieria de sistemas e informática</option>

                            <option value="">Matemáticas</option>

                            <option value="">Estadística e informática</option>

                        </select>

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