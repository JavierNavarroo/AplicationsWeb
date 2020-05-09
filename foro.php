<!DOCTYPE HTML>

<?php 
    session_start(); 
	?>

<html>
	<head>
		<title>Sobre nosotros</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="assets/css/main.css" />
        
	</head>
	<body class="is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header">
					<h1><a href="home.php">IVELITE</a> tu agencia de viajes.</h1>
					<nav id="nav">
						<ul>
							<li>
								<a href="#" class="icon solid fa-angle-down">Menú</a>
								<ul>
								    <li><a href="micuenta.html">Mi cuenta</a></li>
									<li><a href="contacto.html">Contacto</a></li>
									<li><a href="nosotros.html">Sobre nosotros</a></li>
									<li><a href="guiasturisticas.html">Guias Turisticas</a></li>
								</ul>
							</li>
						</ul>
					</nav>
				</header>

            <!-- Main -->

                    
            <section id="banner">
                <h2>Foro iVELiTE</h2>
                
                <div class="container">
				
                <table id="foro">
                    <thead>
                    <tr class="info">
                        <th>Nombre</th>
                        <th>Tema</th>
                        <th>Respuestas</th>
                    </tr>
                    </thead>
                    <tbody>
					<?php	
					require_once '.\assets\conf\Aplicacion.php';
					require_once '.\assets\conf\Config.php';
					$app = Aplicacion::getSingleton();
					$conn = $app->conexionBd();
					$_SESSION['ID'] = 0;
					//$conn = Aplicacion::conexionBd();
					$query = "SELECT * FROM  foro WHERE Identificador = 0 ORDER BY fecha DESC";
					$result = $conn->query($query);
					while($row = mysqli_fetch_array($result)){
						$Autor = $row['Autor'];
						$ID = $row['ID'];
						if($_SESSION['ID'] < $ID){
							$_SESSION['ID'] = $ID;
						}
						
						$Titulo = $row['Titulo'];
						$Respuestas = $row['Respuestas'];
						echo "<tr>";
							echo "<td>$Autor</td>";
							echo "<td>$Titulo</td>";
							echo "<td><a href='assets/foro/tema.php?ID=$ID'> $Respuestas </a></td>";
						echo "</tr>";
					}
					?>
                    </tbody>
                </table>
                </div>
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
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>