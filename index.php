<!DOCTYPE HTML>
		
<?php 
   if(!isset($_SESSION)) 
   { 
	   session_start(); 
   } 
  $_SESSION["login"]=null;
  ?>

<html>
	<head>
			<?php 
				include './includes/head.php';
			?>
	</head>
	<body class="landing is-preload">
		<div id="page-wrapper">
			<!-- Header -->
			<?php 
				include('./includes/header.php');
			?>

			<!-- Banner -->
				<section id="banner">
					
				<h2>IVELITE</h2>
				<p>Las mejores ofertas de vuelos y viajes, adéntrate en tu mundo interior descubriendo el exterior.
				Si no te has registrado aun para obtener mas ofertas, ¿a qué esperas?.
				</p>

				<ul class="actions special">
						<li><a href="assets/altas/login.php" class="button primary">LOGIN</a></li>
						    <?php 
							if (!isset ($_SESSION['usuario'])){
								echo '<li><a href="assets/altas/alta.php" class="button primary">REGISTRATE</a></li>';
							}
							?>
				</ul>
					
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