<?php
require 'conexion.php';

require 'src/render.php';

print render('registeraction',['title' => 'registeraction-render']);
//si datos
if (($_POST['usuario']) && isset($_POST['password'])&& isset($_POST['nombre'])&& isset($_POST['apellidos'])&& isset($_POST['email'])  ){
        
        $usuario = $_POST['usuario'];
        filter_input(INPUT_POST, $usuario, FILTER_SANITIZE_EMAIL);
        $password = $_POST['password'];
        $passwordhash= password_hash($password, PASSWORD_DEFAULT);
        filter_input(INPUT_POST, $passwordhash, FILTER_SANITIZE_STRING);
        $nombre = $_POST['nombre'];
        filter_input(INPUT_POST, $nombre, FILTER_SANITIZE_STRING);
        $apellidos = $_POST['apellidos'];
        filter_input(INPUT_POST, $apellidos, FILTER_SANITIZE_STRING);
        $email = $_POST['email'];
        filter_input(INPUT_POST, $email, FILTER_SANITIZE_EMAIL);
        $rol= $_POST['rol_id'];
        filter_input(INPUT_POST, $rol, FILTER_SANITIZE_STRING);
        
        
        $sql = "INSERT INTO users (usuario, password, nombre, apellidos, email) VALUES (:usuario, :password, :nombre, :apellidos, :email)";
        $stmt = $db->prepareQuery($sql);
        $params = [':usuario' => $usuario, ':password' => $passwordhash, ':nombre'=>$nombre, ':apellidos'=>$apellidos, ':email'=>$email];
        $db->executeQuery($stmt, $params);
        
} else {
        header('Location:?url=home');
        
}
// insert en BD


//redirect a login o autenticar directamente
//redirigir a dashboard si autentica, si no a login
?>