<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="../vistas/img/plantilla/escudo_unasamPes.ico" type="image/x-icon">
    <title>Tipificación UNASAM</title>
    <!-- Vinculos CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="zmfNZmXoNWBMemUOo1XUGFfc0ihGGLYdgtJS3KCr/l0=">

    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <!-- Theme style AdmninLTE -->
    <link rel="stylesheet" href="vistas/css/plugins/adminlte.min.css">

    <!-- Vinculos de JS -->
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

    <!-- AdminLTE App -->
    <script src="vistas/js/plugins/adminlte.min.js"></script>
</head>

<body class="hold-transition sidebar-mini sidebar-collapse">
    <div class="wrapper">
        <?php
        include "paginas/modulos/header.php";
        include "paginas/modulos/menu.php";

        /* Navegación de páginas */
        if (isset($_GET["pagina"])) {

            if (
                $_GET["pagina"] == "inicio" ||
                $_GET["pagina"] == "escogermiembros" ||
                $_GET["pagina"] == "meritos" ||
                $_GET["pagina"] == "revisararchivos" ||
                $_GET["pagina"] == "subirarchivos" ||
                $_GET["pagina"] == "verresultados" ||
                $_GET["pagina"] == "rgeneral" ||
                $_GET["pagina"] == "rmias"

            ) {

                include "paginas/" . $_GET["pagina"] . ".php";
            } else {

                include "paginas/error404.php";
            }
        } else {

            include "paginas/inicio.php";
        }
        include "paginas/modulos/footer.php";
        ?>
    </div>
</body>

</html>