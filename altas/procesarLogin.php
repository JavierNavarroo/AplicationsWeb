<?php
	
	session_start(); 

	$db_host="localhost";
	$db_name="ivelite_login";
	$db_user="root";
	$db_pass="";
	
	
	
	$conexion = mysqli_connect($db_host,$db_user,$db_pass,$db_name);
	if (mysqli_connect_errno()) 
	{
		echo "Lo sentimos, este sitio web está experimentando problemas.";
	}
	
	$username = htmlspecialchars(trim(strip_tags($_REQUEST["username"])));
	$password = htmlspecialchars(trim(strip_tags($_REQUEST["password"])));
	
	//falta hacer hash a la pass antes de meterla en la bbdd
    

	$consulta = "SELECT * FROM usuarios WHERE user='$username'";
	$resultado = mysqli_query($conexion,$consulta) or die ("Fallo en la consulta");
	
	if(mysqli_num_rows($resultado)===0)
	{
		echo "No existe usuario o la contraseña es incorrecta";
	}
	
	
	else 
	{
		//aqui pone el nombre de los atributos para que sea mas facil acceder 
		$filas=mysqli_fetch_assoc($resultado) or die("error assoc");
	 
		if (password_verify($password, $filas["pass"]))
		{
			$_SESSION["nombre"] = $filas["user"];
			$_SESSION["rol"] = $filas["rol"];
			$_SESSION["login"] = true;
			
			if($_SESSION["login"]){
				echo ' Bienvenido' .$_SESSION["nombre"]. ', tu rol es'  . $_SESSION["rol"];
				echo "<script>
				alert('BIENVENIDO A TU BUSCADOR DE VUELOS');
				window.location= 'home.php'
					  </script>";
			  }
		}
		else 
		{
			echo "Fallo en usuario o contraseña";
		}
	}
	
?>

