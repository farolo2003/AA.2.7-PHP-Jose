<?php include_once 'partials/header.tpl.php'; ?>


<head>
    <link rel="stylesheet" href="../css/register.css">
</head>

<body>

    <link rel="stylesheet" href="/public/css/register.css">


    <div class="colorborde"></div>
    <div class="container">
        <div class="content">
            <div class="contenido">
                <h2 class="registername">Registrate!</h2><br><br><br>
                <form class="formulario" action="?url=registeraction" method="post">
                    <label for="nombre">Nombre:</label></label>
                    <input type="text" class="nombre" name="nombre" required><br><br><br>

                    <label for="apellidos">Apellidos:</label></label>
                    <input type="text" class="apellidos" name="apellidos" required><br><br><br>

                    <label for="usuario">Email:</label>
                    <input type="text" class="email" name="email" required><br><br><br>

                    <label for="usuario">Usuario:</label>
                    <input type="text" class="usuario" name="usuario" required><br><br><br>

                    <label for="contrasena">Contraseña:</label>
                    <input type="password" class="contraseña" name="password" required><br><br><br>

                    <label class="rol">Rol:</label>
                    <select class="rol1" name="rol_id">
                        <option name="alumno" value="alumno">Alumno</option>
                        <option name="profesor" value="profesor">Profesor</option>
                    </select><br><br><br><br>

                    <input class="value" type="submit" value="REGISTRARSE">
                </form>
            </div>
        </div>

</body>

</html>