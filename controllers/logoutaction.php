<?php

require 'conexion.php';

if (isset ($_SESSION["datosuser"])) {
    unset($_SESSION["datosuser"]);

    setcookie('datosuser', "holaa", time() - 1, "/");
    header('Location:?url=login');
} 


?>