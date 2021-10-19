<?php
class ControladorAdministradores
{

    public function ctrIngresoAdministradores()
    {
        if (isset($_POST["ingresoUsuario"])) {
            /* Para aceptar caracteres de tipo letra y número y no recibir inyecciones sql */
            if (preg_match('/^[a-zA-Z0-9]+$/', $_POST["ingresoUsuario"]) && preg_match('/^[a-zA-Z0-9]+$/', $_POST["ingresoPassword"])) {

                $tabla = "cuentas";
                $item = "usuario";
                $valor =  $_POST["ingresoUsuario"];
                $respuesta = ModeloAdministradores::mdlMostrarAdministradores($tabla, $item, $valor);
                if ($respuesta["usuario"] == $_POST["ingresoUsuario"] && $respuesta["password"] == $_POST["ingresoPassword"]) {
                    /* Si el usuario esta activado podrá ingresar */
                    if ($respuesta["estado"] == 1) {
                        $_SESSION["validarSesionBackend"] = "ok";
                        $_SESSION["idBackend"] = $respuesta["idcuenta"];
                        echo '<script>

					 	window.location = "' . $_SERVER["REQUEST_URI"] . '";

				  		</script>';
                    } else {
                        echo "<div class='alert alert-danger mt-3 small'>Usuario desactivado</div>";
                    }
                } else {
                    echo "<div class='alert alert-danger mt-3 small'>Usuario o contraseña incorrecto</div>";
                }
            } else {
                echo "<div class='alert alert-danger mt-3 small'>Error: No se permiten caracteres especiales </div>";
            }
        }
    }
    
    /* Para mostrar los datos del que ingreso al sistema */
    static public function ctrMostrarIngreso($item, $valor)
    {
        $tabla = "cuentas";

        $respuesta = ModeloAdministradores::mdlMostrarAdministradores($tabla, $item, $valor);

        return $respuesta;
    }

    /* Para mostrar los datos del docente que ingreso al sistema, para que peuda subir el archivo y nos mande el codigo del docente*/
    static public function ctrMostrarIngresoDocente($item, $valor)
    {
        $tabla = "v_docusers";

        $respuesta = ModeloAdministradores::mdlMostrarAdministradores($tabla, $item, $valor);

        return $respuesta;
    }
}
