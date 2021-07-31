<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aypoo E-commerce</title>
	<script src="https://kit.fontawesome.com/469e0bb689.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style type="text/css">
		form{
			max-width: 460px;
			width: calc(100% - 40px);
			padding: 20px;
			background: #fff;
			border-radius: 5px;
			margin: auto;
		}
		form h3{
			margin: 5px 0;
		}
		form input{
			padding: 7px 10px;
			width: calc(100% - 22px);
			margin-bottom: 10px;
		}
		form button{
			padding: 10px 15px;
			width: calc(100%);
			background: var(--main-red);
			border: none;
			color: #fff;
		}
		form p{
			margin: 0;
			margin-bottom: 5px;
			color: var(--main-red);
			font-size: 14px;
		}
	</style>
</head>
<body>
	<header>
		<div class="logo-place"><a href=""><img src="assets/web/aypoob.jpg"></a></div>
	</header>
	<div class="main-content">
		<div class="content-page">
			<form action="servicios/login.php" method="POST">
				<h3>Iniciar Sesión</h3>
				<input type="text" name="emausu" placeholder="Mail">
				<input type="password" name="pasusu" placeholder="Contraseña">
				<?php
					if (isset($_GET['e'])) {
						switch ($_GET['e']) {
							case '1':
								echo '<p>Error de conexión</p>';
								break;
							case '2':
								echo '<p>Email inválido</p>';
								break;
							case '3':
								echo '<p>Contraseña incorrecta</p>';
								break;
							default:
								break;
						}
					}
				?>
				<button type="submit">Ingresar</button>
			</form>
		</div>
	</div>
	<button onclick="login()">Ingresar</button>
	<script type="text/javascript">
		function login(){
			window.location.href="main.php";
		}
	</script>
</body>
</html>