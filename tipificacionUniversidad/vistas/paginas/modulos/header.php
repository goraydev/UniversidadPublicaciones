<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- boton que colapsa el menú lateral -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li>
            <a class="nav-link"><?php echo $ingresante["tipo"] ?></a>
        </li>
    </ul>

    <!-- las notificaciones -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="far fa-bell"></i>
                <span class="badge badge-warning navbar-badge">5</span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <span class="dropdown-item dropdown-header">5 notificaciones</span>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <i class="far fa-check-square"></i>
                    <span class="badge badge-info"> 3 observaciones</span>
                </a>
                <a href="#" class="dropdown-item">
                    <i class="far fa-file-pdf"></i>
                    <span class="badge badge-info"> 2 nuevos archivos</span>
                </a>
            </div>
        </li>
        <!-- Para salir del sistema -->
        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="salir" role="button">
                <i class="fas fa-sign-out-alt"></i>
            </a>
        </li>
    </ul>
</nav>