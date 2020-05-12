<!DOCTYPE HTML>
			
<?php 
    session_start();
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
				include './includes/header.php';
			?>

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