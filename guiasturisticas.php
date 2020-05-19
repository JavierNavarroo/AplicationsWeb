<!DOCTYPE HTML>

<?php 
	if(!isset($_SESSION)) 
	{ 
		session_start(); 
	} 
	?>

<html>
	<head>
		<title>Guias Turisticas</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="assets/css/propio.css" />
	</head>
	<body class="is-preload">
		<div id="page-wrapper">

			<!-- Header -->
			<?php 
				include 'includes/header.php';
			?>

			<!-- Main -->
			<section id="main" class="container">
				<header>
					<h2>Guías Turísticas</h2>
				</header>
				<div class="box">						
					<div class="row">
						<div class="col-6">
							<a target="_blank" href="guias/madrid.php">
								<img src="images/madrid.jpg"  width="500" height="300">
							</a>							
						</div>
						<div class="col-6">
							<a target="_blank" href="guias/zaragoza.php">
								<img src="images/zaragoza.jpg" width="500" height="300">
							</a>												
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-6">									
							<a target="_blank" href="guias/barcelona.php">
								<img src="images/barcelona.jpg" width="500" height="300">
							</a>																
						</div>
						<div class="col-6">								
							<a target="_blank" href="guias/ibiza.php">
								<img src="images/ibiza.jpg" width="500" height="300">
							</a>	
						</div>						
					</div>					
				</div>							
				</section>
		</div>
		<!-- Footer -->
		<?php 
			include 'includes/footer.php';
		?>

		<!-- Scripts -->
		<?php 
			include 'includes/scripts.php';
		?>

	</body>
</html>