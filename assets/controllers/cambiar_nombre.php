<?php 
    session_start(); 
    require_once "../models/Usuario.php";   
    require_once "../configuracion/mensajes.php";  

    $nuevoNombre = htmlspecialchars(trim(strip_tags($_REQUEST['nombre'])));

    if($nuevoNombre != ""){
        $result = Usuario::cambiaNombre($nuevoNombre, $_SESSION['email']); 

        if($result){
            $usuario = Usuario::getDatosLogin($_SESSION['email']);
            $_SESSION['nombre'] = $usuario['nombre']; 
            header('Location: ../views/home.php');
        } 
        else{
            header ('Location: ../views/account.php');
        }
    }
    else{
        header ('Location: ../views/account.php');
    }
?>