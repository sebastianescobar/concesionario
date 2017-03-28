<?php require "../connection.php"; ?>
<?php 
			$id = $_GET['id'];
			$sql = mysqli_query($conx, "SELECT * FROM carros where id = '$id' "); ?>
<?php require "../public/header.php"; ?>
<?php require "../public/seguridad1.php"; ?>

	<style>
		
		img {
			width: 300px;
		}
		table {
			background: -webkit-linear-gradient( left , #9294D4, white);
			border-radius: 2%;
		}
	</style>

 <body background="../imgs/fondo1.jpg" style="background-size: cover; ">

 	
 	<div class="text-center">
		<h1>Consultas</h1>
		<a href="index.php">Regresar</a>
		<hr>
		
					
							<div class='container'>


								<table border='1' class='table-condensed'>
								<?php  while ($row = mysqli_fetch_array($sql)): ?>
										<tr>
											<td>Referencia</td>
											<td><?php echo $row['referencia'] ?></td>
										</tr>
										<tr>
											<td>Marca</td>
											<td><?php echo $row['marca'] ?></td>
										</tr>
										<tr>
											<td>Modelo</td>
											<td><?php echo $row['modelo'] ?></td>
										</tr>
										<tr>
											<td>Color</td>
											<td><?php echo $row['color'] ?></td>
										</tr>
										<tr>
											<td>Precio</td>
											<td><?php echo $row['precio'] ?></td>
										</tr>
										<tr>
											<td>foto</td>
											<td> 	
												<img src="<?php echo $row['imagen'] ?>">
											</td>
										</tr>
										
									<?php endwhile; ?>

								</table>
									<a href="../catalogo/venta_carros.php"><button type="button" class=" 0btn btn-default" aria-label="Left Align"> <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
									</button></a>

							</div>
					</div>



	<?php 
		if ($_POST) {


				$id = $_POST["id"];
				
				$sql = mysqli_query($conx, "SELECT * FROM carros WHERE id = '$id'");

				while ($row=mysqli_fetch_array($sql)){ 
					echo $row["referencia"]." ".$row["modelo"]." ".$row["color"];
				} 
			}

	 ?>


<?php require "../public/footer.php" ?>