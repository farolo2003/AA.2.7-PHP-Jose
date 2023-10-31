<?php
    require 'conexion.php';
    //comprobar los campos proporcionados
    

    if(isset($_POST['usuario']) && isset($_POST['password']) ){
        $usuario=$_POST['usuario'];
        filter_input(INPUT_POST,$usuario,FILTER_SANITIZE_EMAIL);
        $password=$_POST['password'];
        $passwordhash=$password;
        filter_input(INPUT_POST,$passwordhash,FILTER_SANITIZE_STRING);

        
        

        $sql = "SELECT usuario, password from users where usuario='$usuario' ";

        $stmt = $db->prepareQuery($sql);
        $db->executeQuery($stmt);

        $response=$stmt->fetchAll(PDO::FETCH_ASSOC);        

        
       
        if($usuario==$response[0]['usuario']  && password_verify($passwordhash,$response[0]['password'])){

            $sql = "SELECT usuario, password, nombre, apellidos, email from users where usuario='$usuario'";

            $stmt = $db->prepareQuery($sql);
            $db->executeQuery($stmt);
    
            $response=$stmt->fetchAll(PDO::FETCH_ASSOC);
            $_SESSION['datosuser']=$response[0];
            $guardardatos=$_POST['recordar'];


            if($guardardatos){
                setcookie('recordar',"true");
                setcookie('datosuser',serialize($_SESSION['datosuser']),0,"/");
                
            }

            
            
            header('Location:?url=dashboard');
        }else{
            print "Usuario incorrecto";
        }
        


    }else{
        //header('Location:?url=home');
        print "Usuario incorrecto";
    }

    //si existen en la base de datos

    


    //redireccionaremos a dashboard


    // si no vamos a home