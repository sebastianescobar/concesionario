<?php 	
		require "../public/header.php";
		require "../connection.php";
	require "../public/seguridad1.php";
		
?>
 <body background="../imgs/fondo1.jpg" style="background-size: cover; ">

	
	<div class="text-center">
		<h1>Adicionar vehiculo</h1>
		<a href="index.php">Regresar</a>
		<hr>
		<form method="post" class="form-group" enctype="multipart/form-data">
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
				<input type="number" name="modelo" placeholder="Modelos">
			</div>
			<div class="container">
				<label>precio</label>
				<input type="number" name="precio" placeholder="Precio">
			</div>
			<div class="container">
				<label>color</label>
				<input type="text" name="color" placeholder="color">
			</div>
			<div class="container">
				<label>imagen</label>
				<input type="file" name="imagen">
			</div>
			<div class="container">
				<input type="submit">
			</div>
		</form>
	</div>

	<?php 
	if ($_FILES) {
		if ($_POST) {
					$path = $_FILES['imagen']['name'];
                  	$extension = pathinfo($path, PATHINFO_EXTENSION);
					$referencia = $_POST['referencia'];
					$marca = $_POST['marca'];
					$nimage = time();
					$modelo = $_POST['modelo'];
					$color = $_POST['color'];
					$precio = $_POST['precio'];
					$imagen = '../imgs/'.$nimage.'.'.$extension;



					if ($referencia !="" && $modelo !="" && $color !="" && $marca !="" &&  $precio !="") {
							
						


							

							if (!empty($_FILES['imagen']['tmp_name'])) {
							
						
							move_uploaded_file($_FILES['imagen']['tmp_name'], $imagen);

							$adicionar = mysqli_query($conx, "INSERT INTO carros VALUES('', '$referencia', '$marca', '$modelo', '$color', '$precio', '$imagen')");
							if ($adicionar) {
								echo "
									<script>
										alert('vehiculo registrado con exito...');
										window.location.replace('index.php');								
									</script> 
								 ";
							}
						}
							
							} else{
							echo "
							<script>
								alert('Llene todos los campos...');
							</script>
								";
						}
					}
	}
		
			
	 ?>

<?php  require "../public/footer.php";	?>