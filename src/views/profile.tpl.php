<?php
include_once 'partials/headerdashboard.tpl.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/css/profile.css">
    <title>Document</title>
</head>

<body>

    <div class="colorborde"></div>

    <div class="container">
        <div class="contenedor">
            <h2 class="profile"><u>Profile</u></h2><br><br>

            <h3>Nombre: <?php print  $_SESSION['datosuser']['nombre']?></h3><br>
            <h3>Apellidos: <?php print  $_SESSION['datosuser']['apellidos']?></h3><br>
            <h3>Email: <?php print  $_SESSION['datosuser']['email']?></h3><br><br><br>
            <h3>Usuario: <?php print  $_SESSION['datosuser']['usuario']?></h3><br>
            
            


        </div>



    </div>
</body>

</html>