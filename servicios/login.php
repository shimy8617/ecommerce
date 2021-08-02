<?php
//1: Error de conexion
//2: Email invalido
//3: Contraseña incorrecta
include('_conexion.php');
$emausug=$_POST['emausug'];
$sql="SELECT * FROM USUARIO_GESTION WHERE emausug='$emausug'";
$result=mysqli_query($con,$sql);
if ($result) {
	$row=mysqli_fetch_array($result);
	$count=mysqli_num_rows($result);
	if ($count!=0) {
		$pasusug=$_POST['pasusug'];
		if ($row['pasusug']!=$pasusug) {
			header('Location: ../index.php?e=3');
		}else{
			session_start();
			$_SESSION['codusug']=$row['codusug'];
			$_SESSION['emausug']=$row['emausug'];
			$_SESSION['nomusug']=$row['nomusug'];
			header('Location: ../inicio.php');
		}
	}else{
		header('Location: ../index.php?e=2');
	}
}else{
	header('Location: ../index.php?e=1');
}