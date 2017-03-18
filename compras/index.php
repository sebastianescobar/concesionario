<?php 
	require "../public/header.php"; 
	require "../connection.php";
	require "../public/seguridad1.php";


?>
 <body background="../imgs/fondo1.jpg" style="background-size: cover; ">

	<style>
		table{
			position: absolute;
		}	
	</style>

	<div class="text-center">
		
		<h1>Compras</h1>
		<a href="../Dashboard.php">Regresar</a>
		<hr>
			
			<table border="1" class="table table-hover">
				<thead>
					<tr>
						<td>numero de cuenta</td>
						<td>nombre completo</td>
						<td>Acciones</td>
					</tr>
				</thead>
				<tbody>
					<?php 

						$usuarios = mysqli_query($conx, "SELECT * FROM compras");
						while ($usuario = mysqli_fetch_array($usuarios)){
							echo "
								<tr>
									<td>$usuario[numero_cuenta]</td>
									<td>$usuario[nombre_completo]</td>
									<td>
										
										<a href='consultar.php?id=".$usuario['id']."'>Ver detalle</a>
										<a href='modificar.php?id=".$usuario['id']."'>modificar</a>
										<a href='javascript:;' class='eliminar-usuario' data-id='$usuario[id]' >cancelar</a>
									</td>

								</tr>

						 ";
						}

						
							
											
						

					 ?>
				</tbody>
				
			</table>
	</div>
<?php require "../public/footer.php"; ?>
