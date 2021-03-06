<!DOCTYPE HTML>
<?php 
    if(!isset($_SESSION)) 
	{ 
		session_start(); 
	} 
?>

<html>
	<head>
		<title>Sobre nosotros</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="assets/css/propio.css" />
	</head>
	<body class="is-preload">
		<div id="page-wrapper">

			<!-- Header -->
			
			<?php 
				include './includes/header.php';
			?>

			<!-- Main -->
				<section id="main" class="container">
					<header>
						<h2>Nuestro equipo</h2>
						<h1> Quién es Quién </h1> 
					</header>
					
					<div class="row">
						<div class="col-12">

							<!-- Text -->
								<section class="box">
									<p> En iVelite trabajamos 5 personas repartidas por las aula de la Universidad Complutense.
									Cada uno tiene su trabajo programado, el cual ayuda al funcionamineto correcto de esta pagina web. </b></p>
									<p>Ahora vamos a ofreceros la biografia de las personas que forman parte de iVelite.</p>
									
									<p>Esto son nuestros <b>miembros.</b> </p>

									<div class="span4">
										<div>
											<img class="img-left" src = 'images/javi.jpg' />
											<h4>Hola soy <b>Javier</b></h4> 
											<p> Villacañas (1996). Javier es el Country Manager de iVelite.
											Entró hace más de cuatro años para dirigir las áreas de desarrollo, 
											un apasionado de proyectos que solucionan problemas reales.
											</p>			
										</div>
										<br>				
										<div>
											<img class="img-right" src = 'images/cintia.jpg' />
											<h4>Hola soy <b>Cintia</b></h4>
											<p> Madrid(1994).Es una profesioal de la tecnología con 4 años de 
											experiencia en el desarrollo, liderazgo, entrega y gestión de 
											tecnología de vanguardia a gran escala. </p>
										</div>
										<br>
										<div>
											<img class="img-left" src = 'images/iker.jpg' />
											
											<h4>Hola soy <b>Iker</b></h4>
											<p> Madrid (1998). Fundador de iVelite. Estudió la carrera de Ingenieria
											Informatica en la UCM, un máster en Ciencias de la Computació de la 
											Universidad de Stanford (EEUU). Iker participa en numerosas conferencias 
											sobre el tema de movilidad sostenible.
											</p>
										</div>									
										
										
										<div>
											<img class="img-right"src = 'images/pablo.jpg'  />
											<h4>Hola soy <b>Pablo</b></h4>
											<p> Madrid(1997).Trabajo en la NASA en California en la modelizacioón
											virtual de operacioes. Pablo es también un activo inversor y su función
											es administrar cuentas en varios países de Asia.										
											</p>
										</div>
										
									</div>
								</section>

						</div>
					</div>
					<div class="row">
						<div class="col-12">

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