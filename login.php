<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/login.css">
    <title>InvenTrack Login</title>
</head>

<body>

    <div class="container-sections">
        <section class="lado-izq">
            <div class="cont-izq">

                <div class="logo">
                    <img src="assets/logo/logo_inventrack_blanco.png" alt="logo">
                </div>

                <div class="cont-central">
                    <h1>Todo tu inventario, en un solo lugar</h1>

                    <p>Controla existencias, ventas, compras y alertas de stock
                        de tu tienda desde un mismo sistema, con acceso según el rol de cada persona del equipo.
                    </p>

                </div>
            </div>
        </section>

        <section class="lado-der">
            <div class="cont-login">

                <form action="controllers/procesar_login.php" method="POST">

                    <div class="form-titulo">
                        <h2>Iniciar Sesión</h2>
                        <p>Ingresa tus credenciales para continuar</p>
                    </div>

                    <div class="form-cont">
                        <label for="correo">Correo electrónico</label>
                        <input type="email" id="correo" name="correo" placeholder="ejemplo@gmail.com" required>

                        <label for="contraseña">Contrasena</label>
                        <input type="password" id="correo" name="contrasena" placeholder="Ingresa tu contraseña" required>
                    </div>

                    <div class="form-opciones">
                        <div class="opc-record">
                            <label for="recordarme">Recordarme</label>
                            <input type="checkbox" name="recordarme">
                        </div>

                        <div class="opc-recup">
                            <a href="#">¿Olvidaste tu contraseña?</a>
                        </div>
                    </div>

                    <button type="submit">Iniciar Sesión</button>

                    <div class="roles">
                        <label class="rol-tarjeta">
                            <input type="radio" name="rol" value="admin" checked>
                            <span class="cont-rol">Administrador</span>
                        </label>

                        <label class="rol-tarjeta">
                            <input type="radio" name="rol" value="vendedor" checked>
                            <span class="cont-rol">Vendedor</span>
                        </label>

                        <label class="rol-tarjeta">
                            <input type="radio" name="rol" value="operario" checked>
                            <span class="cont-rol">Operario</span>
                        </label>
                    </div>

                </form>
            </div>
        </section>

    </div>

</body>

</html>