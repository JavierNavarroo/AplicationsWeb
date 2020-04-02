<?php
        session_start();

        // Destruir todas las variables de sesión.
        $_SESSION = array();
        
        // Finalmente, reseteamos las variables
        $_SESSION["nombre"]="";
	$_SESSIN["rol"]="";
	$_SESSION["login"]=false;
        $_SESSION["alta"]=false;

        header('Location: ../iVELiTE/index.php'); 
?>