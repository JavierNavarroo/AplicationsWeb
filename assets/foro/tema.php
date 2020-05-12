<!DOCTYPE HTML>

<?php 
    session_start(); 
	?>

<html>
	<head>
		<title>Sobre nosotros</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="../css/main.css" /> 
        <link rel="stylesheet" href="../css/main.css" />
        
	</head>
	<body class="is-preload">
		<div id="page-wrapper">

			<!-- Header -->
            <header id="header" class="alt">
					<?php					
					if (($_SESSION['login']) == true){
						echo"<h1><a href='../../home.php'>IVELITE</a> tu agencia de viajes.</h1>";
					}else{
						echo"<h1><a href='../../index.php'>IVELITE</a> tu agencia de viajes.</h1>";
					}
					?>
					<nav id="nav">
						<ul>
							<li>
								<a href="#" class="icon solid fa-angle-down">Menú</a>
								<ul>
									<li><a href="../../contacto.php">Contacto</a></li>
									<li><a href="../../foro.php">Foro</a></li>
									<li><a href="../../nosotros.php">Sobre nosotros</a></li>
									<li><a href="../../guiasturisticas.php">Guias Turisticas</a></li>
									<li><a href="../../misviajes.php">Mis viajes</a></li>
								</ul>
							</li>
							 
							<?php 
							if (($_SESSION['login']) == true){
                                echo  '<li><a href="../altas/logout.php" class="button">Logout</a></li>';
                                echo  "<li><a href='../../micuenta.php' class='button'> Perfil</a></li>";
                            }
                            else{
                                echo  '<li><a href="../altas/login.php" class="button">Login</a></li>';
                            }
							?>

						</ul>
					</nav>
				</header>

            <!-- Main -->

                    
            
            
            <section id="banner">
                <h2>Foro iVELiTE</h2>
                
                <div class="container">
                <table id="foro">
					<?php
                    require_once '..\conf\Aplicacion.php';
                    require_once '..\conf\Config.php';
                   // require_once '.\assets\conf\Config.php';
                   // require_once '.\assets\conf\Usuario.php';
					$app = Aplicacion::getSingleton();
                    $conn = $app->conexionBd();
                    //$conn = Aplicacion::conexionBd();
                    if(isset($_GET["ID"]))
                    $identificador = $_GET['ID'];
                    $ID = $_GET['ID'];
                    $query = "SELECT * FROM  foro WHERE ID = '$ID' ORDER BY fecha DESC";
                    $result = $conn->query($query);
                    while($row = mysqli_fetch_array($result)){
                        //$ID = $row['ID'];
                        $Titulo = $row['Titulo'];
                        $Autor = $row['Autor'];
                        $Mensaje = $row['Mensaje'];
                        $Fecha = $row['Fecha'];
                        $Respuestas = $row['Respuestas'];
                        echo"<tr>";
                        echo "<td> $Titulo </td> <td> $Autor </td> <td> $Fecha </td>";
                        echo"</tr>";
                        echo "<tr><td>$Mensaje</td></tr>";
                    }
                    $query2 = "SELECT * FROM  foro WHERE Identificador = '$ID' ORDER BY fecha ASC";
                    $result2 = $conn->query($query2);
                    while($row = mysqli_fetch_array($result2, MYSQLI_ASSOC)){
                        $Titulo = $row['Titulo'];
                        $Autor = $row['Autor'];
                        $Mensaje = $row['Mensaje'];
                        $Fecha = $row['Fecha'];
                        $Respuestas = $row['Respuestas'];
                        
                        echo"<tr>";
                        echo "<td> $Titulo </td> <td> $Autor </td> <td> $Fecha </td>";
                        echo"</tr>";
                        echo "<tr><td>$Mensaje</td></tr>";
                    }
                    echo" </table>"; 
                    
                    

                    if($_SESSION["nombre"] != null){
                        echo"<a href='formulario.php?identificador=$identificador&respuestas=$Respuestas' class='button primary'> Responde</a>";
                    }else{
                        echo"<a href='../altas/login.php' class='button primary'>Registrate</a></li>";                   
                    }
                    ?>
                </div>

			</section>

			<!-- Footer -->
				<footer id="footer">
					<ul class="icons">
						<li><a href="https://www.facebook.com/" target="_blank" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
						<li><a href="https://www.instagram.com/" target="_blank" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
					</ul>
				</footer>
			<!-- end Footer -->

		</div>

		<!-- Scripts -->
			<script src="../js/jquery.min.js"></script>
			<script src="../js/jquery.dropotron.min.js"></script>
			<script src="../js/jquery.scrollex.min.js"></script>
			<script src="../js/browser.min.js"></script>
			<script src="../js/breakpoints.min.js"></script>
			<script src="../js/util.js"></script>
			<script src="../js/main.js"></script>

	</body>
</html>