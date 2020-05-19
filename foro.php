<!DOCTYPE HTML>

<?php 
	if(!isset($_SESSION)) 
	{ 
		session_start(); 
	} 
	?>

<html>
	<head>
		<?php 
			include './includes/head.php';
		?>
		<title>Foro</title>
		<!--<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="assets/css/main.css" /> -->
        
	</head>
	<body class="landing is-preload">
		<div id="page-wrapper">

			<!-- Header -->
			<?php 
				include './includes/header.php';
			?>

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
			<?php 
				include './includes/footer.php';
			?>
			<!-- end Footer -->

		</div>

		<!-- Scripts -->
		<?php 
			include './includes/scripts.php';
		?>

	</body>
</html>