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
										<?php if ($id == 1): ?> 
										<tr>
											<td>foto</td>
											<td> 	
												<img src='../imgs/audi-r8.jpg'>

											</td>
										</tr>
										<?php endif; ?>
										
										<?php if ($id == 2): ?> 
										<tr>
											<td>foto</td>
											<td> 	
												<img src='../imgs/bmw_2.jpg'>

											</td>
										</tr>
										<?php endif; ?>
										<?php if ($id == 3): ?> 
										<tr>
											<td>foto</td>
											<td> 	
												<img src='../imgs/Mazda-allegro-9.jpg'>

											</td>
										</tr>
										<?php endif; ?>
									<?php endwhile; ?>

								</table>
									<a href="../catalogo/venta_carros.php"><button type="button" class="btn btn-default" aria-label="Left Align"></a>
  									<span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
									</button>

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