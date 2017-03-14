<?php 	
		require "../public/header.php";
		require "../connection.php";
	require "../public/seguridad1.php";
		
?>
	
	<div class="text-center">
		<h1>Adicionar vehiculo</h1>
		<a href="index.php">Regresar</a>
		<hr>
		<form method="post" class="form-group">
			<div class="container">
				<label>Referencia</label>
				<input type="text" name="referencia" placeholder="Referencia" .input-group-addon>
			</div>
			<div class="container">
				<label>Marca</label>
				<input type="text" name="marca" placeholder="Marca" .input-group-addon>
			</div>
			<div class="container">
				<label>Modelo</label>
				<input type="numer" name="modelo" placeholder="Modelos">
			</div>
			<div class="container">
				<label>color</label>
				<input type="text" name="color" placeholder="color">
			</div>
			<div class="container">
				<input type="submit">
			</div>
		</form>
	</div>

	<?php 
		if ($_POST) {
					$referencia = $_POST['referencia'];
					$marca = $_POST['marca'];
					$modelo = $_POST['modelo'];
					$color = $_POST['color'];


					if ($referencia !="" && $modelo !="" && $color !="" && $marca !="" ) {
							
						


							$adicionar = mysqli_query($conx, "INSERT INTO carros VALUES('', '$referencia', '$marca', '$modelo', '$color')");
							if ($adicionar) {
								echo "
									<script>
										alert('Vehiculo registrado con exito...');
										window.location.replace('index.php');
									</script> 
								 ";
							}
						}else{
							echo "
							<script>
								alert('Llene todos los campos...');
							</script>
								";
						}
							
					}
			
	 ?>

<?php  require "../public/footer.php";	?>