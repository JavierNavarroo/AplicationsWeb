<?php session_start(); 

	$_SESSION["nombre"]="";
	$_SESSIN["rol"]="";
	$_SESSION["login"]=false;
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="../css/main.css" />
	<link rel="stylesheet" href="../css/propio.css" />
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
					<h2>Bienvenido a iVELiTE</h2>										
						<div class="row">
							<div class="col-5"></div>
							<div class="col">
								<div class="caja">						
									<form action="procesarLogin.php" method="POST">
										<fieldset>
											<p>Usuario y contraseña</p>
											<p>Name: <input type="text" name="username" placeholder="Enter your name"/></p>
											<p>Password: <input type="password" name="password" placeholder="Enter your pass"/></p>
											<button class="button primary" type="submit">Entrar</button>
										</fieldset>
									</form>	
								</div>								
							</div>
							<div class="col-4"></div>
						</div>					
				</section>
   	<!-- Footer -->
	   <?php 
				include '../../includes/footer.php';
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