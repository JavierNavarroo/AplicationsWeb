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
                <h2>Foro iVELiTE</h2>
                
                <div class="container">
                <table id="foro">
					<?php
                    require_once '..\conf\Aplicacion.php';
                    require_once '..\conf\Config.php';
                   // require_once '.\assets\conf\Config.php';
                   // require_once '.\assets\conf\Usuario.php';
					$app = Aplicacion::getSingleton();
                    $conn = $app->conexionBd();
                    //$conn = Aplicacion::conexionBd();
                    if(isset($_GET["ID"]))
                    $identificador = $_GET['ID'];
                    $ID = $_GET['ID'];
                    $query = "SELECT * FROM  foro WHERE ID = '$ID' ORDER BY fecha DESC";
                    $result = $conn->query($query);
                    while($row = mysqli_fetch_array($result)){
                        //$ID = $row['ID'];
                        $Titulo = $row['Titulo'];
                        $Autor = $row['Autor'];
                        $Mensaje = $row['Mensaje'];
                        $Fecha = $row['Fecha'];
                        $Respuestas = $row['Respuestas'];
                        echo"<tr>";
                        echo "<td> $Titulo </td> <td> $Autor </td> <td> $Fecha </td>";
                        echo"</tr>";
                        echo "<tr><td>$Mensaje</td></tr>";
                    }
                    $query2 = "SELECT * FROM  foro WHERE Identificador = '$ID' ORDER BY fecha ASC";
                    $result2 = $conn->query($query2);
                    while($row = mysqli_fetch_array($result2, MYSQLI_ASSOC)){
                        $Titulo = $row['Titulo'];
                        $Autor = $row['Autor'];
                        $Mensaje = $row['Mensaje'];
                        $Fecha = $row['Fecha'];
                        $Respuestas = $row['Respuestas'];
                        
                        echo"<tr>";
                        echo "<td> $Titulo </td> <td> $Autor </td> <td> $Fecha </td>";
                        echo"</tr>";
                        echo "<tr><td>$Mensaje</td></tr>";
                    }
                    echo" </table>"; 
                    
                    

                    if($_SESSION["nombre"] != null){
                        echo"<a href='formulario.php?identificador=$identificador&respuestas=$Respuestas' class='button primary'> Responde</a>";
                        //echo "<br /><br /><a href='formulario.php?id&respuestas=$respuestas&identificador=$id'>Responder</a><br />";
                    }else{
                        echo"<a href='../altas/login.php' class='button primary'>Registrate</a></li>";                   
                    }
                    ?>
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
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>