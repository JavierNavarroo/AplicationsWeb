<?php
        session_start();

        // Destruir todas las variables de sesión.
        $_SESSION = array();
        
        // Finalmente, reseteamos las variables
        $_SESSION["nombre"]=null;
	$_SESSIN["rol"]="";
	$_SESSION["login"]=false;
        $_SESSION["alta"]=false;

        session_destroy();

        header('Location: ../../index.php'); 
?>