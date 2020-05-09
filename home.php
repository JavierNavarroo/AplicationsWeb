<!DOCTYPE HTML>
			
<?php 
    session_start();
?>

<html>
	<head>
		<title>IVELITE</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	
	<body class="landing is-preload">
		<div id="page-wrapper">
			<!-- Header -->
				<header id="header" class="alt">
					<h1><a href="home.php">IVELITE</a> tu agencia de viajes.</h1>
					<nav id="nav">
						<ul>
							<li>
								<a href="#" class="icon solid fa-angle-down">Menú</a>
								<ul>
									<li><a href="micuenta.html">Mi cuenta</a></li>
									<li><a href="contacto.html">Contacto</a></li>
									<li><a href="foro.php">Foro</a></li>
									<li><a href="nosotros.html">Sobre nosotros</a></li>
									<li><a href="guiasturisticas.html">Guias Turisticas</a></li>
									<li><a href="misviajes.html">Mis viajes</a></li>
								</ul>
							</li>
							 
							<?php 
							if (isset($_SESSION["login"])  || isset($_SESSION["alta"])){
								echo  '<li><a href="assets/altas/logout.php" class="button">Logout</a></li>';
							}
							?>

						</ul>
					</nav>
				</header>

				<!-- Banner -->
				<section id="banner">
					<h2>HOME IVELITE</h2>
					<p>Bienvenido a tu portal web, ¿qué te trae por aquí?.</p>

					<div class="container">
					<div class="newbox"> 	<!-- LA CLASE NEWBOX ES CREADA DE CERO -->
						<form method="post" action="#">
							<div class="row gtr-50 gtr-uniform">
								<div class="col-6 col-12-mobilep">
									<input type="textbuscador" name="origen" id="origen" value="" placeholder="Origen" />
								</div>
								<div class="col-6 col-12-mobilep">
									<input type="textbuscador" name="destino" id="destino" value="" placeholder="Destino" />
								</div>
								<div class="col-12" >
									<div class="centro">
									<p type="text">Elije la fecha de la ida: 
											<input type="date" id="start" name="trip-start">
										</p>
									</div>	
								</div>
							</div>
							<br>
							<div class="col-12">
								<ul class="actions special">
									<li><input type="submit" value="Buscar" id="idbotonbusqueda"/></li>
								</ul>
							</div>
							<br>
							<div id= "datos">
							

							</div>
						</form>		
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
		 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
			<script src="assets/js/buscador.js"></script>
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
	</body>
</html>