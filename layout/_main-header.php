<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Administración | Principal</title>
	<link rel="stylesheet" type="text/css" href="../css/index.css">
</head>
<body>
	<div class="options-place">
		<?php
		if (isset($_SESSION['codusug'])) {
			echo 
			'<div class="item-option" onclick="mostrar_opciones()"><i class="far fa-user"></i><p>'.$_SESSION['nomusug'].'</p></div>';
		}else{
		?>
		<div class="item-option" title="Registrate"><a href="login.php"><i class="far fa-user"></i></div>
		<div class="item-option" title="Ingresar a mi cuenta"><a href="login.php"><i class="fas fa-sign-in-alt"></i></div>
		<?php
		}
		?>
	</div>


	<div class="main-container">
		<div class="body-nav-bar">
			<div class="logo-img"><img src="../assets/web/aypoo.jpg"></div>
			<h1>Administrador</h1>
		<ul class="mt10">
			<li><a href="_main-header.php">Inicio</a></li>
			<li><a href="../pedidos.php">pedidos</a></li>
			<li><a href="../productos.php">Productos</a></li>
			<li><a href="../index.php">Salir</a></li>
		</ul>
		</div>
		<?php
		if (isset($_SESSION['codusug'])) {
			echo 
			'<div class="item-option" onclick="mostrar_opciones()"><i class="far fa-user"></i><p>'.$_SESSION['nomusug'].'</p></div>';
		}
		?>
		<div class="body-page">
			<h2>Bienvenido</h2>
		</div>
	</div>
</body>
</html>