<?php 
 
    require_once "../conf/config.php";   
    require_once "../conf/Usuario.php";        

    $oldPass = htmlspecialchars(trim(strip_tags($_REQUEST['oldpass'])));
    $newPass = htmlspecialchars(trim(strip_tags($_REQUEST['newpass'])));

    if($newPass != ""){
        $usuario = Usuario::buscaUsuario($_SESSION['nombre']); 
		
        if($usuario){
            if($usuario->compruebaPassword($oldPass)){
                if(Usuario::cambiaPassword($newPass,$_SESSION['nombre'])){
                    echo"Cambio realizado con exito";
                    header('Location: ../../home.php');
                }
                else {
                    echo "Fallo al cambiar pass";
                }
            }
            else {
                echo "Contraseña de confirmacion erronea";
            }
        }
        else{
            echo "Error al cambiar nombre";
            header ('Location: ../../micuenta.php');
        }
    }
    else{
        echo "El campo no puede estar vacio";
        header ('Location: ../../micuenta.php');
    }
?>