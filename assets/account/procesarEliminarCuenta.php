<?php
	require_once "../conf/config.php";   
    require_once "../conf/Usuario.php";   

    $pass = htmlspecialchars(trim(strip_tags($_REQUEST['pass'])));

    if($pass != ""){
        $usuario = Usuario::buscaUsuario($_SESSION['nombre']); 
        
        if($usuario){
            if($usuario->compruebaPassword($pass)){
                if($result = Usuario::eliminar($usuario->userName())){
					header('Location: ../altas/logout.php');
				}
                header('Location: ../../home.php'); 
            }
            else {
                echo "Contraseña de confirmacion erronea";
            }
        }
        else{
            echo "Error al eliminar la cuenta";
            header ('Location: ../../micuenta.php');
        }
    }
    else{
        echo "El campo no puede estar vacio";
        header ('Location: ../../micuenta.php');
    }

?>