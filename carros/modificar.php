<?php require "../connection.php"; ?>
<?php 	
		require "../public/header.php";
		
	require "../public/seguridad1.php";
		
		if($_GET){
			$id = $_GET['id'];
			$usuarios = mysqli_query($conx, "SELECT * FROM carros WHERE id = $id ");
			$info     = mysqli_fetch_array($usuarios);
		}
?>
 <body background="../imgs/fondo1.jpg" style="background-size: cover; ">

	<div class="text-center">
		<div class="text-center">
		<h1>Modificar vehiculo</h1>
		<a href="index.php">Regresar</a>
		<hr>
		<form method="post" class="form-group">
			<div class="container">
				<label>Referencia</label>
				<input type="text" name="referencia" placeholder="Referencia" value="<?php echo $info['referencia'] ?>" .input-group-addon>
			</div>
			<div class="container">
				<label>Marca</label>
				<input type="text" name="marca" placeholder="Marca" value="<?php echo $info['marca'] ?>" .input-group-addon>
			</div>
			<div class="container">
				<label>Modelo</label>
				<input type="numer" name="modelo" placeholder="Modelo" value="<?php echo $info['modelo'] ?>">
			</div>
			<div class="container">
				<label>color</label>
				<input type="text" name="color" placeholder="color" value="<?php echo $info['color'] ?>">
			</div>
			<div class="container">
				<label>precio</label>
				<input type="text" name="precio" placeholder="precio" value="<?php echo $info['precio'] ?>">
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
					$precio = $_POST['precio'];


					if ($referencia !="" && $marca !="" && $modelo !="" && $color !="" && $precio !="") {
							
						


							$sql = "UPDATE carros 
							  SET  referencia = '$referencia', 
							       marca      =  '$marca', 
							       modelo       = '$modelo', 
							       color      = '$color',
							       precio  = '$precio'
					       	  WHERE id = $id";



					       	$modificar = mysqli_query($conx, $sql);  
							if ($modificar) {
								echo "
									<script>
										alert('Carro modificado registrado con exito...');
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
						}}
							
					
			

				
	 ?>

<?php  require "../public/footer.php";	?>




