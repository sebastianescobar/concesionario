<?php require "../connection.php"; ?>
<?php 
			$id = $_GET['id'];
			$usuarios = mysqli_query($conx, "SELECT * FROM carros where id = '$id' "); ?>
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
								<?php  while ($usuario = mysqli_fetch_array($usuarios)): ?>
										<tr>
											<td>Referencia</td>
											<td><?php echo $usuario['referencia'] ?></td>
										</tr>
										<tr>
											<td>Marca</td>
											<td><?php echo $usuario['marca'] ?></td>
										</tr>
										<tr>
											<td>Modelo</td>
											<td><?php echo $usuario['modelo'] ?></td>
										</tr>
										<tr>
											<td>Color</td>
											<td><?php echo $usuario['color'] ?></td>
										</tr>
										<tr>
											<td>Precio</td>
											<td><?php echo $usuario['precio'] ?></td>
										</tr>
										<?php if ($id == 2): ?> 
										<tr>
											<td>foto</td>
											<td> 	
												<img src="../imgs/shelby.jpg">
											</td>
										</tr>
										<?php endif; ?>
										
										<?php if ($id == 4): ?> 
										<tr>
											<td>foto</td>
											<td> 	
												<img src="../imgs/eleanor.jpg">
											</td>
										</tr>
										<?php endif; ?>
										<?php if ($id == 6): ?> 
										<tr>
											<td>foto</td>
											<td> 	
												<img src="../imgs/gt.jpg">
											</td>
										</tr>
										<?php endif; ?>
									<?php endwhile; ?>

								</table>
									<a href="../catalogo/venta_carros.php"><button type="button" class=" 0btn btn-default" aria-label="Left Align"> <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
									</button></a>

							</div>
					</div>



	<?php 
		if ($_POST) {


				$id = $_POST["id"];
				
				$usuarios = mysqli_query($conx, "SELECT * FROM carros WHERE id = '$id'");

				while ($row=mysqli_fetch_array($usuarios)){ 
					echo $row["referencia"]." ".$row["modelo"]." ".$row["color"];
				} 
			}

	 ?>


<?php require "../public/footer.php" ?>