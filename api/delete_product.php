<?php
	include("../servicios/_conexion.php");
	$response=new stdClass();

	$codpro=$_POST['codpro'];
	$sql="delete from producto 
	where codpro=$codpro";
	$result=mysqli_query($con,$sql);
	if($result) {
		$response->state=true;
	}else{
		$result->state=false;
		$response->detail="No se puede eliminar el producto";
	}

	echo json_encode($response);