<?php require "../public/header.php" ?>
<?php require "../connection.php";
	require "../public/seguridad1.php";


 ?>
 	<div class="text-center">
		<h1>Consultas</h1>
		<a href="index.php">Regresar</a>
		<hr>
		<?php 
			$id = $_GET['id'];
			$usuarios = mysqli_query($conx, "SELECT * FROM carros where id = '$id' ");
					while ($usuario = mysqli_fetch_array($usuarios)){
						echo "
							<div class='container'>
								<table border='1' class='table-condensed'>
										<tr>
											<td>Referencia</td>
											<td>$usuario[referencia]</td>
										</tr>
										<tr>
											<td>Marca</td>
											<td>$usuario[marca]</td>
										</tr>
										<tr>
											<td>Modelo</td>
											<td>$usuario[modelo]</td>
										</tr>
										<tr>
											<td>Color</td>
											<td>$usuario[color]</td>
										</tr>
										
								</table>	
							</div>
						 ";
					}
		 ?>
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