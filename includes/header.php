<header id="header" class="alt">
					<?php					
					if (($_SESSION['login']) == true){
						echo"<h1><a href='home.php'>IVELITE</a> tu agencia de viajes.</h1>";
					}else{
						echo"<h1><a href='index.php'>IVELITE</a> tu agencia de viajes.</h1>";
					}
					?>
					<nav id="nav">
						<ul>
							<li>
								<a href="#" class="icon solid fa-angle-down">Menú</a>
								<ul>
									<li><a href="contacto.php">Contacto</a></li>
									<li><a href="foro.php">Foro</a></li>
									<li><a href="nosotros.php">Sobre nosotros</a></li>
									<li><a href="guiasturisticas.php">Guias Turisticas</a></li>
									<li><a href="misviajes.php">Mis viajes</a></li>
								</ul>
							</li>
							 
							<?php 
							if (($_SESSION['login']) == true){
                                echo  '<li><a href="assets/altas/logout.php" class="button">Logout</a></li>';
                                echo  "<li><a href='micuenta.php' class='button'> Perfil</a></li>";
                            }
                            else{
                                echo  '<li><a href="assets/altas/login.php" class="button">Login</a></li>';
                            }
							?>

						</ul>
					</nav>
				</header>