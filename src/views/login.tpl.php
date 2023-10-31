<?php
include_once 'partials/header.tpl.php';
?>

<body>
    <!--<h1></h1>
    <a href="?url=login">LOGIN</a>  
    <a href="?url=register">REGISTER</a> -->

    <link rel="stylesheet" href="/public/css/login.css">

    <div class="colorborde"></div>
    <div class="container">
        <div class="content">
            <div class="contenido">

                <form action="?url=loginaction" method="post">
                    <h2>Inicia Sesion!</h2><br><br>
                    <label for="usuario">Usuario:</label>
                    <input type="text" id="usuario" name="usuario" required><br><br><br>

                    <label for="contrasena">Contraseña:</label>
                    <input type="password" id="password" name="password" required><br><br><br>

                    <label class="rol">Rol:</label>
                    <select class="rol1" name="rol">
                        <option value="alumno">Alumno</option>
                        <option value="profesor">Profesor</option>
                    </select><br><br><br>

                    <label for="guardardatos">Recordar Datos!</label>
                    <input type="checkbox" id="recordar" name="recordar"><br><br>

                    <input type="submit" class="iniciarsesion" value="INICIAR SESION"><br><br><br>

                    <a class="register" href="?url=register">Registrate aqui!</a>

                </form>
            </div>
        </div>
    </div>

</body>

</html>