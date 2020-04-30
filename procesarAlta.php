<?php	

	
require_once __DIR__.'/assets/conf/config.php';
require_once __DIR__.'/assets/conf/Usuario.php';


if (! isset($_POST['login']) ) {
    header('Location: login.php');
    exit();
}

$rol = "básico";

$nombreUser =  htmlspecialchars(trim(strip_tags($_REQUEST["username"])));
if (empty($username)){
	echo "El nombre de usuario no puede estar vacio.";
}

$password = htmlspecialchars(trim(strip_tags($_REQUEST["password"])));
if(empty($password)){
	echo "La contraseña no puede estar vacia.";
}

$email = htmlspecialchars(trim(strip_tags($_REQUEST["email"])));
if(empty($email)){
	echo "La contraseña no puede estar vacia.";
}

$result = array();

if(count($result) === 0) {
	
	$usuario = Usuario::crea($username, $email, $password, $rol);
	if ( ! $user ) {
		$result[] = "El usuario ya existe";
	} else {
		$_SESSION['login'] = true;
		$_SESSION['nombre'] = $username;
		$result = 'index.php';
	}
}


?>	