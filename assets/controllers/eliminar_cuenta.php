<?php
    session_start(); 
    require_once "../models/Usuario.php";   
    require_once "../configuracion/mensajes.php";  

    $result = Usuario::eliminarUsuario($_SESSION['email']);

    if($result){

        // Destruir todas las variables de sesión.
        $_SESSION = array();
        
        // Finalmente, destruir la sesión.
        session_destroy();
        header('Location: ../../index.php'); 
    }else{
        echo 'No funciona';
        //header('Location: ../views/account.php');
    }

?>