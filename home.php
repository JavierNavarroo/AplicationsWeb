<!DOCTYPE HTML>
			
<?php 
    session_start();
?>

<html>
	<head>
			<?php 
				include('head.php');
			?>
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
									<li><a href="micuenta.php">Mi cuenta</a></li>
									<li><a href="contacto.php">Contacto</a></li>
									<li><a href="foro.php">Foro</a></li>
									<li><a href="nosotros.php">Sobre nosotros</a></li>
									<li><a href="guiasturisticas.php">Guias Turisticas</a></li>
									<li><a href="misviajes.php">Mis viajes</a></li>
								</ul>
							</li>
							 
							<?php 
							if($_SESSION["login"] || $_SESSION["alta"] ){
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
					</div>
					</div>	
				</section>	

							
			<!-- Footer -->
			<?php 
				include('footer.php');
			?>
		<!-- end Footer -->
		</div>

		 <!-- Scripts -->
		 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		 	<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/buscador.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
	</body>
</html>