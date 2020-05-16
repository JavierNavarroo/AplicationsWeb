<!DOCTYPE html>
<html>
<head>
	<title>EliminarCuenta</title>
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
							<li><a href="../altas/logout.php" class="button">Logout</a></li> 
						</ul>
					</nav>
				</header>
	<!-- LOGIN -->
				<section id="banner">
				<h2>Confirma la eliminacion de su cuenta</h2>
					<form action="procesarEliminarCuenta.php" method="POST">
					<fieldset>
                    <p>Contraseña: <input type="password" name="pass" placeholder="Enter your password"/></p>
					<button class="button primary" type="submit">Confirmar</button>
					</fieldset>
					</form>
				</section>	
   <!-- Footer -->
				<footer id="footer">
					<ul class="icons">
						<li><a href="https://www.facebook.com/" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
						<li><a href="https://www.instagram.com/" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
					</ul>
				</footer>	

<!-- Scripts -->
	<?php 
		include './includes/scripts.php';
	?>			
</body>
</html>