<!DOCTYPE HTML>
<?php 
	if(!isset($_SESSION)) 
	{ 
		session_start(); 
	} 
	?>
<html>
	<head>
		<title>Contacto</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				
				<?php 
					include './includes/header.php';
				?>

			<!-- Main -->
				<section id="main" class="container medium">
					<header>
						<br>
						<h2>Contáctanos</h2>
						<p>¿Opiniones? ¿Sugerencias? Ayúdanos a mejorar.</p>
					</header>
					<div class="box">
					<form action="mailto:direcciondelcorreo@correo.com" method="post" enctype="text/plain">
							<div class="row gtr-50 gtr-uniform">
								<div class="col-6 col-12-mobilep">
									<input type="text" name="name" id="name" value="" placeholder="Nombre" />
								</div>
								<div class="col-6 col-12-mobilep">
									<input type="email" name="email" id="email" value="" placeholder="Email" />
								</div>
								<div class="col-12">
									<input type="text" name="subject" id="subject" value="" placeholder="Asunto" />
								</div>
								<div class="col-12">
									<textarea name="message" id="message" placeholder="Sugerencias, opiniones..." rows="6"></textarea>
								</div>
								<div class="col-12">
									<ul class="actions special">
										<li><input type="submit" id= "boton" value="Enviar" /></li>
									</ul>
								</div>
							</div>
						</form>
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