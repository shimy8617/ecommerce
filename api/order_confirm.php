<?php
	include("../servicios/_conexion.php");
	$response=new stdClass();

	$codped=$_POST['codped'];
	$sql="UPDATE pedido set estado=4 
	where codped=$codped";
	$result=mysqli_query($con,$sql);
	if($result==true) {
		$response->state=true;
	}else{
		$result->state=true;

	}

	echo json_encode($response);