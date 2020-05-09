<!DOCTYPE HTML>

<?php 
    session_start(); 
	?>

<html>
	<head>
		<title>Sobre nosotros</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <!-- <link rel="stylesheet" href="assets/css/main.css" /> -->
        <link rel="stylesheet" href="../css/main.css" />
        
	</head>
	<body class="is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header">
					<h1><a href="../../home.php">IVELITE</a> tu agencia de viajes.</h1>
					<nav id="nav">
						<ul>
							<li>
								<a href="#" class="icon solid fa-angle-down">Menú</a>
								<ul>
                                    <li><a href="../../micuenta.html">Mi cuenta</a></li>
                                    <li><a href="../../foro.php">Foro</a></li>
									<li><a href="../../contacto.html">Contacto</a></li>
									<li><a href="../../nosotros.html">Sobre nosotros</a></li>
									<li><a href="../../guiasturisticas.html">Guias Turisticas</a></li>
								</ul>
							</li>
						</ul>
					</nav>
				</header>

            <!-- Main -->

                    
            
            
            <section id="banner">
                <h2>RESPUESTA</h2>
                <?php
                if(isset($_GET["respuestas"]))
                    $respuestas = $_GET['respuestas'];
                else
                    $respuestas = 0;
                if(isset($_GET["identificador"]))
                    $identificador = $_GET['identificador'];
                else
                    $identificador = 0;
                 ?>
                <table>
                <form name="form" action="agregar.php" method="post">
                    <input type="hidden" name="identificador" value="<?php echo $identificador;?>">
                    <input type="hidden" name="respuestas" value="<?php echo $respuestas;?>">
                    <tr>
                    <td>Titulo</td>
                    <td><input type="text" name="titulo"></td>
                    </tr>
                    <tr>
                    <td>Mensaje</td>
                    <td><textarea name="mensaje" cols="50" rows="5" required="required"></textarea></td>
                    </tr>
                    <tr>
                    <td><input type="submit" id="submit" name="submit" value="Enviar Mensaje"></td>
                    </tr>
                </form>
                </table>

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
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>