<!DOCTYPE HTML>
<?php 
	if(!isset($_SESSION)) 
	{ 
		session_start(); 
	} 
	?>
<html>
	<head>
		<title>Mi cuenta</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="assets/css/propio.css" />
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
									<li><a href="contacto.php">Contacto</a></li>
									<li><a href="foro.php">Foro</a></li>
									<li><a href="nosotros.php">Sobre nosotros</a></li>
									<li><a href="guiasturisticas.php">Guias Turisticas</a></li>
								</ul>
							</li>
							<li><a href="assets/altas/logout.php" class="button">Logout</a></li> 
						</ul>
					</nav>
				</header>

			<!-- Main -->
			
				<section id="main" class="container">
					<header>
						<br>
						<h2>Bienvenido a tu cuenta</h2>
						<h1>¿Que desea hacer?</h1>
					</header>
					<div class="centro">
						<a href="assets/account/cambiarNombre.php" class="button">Cambiar Nombre</a> 
						<a href="assets/account/cambiarPass.php" class="button">Cambiar Contraseña</a> 
						<a href="assets/accounT/eliminarCuenta.php" class="button">Eliminar Cuenta</a>
					</div>
					<div class="row">
						<div class="col-12">		
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