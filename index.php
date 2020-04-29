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
					<h1><a href="index.php">IVELITE</a> tu agencia de viajes.</h1>
					<nav id="nav">
						<ul>
							<li>
								<a href="#" class="icon solid fa-angle-down">Menú</a>
								<ul>
									<li><a href="contacto.html">Contacto</a></li>
									<li><a href="foro.html">Foro</a></li>
									<li><a href="nosotros.html">Sobre nosotros</a></li>
									<li><a href="guiasturisticas.html">Guias Turisticas</a></li>
								</ul>
							</li>

						</ul>
					</nav>

				</header>

			<!-- Banner -->
				<section id="banner">
					
				<h2>IVELITE</h2>
				<p>Las mejores ofertas de vuelos y viajes, adéntrate en tu mundo interior descubriendo el exterior.
				Si no te has registrado aun para obtener mas ofertas, ¿a qué esperas?.
				</p>

				<ul class="actions special">
						<li><a href="login.php" class="button primary">LOGIN</a></li>
						    <?php 
							if (!$_SESSION["login"] || !$_SESSION["alta"]){
								echo  '<li><a href="alta.php" class="button primary">REGISTRATE</a></li>';
							}
							?>
					</ul>
					
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
										<p type="text">Elije la fecha de inicio y fin: 
											<input type="date" id="start" name="trip-start" >
											<input type="date" id="end" name="trip-start" >
										</p>
									</div>	
								</div>
							</div>
							<br>
							<div class="col-12">
								<ul class="actions special">
									<li><input type="submit" value="Buscar" /></li>
								</ul>
							</div>
						</form>		
					</div>
					</div>

					
					
					
				</section>			

			<!-- Footer -->
				<footer id="footer">
					<ul class="icons">
						<li><a href="https://www.facebook.com/" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
						<li><a href="https://www.instagram.com/" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
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