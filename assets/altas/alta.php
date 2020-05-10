<!DOCTYPE html>
<?php 
  session_start(); 
  ?>
<html>
<head>
	<title>Alta</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="../css/main.css" />
</head>
<body>	
<body class="landing is-preload">
		<div id="page-wrapper">
			<!-- Header -->
				<header id="header" class="alt">
					<h1><a href="../../index.php">IVELITE</a> tu agencia de viajes.</h1>
					<nav id="nav">
						<ul>
							<li><a href="../../index.php">Inicio</a></li>
							<li>
								<a href="#" class="icon solid fa-angle-down">Menú</a>
								<ul>
									<li><a href="../../contacto.html">Contacto</a></li>
									<li><a href="../../foro.html">Foro</a></li>
									<li><a href="../../nosotros.html">Sobre nosotros</a></li>
									<li><a href="../../guiasturisticas.html">Guias Turisticas</a></li>
								</ul>
							</li>
							<li><a href="alta.php" class="button">Regístrate</a></li> 
						</ul>
					</nav>
				</header>
	<!-- LOGIN -->
				<section id="banner">
					<h2>Formulario de registro</h2>
					<form action="procesarAlta.php" method="POST">
					<fieldset>
					<p>Email: <input type="text" name="email" placeholder="Enter your email"/></p>
					<p>Name: <input type="text" name="username" placeholder="Enter your name"/></p>
					<p>Password: <input type="password" name="password" placeholder="Enter your pass"/></p>
					<button class="button primary" type="submit">Registrarse</button>
					</fieldset>
					</form>
				</section>	
 	       <!-- Footer -->
	        <?php 
				include('../../footer.php');
			?>
			<!-- end Footer -->

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
