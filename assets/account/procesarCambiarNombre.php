<?php 
 
    require_once "../conf/config.php";   
    require_once "../conf/Usuario.php";   

    $nuevoNombre = htmlspecialchars(trim(strip_tags($_REQUEST['username'])));

    if($nuevoNombre != ""){
        $newName = Usuario::nuevoNombre($nuevoNombre, $_SESSION['nombre']);); 

        if($newName){
            $_SESSION['nombre'] = $newName; 
            header('Location: ../../home.php');
        } 
        else{
            header ('Location: ../../micuenta.php');
        }
    }
    else{
        header ('Location: ../../micuenta.php');
    }

?>