<!DOCTYPE html>
<html>
<head>
	<title>CambioPass</title>
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
				<h2>Cambiar su contraseña</h2>
					<form action="procesarCambiarPass.php" method="POST">
					<fieldset>
                    <p>Nueva contraseña: <input type="password" name="newpass" placeholder="Enter your new password"/></p>
                    <p>Confirma contraseña: <input type="password" name="oldpass" placeholder="Enter your old password"/></p>
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
			<script src="../js/jquery.min.js"></script>
			<script src="../js/jquery.dropotron.min.js"></script>
			<script src="../js/jquery.scrollex.min.js"></script>
			<script src="../js/browser.min.js"></script>
			<script src="../js/breakpoints.min.js"></script>
			<script src="../js/util.js"></script>
			<script src="../js/main.js"></script>				
</body>
</html>