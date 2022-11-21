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
				<span class="logo-icon">
					<img src="./logo-title.png" alt="">
				</span>
				<h1 class="logo-title">
					<span>Sebastian</span>
					<span>Alfonso</span>
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
				<a href="../index2.php">
					<i class="ph-browsers"></i>
					<span>Inicio</span>
				</a>
				<a href="../listado_habitacion.php">
					<i class="ph-check-square"></i>
					<span>Listado habitaciones </span>
				</a>
				<a href="../listado_servicios.php">
					<i class="ph-check-square"></i>
					<span>Listado servicios </span>
				</a>
				<a href="../php/log_out.php">
					<i class="ph-check-square"></i>
					<span>Cerrar sesión</span>
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
				<h2>Inicio</h2>
				<div class="tiles">
					<article class="tile">
						<div class="tile-header">
							<i class="ph-lightning-light"></i>
							<h3>
								<span>Reservas</span>
								<span>60% de el encargado</span>
							</h3>
						</div>
						<a href="#">
						</a>
					</article>
					<article class="tile">
						<div class="tile-header">
							<i class="ph-fire-simple-light"></i>
							<h3>
								<span>SITIOS VISITADOS</span>
								<span>46</span>
							</h3>
						</div>
						<a href="#">
						</a>
					</article>
					<article class="tile">
						<div class="tile-header">
							<i class="ph-fire-simple-light"></i>
							<h3>
								<span>LOCALIDADES</span>
								<span>6</span>
							</h3>
						</div>
						<a href="#">
						</a>
					</article>
					<article class="tile">
						<div class="tile-header">
							<i class="ph-fire-simple-light"></i>
							<h3>
								<span>DINERO GASTADO</span>
								<span>61.1350...
								</span>
							</h3>
						</div>
						<a href="#">
						</a>
					</article>
				</div><br>
			</section>
		<div class="borde">
			<section class="transfer-section">
				<div class="transfer-section-header">
					<h2>Detalles de reserva</h2>
				</div>
				<div class="row">
					<div class="col-8">
					  <div data-bs-spy="scroll" data-bs-target="#simple-list-example" data-bs-offset="0" data-bs-smooth-scroll="true" class="scrollspy-example" tabindex="0">
						<div class="transfer">
							<div class="transfer-logo">
								<h4 id="simple-list-item-1">1</h4> <img src="./bogotá.jpg" />
							</div>
							<dl class="transfer-details">
								<div>
									<dt>Bogota urban</dt>
									<dd>26 royal</dd>
								</div>
								<div>
									<dt>fecha</dt>
									<dd>2022/12/12
								</div>
								<div>
									<dt>Habitacion familiar vip</dt>
								</div>
							</dl>
							<div class="transfer-number">
								- $ 550000
							</div>
						</div>
						<div class="transfer">
							<div class="transfer-logo">
								<h4 id="simple-list-item-2">2</h4><img src="./bogotá.jpg">
							</div>
							<dl class="transfer-details">
								<div>
									<dt>Bogota urban</dt>
									<dd>26 royal</dd>
								</div>
								<div>
									<dt>fecha</dt>
									<dd>2022/12/12
								</div>
								<div>
									<dt>Habitacion familiar vip</dt>
								</div>
							</dl>
							<div class="transfer-number">
								- $ 120000
							</div>
						</div>
						<div class="transfer">
							<div class="transfer-logo">
								<h4 id="simple-list-item-3">3</h4><img src="./bogotá.jpg" />
							</div>
							<dl class="transfer-details">
								<div>
									<dt>Bogota urban</dt>
									<dd>26 royal</dd>
								</div>
								<div>
									<dt>fecha</dt>
									<dd>2022/12/12
								</div>
								<div>
									<dt>Habitacion familiar vip</dt>
								</div>
							</dl>
							<div class="transfer-number">
								- $ 700000
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
<script src='https://unpkg.com/phosphor-icons'></script><script  src="./script.js"></script>
</body>
</html>
