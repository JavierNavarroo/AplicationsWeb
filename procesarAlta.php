<?php

	require_once __DIR__. '/assets/conf/config.php';
	require_once __DIR__.'/assets/conf/Usuario.php';
	

	$nombreUsuario = isset($_POST['username']) ? $_POST['username'] : null;

	if ( empty($nombreUsuario) ) {
	  echo "<script>
			alert('El campo nombre no puede estar vacio');
			window.location= 'alta.php'
			</script>";
	}

	$password = isset($_POST['password']) ? $_POST['password'] : null;
	if ( empty($password) ) {
	   echo "<script>
			alert('El campo contraseña no puede estar vacio');
			window.location= 'alta.php'
			</script>";
	}
	
	$email = isset($_POST['email']) ? $_POST['email'] : null;
	if ( empty($email) ) {
		
		echo "<script>
			alert('El campo email no puede estar vacio');
			window.location= 'alta.php'
			</script>";
		
	}
	
	
	$usuario = Usuario::alta($nombreUsuario, $email, $password, 'básico');
	
	if( !$usuario ){
		
		echo "<script>
			alert('Usuario existente. Por favor, elija otro nombre de usuario.');
			window.location= 'alta.php'
			</script>";
		$_SESSION['login'] = false;
		
	}
	
	else {
		$_SESSION['login'] = true;
		$_SESSION['nombre'] = $usuario->userName();
		$_SESSION['rol'] = $usuario->rol();
		
		echo $usuario->userName();
		
		echo "<script>
			alert('Bienvenido a bordo {$usuario->userName()}, su rol es {$_SESSION['rol']}');
			window.location= 'home.php'
		    </script>";
	}
	
	
?>