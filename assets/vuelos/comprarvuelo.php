<!DOCTYPE HTML>
	<?php 
	if(!isset($_SESSION)) 
	{ 
		session_start(); 
	} 
	?>
<html>
	<head>
		<title>Comprar vuelo</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="../css/main.css" />
		<link rel="stylesheet" href="../css/propio.css" />
	</head>
	<body class="is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header">
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
									<li><a href="contacto.php">Contacto</a></li>
									<li><a href="foro.php">Foro</a></li>
									<li><a href="nosotros.php">Sobre nosotros</a></li>
									<li><a href="guiasturisticas.php">Guias Turisticas</a></li>
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
			
				<section id="main" class="container">
					<header>
						<br>
						<h2>Informacion sobre el Vuelo</h2>
						<h3>Vuelo con id: <?php echo $_GET["ID"] ?></h3>

						<?php

						require_once '..\conf\Aplicacion.php';
						require_once '..\conf\Config.php';
	
						$app = Aplicacion::getSingleton();
						$conn = $app->conexionBd();

						if(isset($_GET["ID"]))
						$identificador = $_GET['ID'];
						$ID = $_GET['ID'];
						
						$query = "SELECT * FROM  vuelos WHERE idVuelo = '$ID'";
						$result = $conn->query($query);
					
						while($row = mysqli_fetch_array($result)){
							$ID = $row['idVuelo'];
							$Origen = $row['Origen'];
							$Destino = $row['Destino'];
							$FechaIni = $row['FechaInicio'];
							$Precio = $row['Precio'];
						

							echo "<h3> Con origen: $Origen </h3>";
							echo "<h3> Con destino: $Destino </h3>";
							echo "<h3> Con fecha: $FechaIni </h3>";
							echo "<h3> Con precio: $Precio € </h3>";
						}
						?>
					</header>
					<div class="centro">
					<a href="../../misviajes.php?id=<?php echo $ID?>" class='button'> Comprar Vuelo </a>
					</div>
					<div class="row">
						<div class="col-12">		
				</section>

			<!-- Footer -->
            <?php 
				include '../../includes/footer.php';
			?>
			<!-- end Footer -->

		</div>
	</body>
</html>