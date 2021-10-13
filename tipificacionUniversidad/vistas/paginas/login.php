<body class="hold-transition login-page">
    <div class="login-box">
        <span class="animate" style="--count:6;"></span>
        <span class="animate" style="--count:3;"></span>
        <span class="animate" style="--count:5;"></span>
        <span class="animate" style="--count:4;"></span>
        <style>
            :root {
                --c1: rgba(0, 38, 78, .8);
                --c2: rgb(0, 38, 78);
                --c3: rgb(25, 82, 125);
                --c4: rgba(0, 143, 202, .4);
                --c5: rgba(200, 200, 200, .4)
            }

            .login-page {
                background-image: url("vistas/img/fondo.jpg");
                background-repeat: no-repeat;
                background-size: cover;
                backdrop-filter: blur(10px);
            }

            .login1 {
                border-radius: 20px;
                padding: 80px 20px 20px;
                background: var(--c4);
                backdrop-filter: blur(10px);
                box-shadow: 0px 1px 19px -11px rgba(0, 0, 0, 1);
                -webkit-box-shadow: 0px 1px 19px -11px rgba(0, 0, 0, 1);
                -moz-box-shadow: 0px 1px 19px -11px rgba(0, 0, 0, 1);
            }

            .login_icon {
                color: white;
                position: absolute;
                top: -40px;
                left: 140px;
                background: var(--c2);
                /* padding: 20px 25px; */
                border-radius: 50%;
            }

            .login_icon img {
                width: 90px;
            }

            .caja {
                display: flex;
                justify-content: center;
                width: auto;
                padding: 10px;
                margin: 0 0 10px;
                text-align: center;
            }

            .caja input,
            .caja input[type="text"] {
                padding: 20px;
                background: var(--c3);
                color: white;
                border-radius: 0 5px 5px 0;
                border: none;
                letter-spacing: 1px;
                margin: 0;
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif
            }

            .caja input::placeholder {
                color: white;
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif
            }

            .caja i {
                background: var(--c2);
                border-radius: 5px 0 0 5px;
                color: white;
                padding: 11px;
            }

            .btnAcceder {
                text-align: center;
            }

            .btnAcceder input[type="submit"] {
                background: var(--c2);
                width: auto;
                color: white;
                padding: 10px 80px;
                border-radius: 5px;
                transition: all .2s;
            }

            .btnAcceder input[type="submit"]:hover {
                background: var(--c1);
            }
        </style>
        <div class="login1">
            <div>
                <div class="login_icon">
                    <div><img src="vistas/img/plantilla/fc.png" alt="Facultad de ciencias"></div>
                </div>

                <form class="form" method="post" action="#">

                    <div class="caja">
                        <i class="fa fa-user"></i>
                        <input type="text" name="ingresoUsuario" placeholder="Nombre de usuario" required />
                    </div>

                    <div class="caja">
                        <i class="fa fa-lock"></i>
                        <input type="password" name="ingresoPassword" placeholder="Contraseña" required />
                    </div>

                    <div class="btnAcceder"><input type="submit" name="sent" value="Acceder"></div>
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