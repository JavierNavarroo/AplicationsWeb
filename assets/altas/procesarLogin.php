
<?php
	
	require_once '..\conf\config.php';
	require_once '..\conf\Usuario.php';
	

	$nombreUsuario = isset($_POST['username']) ? $_POST['username'] : null;

	if ( empty($nombreUsuario) ) {
	  echo "<script>
			alert('El nombre no puede estar vacio');
			window.location= 'login.php'
			</script>";
	}

	$password = isset($_POST['password']) ? $_POST['password'] : null;
	if ( empty($password) ) {
	   echo "<script>
			alert('La contraseña no puede estar vacia');
			window.location= 'login.php'
			</script>";
	}


    $usuario = Usuario::login($nombreUsuario, $password);
	
    if (!$usuario) {
        echo "<script>
			alert('el nombre o la contraseña no coinciden, intentelo de nuevo');
			window.location= 'login.php'
			</script>";
    }

	else {
 
		$_SESSION['login'] = true;
		$_SESSION['nombre'] = $usuario->userName();
		// Comparación de string segura a nivel binario devuelve 0 si son iguales
		$_SESSION['esAdmin'] = strcmp($usuario->rol(), 'ADMIN') == 0 ? true : false;
		 echo "<script>
			alert('Bienvenido a tu buscador de vuelos, {$_SESSION['nombre']}');
			window.location= '../../home.php'
			</script>";
    }

?>
