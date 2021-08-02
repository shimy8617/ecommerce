<?php
	include('servicios/_conexion.php');
?>
<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>	
	<title>Administración | Principal</title>
	<meta charset="utf-8">
	<script src="https://kit.fontawesome.com/469e0bb689.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style type="text/css"></style>
</head>
<body>
	<div class="main-container">
		<?php include("layout/_directorios.php"); ?>
		<div class="body-page">
			<h2>Bienvenido, <span><?php echo $_SESSION['nomusug'];?>!</span></h2>
		</div>
	</div>
</body>
</html>