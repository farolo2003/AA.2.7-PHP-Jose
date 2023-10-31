<?php
include_once 'partials/headerdashboard.tpl.php';
?>


<body>

    <link rel="stylesheet" href="/public/css/logout.css">
    <div class="colorborde"></div>

    <div class="contenedor">

        <div class="content">
            <h2>Quieres desconectarte?</h2><br><br>
            <form action="?url=logoutaction">
                <a href="?url=logoutaction" class="boton" type="submit" name="botonsi">SÍ</a>
                <a href="?url=dashboard" class="boton" type="submit" name="cancelar">Cancelar</a>
            </form>

        </div>


    </div>
</body>

</html>