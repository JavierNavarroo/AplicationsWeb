<?php
	
require_once __DIR__.'/includes/config.php';
require_once __DIR__.'/includes/Usuario.php';


if (! isset($_POST['login']) ) {
    header('Location: login.php');
    exit();
}


$nombreUser =  htmlspecialchars(trim(strip_tags($_REQUEST["username"])));

if (empty($nombreUser)){
	echo "El nombre de usuario no puede estar vacio.";
}

$password = htmlspecialchars(trim(strip_tags($_REQUEST["password"])));
if(empty($password)){
	echo "La contraseña no puede estar vacia.";
}

$result = array();

if(count($result) === 0) {
	$usuario = Usuario::buscaUsuario($nombreUser);

	if(!usuario) {
		$result = "El usuario o la contraseña no coinciden";
	}

	else {
		if($usuario->compruebaPassword($password)){
			$_SESSION['login'] = true;
			$_SESSION['nombre'] = $nombreUser;
			$_SESSION['esAdmin'] = strcmp($usuario->rol(), 'admin') == 0 ? true : false;

			if($_SESSION["login"]){
				echo ' Bienvenido' .$_SESSION["nombre"]. ', tu rol es'  . $_SESSION["rol"];
				echo "<script>
				alert('BIENVENIDO A TU BUSCADOR DE VUELOS');
				window.location= 'home.php'
					  </script>";
			  }
		}
		else {
			$result = "El usuario o la contraseña no coinciden";
		}
	}
}

?>

