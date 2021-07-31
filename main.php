<?php
	include('config/conexion.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Administración | Productos</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<script src="https://kit.fontawesome.com/469e0bb689.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="fontawesome-v5/css/fontawesome.min.css">
</head>
<body>
	<div class="main-container">
		<?php include ("layout/_directorios.php"); ?>
		<div class="body-page">
			<h2>Inicio / Pendientes de despacho</h2>
			<table class="mt10">
				<thead> 
					<tr>
						<th>Código</th>
						<th>Usuario</th>
						<th>Producto</th>
						<th>Fecha</th>
						<th>Estado</th>
						<th>Dirección</th>
						<th>Teléfono</th>
						<th>Opciones</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$sql="SELECT ped.*,usu.*,pro.*,CASE WHEN ped.estado=2 THEN 'Pendiente' ELSE 'Otro' END estadotexto from pedido ped
						inner join usuario Usu
						on ped.codusu=usu.codusu
						inner join producto pro
						on ped.codpro=pro.codpro
						where ped.estado=2";
						$resultado=mysqli_query($con,$sql);
						while ($row=mysqli_fetch_array($resultado)){
							echo
					'<tr>
						<td>'.$row["codped"].'</td>
						<td>'.$row["codusu"].' - '.$row['nomusu'].'</td>
						<td>'.$row["codpro"].' - '.$row['nompro'].'</td>
						<td>'.$row["fecped"].'</td>
						<td>'.$row["estado"].'</td>
						<td>'.$row["dirusuped"].'</td>
						<td>'.$row["telusuped"].'</td>
						<td class="td-option">
								<button onclick="despachado('.$row["codped"].')">Despachado</button>
						</td>
					</tr>';
							}
					?>
				</tbody>
			</table>
		</div>
	</div>
	<script type="text/javascript">
		function show_modal(id){
			document.getElementById(id).style.display="block";
		}
		function hide_modal(id){
			document.getElementById(id).style.display="none";
		}
		function despachado(codped){
			let fd=new FormData();
			fd.append('codped',codped);
			let request=new XMLHttpRequest();
			request.open('POST','api/order_confirm.php',true);
			request.onload=function(){
				if(request.readyState==4 && request.status==200) {
					let response=JSON.parse(request.responseText);
					console.log(response);
					if(response.state){
						window.location.reload();
					}else{
						alert(response.detail);
					}
				}
			}
			request.send(fd);
		}
	</script>
</body>
</html>


