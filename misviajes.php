<!DOCTYPE HTML>
<?php 
    if(!isset($_SESSION)) 
	{ 
		session_start(); 
	} 
?>
<html>
	<head>
		<title>Mis viajes</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="assets/css/propio.css" />
	</head>
	<body class="is-preload">
		<div id="page-wrapper">

			<!-- Header -->
			<?php 
				include './includes/header.php';
			?>

			<!-- Main -->
				<section id="main" class="container">
					<header>
						<br>
						<h2>Bienvenido al espacio reservado para tus viajes</h2>
					</header>
					
					<?php
					$idVuelo = $_GET['id'];

					echo "Usted tiene el viaje asignado con id: $idVuelo";

					?>



					<div class="row">
					<div class="col-12">
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