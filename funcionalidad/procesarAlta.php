<?php	
	session_start();
	$db_host="localhost";
	$db_name="ivelite_login";
	$db_user="root";
	$db_pass="";
	$_SESSION["alta"]=false;
	
	$username = htmlspecialchars(trim(strip_tags($_REQUEST["username"])));
	$password = htmlspecialchars(trim(strip_tags($_REQUEST["password"])));
	$mail =  htmlspecialchars(trim(strip_tags($_REQUEST["email"])));
	//rol por defecto
	$rol = "básico";
	
	
	$conexion = mysqli_connect($db_host,$db_user,$db_pass,$db_name);
	if (mysqli_connect_errno()) 
	{
		echo "Lo sentimos, este sitio web está experimentando problemas.";
	}
	
	//comprobar usuario
	$consulta = "SELECT * FROM usuarios WHERE user='$username'";
	$resultado = mysqli_query($conexion,$consulta) or die ("error buscando nombre");
	
	if(mysqli_num_rows($resultado)===0)
    {	

        //hash pass
		$hash = password_hash("$password", PASSWORD_BCRYPT);
		$subir = "INSERT INTO usuarios (user, pass, rol, email) VALUES ('$username', '$hash', '$rol', '$mail')";
		
		$subido = mysqli_query($conexion, $subir) or die ("error subiendo");
		
		
		if($subido==true)
		{
			$_SESSION["alta"]=true;
		}
		if($_SESSION["alta"]){
			echo "<script>
			alert('	TE HAS DADO DE ALTA CORRECTAMENTE ');
			window.location= 'home.php'
				  </script>";
		}
			//header('Location: ../iVELiTE/home.php'); 
		
    }
	
	else 
	{
		echo "Nombre de usuario existente, elija otro";
		//aqui hacer que vuelva a la pantalla de alta
	}
	mysqli_close($conexion);
?>	