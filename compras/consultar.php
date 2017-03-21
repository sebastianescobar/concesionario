<?php require "../public/header.php" ?>
<?php require "../connection.php";
	require "../public/seguridad1.php";
 ?>

 <body background="../imgs/fondo1.jpg" style="background-size: cover; ">
<div class="text-center">
		<h1>Consultar compra</h1>
		<a href="index.php">Regresar</a>
		<hr>

		<?php 	if ($_GET) {

					$id = $_GET['id'];
		
			$usuarios = mysqli_query($conx, "SELECT * FROM compras where id = '$id' ");
					while ($usuario = mysqli_fetch_array($usuarios)){

						echo "
							<div class='container'>
								<table border='1' class='table-condensed'>

										<tr>
											<td>numero de cuenta</td>
											<td>$usuario[numero_cuenta]</td>
										</tr>

										<tr>
											<td>nombre completo</td>
											<td>$usuario[nombre_completo]</td>
										</tr>

										<tr>
											<td>referencia de vehiculo</td>
											<td>$usuario[referencia_vehiculo]</td>
										</tr>
								</table>	
							</div>
							";



					}
					}

		 ?>
		 </div>



	<?php 
		if ($_POST) {


				$id = $_POST["id"];
				
				$usuarios = mysqli_query($conx, "SELECT * FROM compras WHERE id = '$id'");

				while ($row=mysqli_fetch_array($usuarios)){ 
					echo $row["numero_cuenta"]." ".$row["nombre_completo"]." ".$row["referencia_vehiculo"];
				}
			}
			?>
					

		<?php require "../public/footer.php" ?>	 


