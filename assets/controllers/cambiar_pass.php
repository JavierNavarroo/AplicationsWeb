<?php 
    session_start(); 
    require_once "../models/Usuario.php";   
    require_once "../configuracion/mensajes.php";  

    $nuevaPass = htmlspecialchars(trim(strip_tags($_REQUEST['pass'])));

    if($nuevaPass != ""){
        $result = Usuario::cambiaPassword($nuevaPass, $_SESSION['email']); 
        
        if($result){
            $usuario = Usuario::getDatosLogin($_SESSION['email']);
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