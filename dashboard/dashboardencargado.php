<?php
session_start();
error_reporting(0);
$varversion=$_SESSION['usuario'];
if($varversion==null || $varversion=''){
	?>
		<script>alert("No tienes acceso")</script>
	<?php
	die();
}
?>


<!DOCTYPE html>
<html lang="en" >
<head>
<meta charset="UTF-8">
<title>Dashboard</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel="stylesheet" href="./style.css">
</head>

<body>
<div class="app">
	<header class="app-header">
		<div class="app-header-logo">
			<div class="logo">

				<h1 class="logo-title">
					<img src="./logo2.png" alt="">

				</h1>
			</div>
		</div>
	<input type="search" class="form-control" id="" name="search" required="">
	<div><button class="js-banner-subscribe-btn btn btn-primary btn-block">BUSCAR</button></div>		
	<div class="app-header-actions">
			<button class="user-profile">
				<span>Sebastian</span>
				<span>
					<img src="logo-title.png">
				</span>
			</button>
		</div>
		<div class="app-header-mobile">
			<button class="icon-button large">
				<i class="ph-list"></i>
			</button>
		</div>
	</header>
	<div class="app-body">
		<div class="app-body-navigation">
			<nav class="navigation">
				<a href="../mi_hotel.php">
					<i class="ph-swap"></i>
					<span>Mi hotel</span>
				</a>
				<a href="../actualizar_habitacion.php">
					<i class="ph-browsers"></i>
					<span>Actualizar habitacion</span>
				</a>
				<a href="../hoteles_a_tu_nombre.php">
					<i class="ph-check-square"></i>
					<span>Hoteles a tu nombre</span>
				</a>
				<a href="../info_personal_encargado.php">
					<i class="ph-swap"></i>
					<span>Informacion encargado</span>
				</a>
				<a href="../listado_habitacion.php">
					<i class="ph-swap"></i>
					<span>Habitaciones</span>
				</a>
				<a href="../listado_servicios.php">
					<i class="ph-swap"></i>
					<span>servicios</span>
				</a>
				<a href="../php/log_out.php">
					<i class="ph-check-square"></i>
					<span>Cerrar sesión</span>
					<br>
				</a>
			</nav>
			<footer class="footer">
				<h1>Hotelia<small>©</small></h1>
				<div>
					Hotelia ©<br />
					2022
				</div>
			</footer>
		</div>
		<div class="app-body-main-content">
			<section class="service-section">
				<h2>Menu principal</h2>
				<div class="tiles">
					<article class="tile">
						<div class="tile-header">
							<i class="ph-lightning-light"></i>
							<h3>
								<span>Realizar</span>
								<span>REPORTE</span>
								<SPAn>-------------------</SPAn>
							</h3>
						</div>
						<a href="#">
						</a>
					</article>
					<article class="tile">
						<div class="tile-header">
							<i class="ph-fire-simple-light"></i>
							<h3>
								<span>Realizar</span>
								<span>REPORTE</span>
								<SPAn>-------------------</SPAn>
							</h3>
						</div>
						<a href="#">
						</a>
					</article>
				</div><br>
			</section>
		<div class=" borde">
			<section class="transfer-section">
				<div class="transfer-section-header">
					<h2>Detalles de reserva</h2>
				</div>
				<div class="row">
					<div class="col-8">
					<div data-bs-spy="scroll" data-bs-target="#simple-list-example" data-bs-offset="0" data-bs-smooth-scroll="true" class="scrollspy-example" tabindex="0">
						<div class="transfer">
							<dl class="transfer-details">
								<div>
									<dt>5</dt>
								</div>
								<div>
									<dt>Pablo guzman</dt>
								</div>
								<div>
									<dt>2022/12/12</dt>
								</div>
								<div>
									<dt>ACTIVA</dt>
								</div>
							</dl>
							<div class="transfer-number">
								3133526589
							</div>
						</div>
						<div class="transfer">
							<dl class="transfer-details">
								<div>
									<dt>6</dt>
								</div>
								<div>
									<dt>Pablo guzman</dt>
								</div>
								<div>
									<dt>2022/12/12</dt>
								</div>
								<div>
									<dt>INACTIVA</dt>
								</div>
							</dl>
							<div class="transfer-number">
								3133526589
							</div>
						</div>
					</div>
					</div>
				</div>
				<div class="transfers">
				</div>
			</section>
		</div>
	</div>
	</div>
</div>
<script src='https://unpkg.com/phosphor-icons'></script><script  src="../script.js"></script>
</body>
</html>
