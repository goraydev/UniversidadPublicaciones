<body class="hold-transition login-page">
    <div class="login-box">
        <span class="animate" style="--count:6;"></span>
        <span class="animate" style="--count:3;"></span>
        <span class="animate" style="--count:5;"></span>
        <span class="animate" style="--count:4;"></span>
        <div class="login">
            <div>
                <h1>INGRESO AL SISTEMA</h1>

                <form class="form" method="post" action="#">

                    <div class="field input-group mb-2">
                        <input type="text" name="ingresoUsuario" placeholder="Nombre de usuario" required />
                        <i class="fa fa-user"></i>
                    </div>

                    <div class="field input-group mb-2">
                        <input type="password" name="ingresoPassword" placeholder="Contraseña" required />
                        <i class="fa fa-lock"></i>
                    </div>
                    <div class="submit"><input type="submit" name="sent" value="acceder"></div>
                    <?php
                    $ingreso = new ControladorAdministradores();
                    $ingreso->ctrIngresoAdministradores()
                    ?>
                </form>
            </div>
        </div>
        <!-- /.login-box -->

</body>

<!-- <body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <h2>Restaurante Soon Marie</h2>
        </div>
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Ingreso al sistema</p>

                <form method="post">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Usuario" name="ingresoUsuario">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Password" name="ingresoPassword">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-warning btn-block btn-flat">Ingresar</button>
                    
                </form>
            </div>
            
        </div>
    </div>
  

</body> -->