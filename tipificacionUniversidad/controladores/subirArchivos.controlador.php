<?php
class ControladorSubirArchivos
{
    /* Mostrar los archivos subidos */
    static public function ctrMostrarSubirArchivos($item, $valor)
    {

        $tabla = "archivo";

        $respuesta = ModeloSubirArchivos::mdlMostrarSubirArchivos($tabla, $item, $valor);

        return $respuesta;
    }

    /* Registro de nuevo archivo */
    public function ctrRegistroSubirArchivos()
    {

        if (isset($_POST["registroPublicacion"])) {

            if (preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["registroPublicacion"])) {
                $mysqli = new mysqli('localhost:3307', 'root', '', 'tipificacion');
                if ($mysqli->connect_error) {
                    die('Error en la conexión' . $mysqli->connect_error);
                }

                if (isset($_FILES["subirArchivo"]["tmp_name"]) && !empty($_FILES["subirArchivo"]["tmp_name"])) {

                    /*=============================================
					CREAMOS EL DIRECTORIO DONDE VAMOS A GUARDAR EL ARCHIVO
					=============================================*/

                    $directorio = "vistas/documentos/archivos";

                    /*=============================================
					DE ACUERDO AL TIPO DE ARCHIVO APLICAMOS LAS FUNCIONES POR DEFECTO DE PHP
					=============================================*/
                    if ($_FILES["subirArchivo"]["type"] == "application/pdf") {
                        $aleatorio = mt_rand(100, 999);
                        $ruta = $directorio . "/" . $aleatorio . ".pdf";
                    } else {

                        echo '<script>

							Swal.fire({
									icon:"error",
								  	title: "¡CORREGIR!",
								  	text: "¡No se permiten formatos diferentes a PDF!",
								  	showConfirmButton: true,
									confirmButtonText: "Cerrar"
								  
							}).then(function(result){

									if(result.value){   
									    history.back();
									  } 
							});

						</script>';

                        return;
                    }
                    $nombrePublicacion = $_POST["registroPublicacion"];
                    $tipo = $_POST["registroTipo"];
                    $archivo = $ruta;
                    $docente = $_POST["registroDocente"];

                    $sql = "CALL p_insertArchivo('$nombrePublicacion','$archivo','1','1','$tipo','1','$docente')";

                    $respuesta = ModeloSubirArchivos::mdlRegistroSubirArchivo($mysqli, $sql);

                    if ($respuesta == "ok") {

                        echo '<script>

							Swal.fire({
								icon:"success",
							  	title: "¡CORRECTO!",
							  	text: "¡El archivo ha sido creado exitosamente!",
							  	showConfirmButton: true,
								confirmButtonText: "Cerrar"
							  
							}).then(function(result){

									if(result.value){   
									    history.back();
									  } 
							});

						</script>';
                    }
                }
            } else {

                echo '<script>

					Swal.fire({

						icon:"error",
						title: "¡CORREGIR!",
						text: "¡No se permiten caracteres especiales en ninguno de los campos!",
						showConfirmButton: true,
						confirmButtonText: "Cerrar"

					}).then(function(result){

						if(result.value){

							history.back();

						}

					});	

				</script>';
            }
        }
    }
}
