<?php require "../connection.php"; ?>
<?php 	
		require "../public/header.php";
		
	require "../public/seguridad1.php";
		
		if($_GET){
			$id = $_GET['id'];
			$usuarios = mysqli_query($conx, "SELECT * FROM compras WHERE id = $id ");
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
				<label>numero de cuenta</label>
				<input type="number" name="numero_cuenta" placeholder="numero de cuenta" value="<?php echo $info['numero_cuenta'] ?>" .input-group-addon>
			</div>
			<div class="container">
				<label>nombre completo</label>
				<input type="text" name="nombre_completo" placeholder="nombre completo" value="<?php echo $info['nombre_completo'] ?>" .input-group-addon>
			</div>
			<div class="container">
				<label>referencia del vehiculo</label>
				<input type="text" name="referencia_vehiculo" placeholder="referencia del vehiculo" value="<?php echo $info['referencia_vehiculo'] ?>">
			</div>
			<div class="container">
				<input type="submit">
			</div>
			
		</form>
	</div>

	<?php 
		if ($_POST) {
					$numero_cuenta = $_POST['numero_cuenta'];
					$nombre_completo = $_POST['nombre_completo'];
					$referencia_vehiculo = $_POST['referencia_vehiculo'];
					


					if ($numero_cuenta !="" && $nombre_completo !="" && $referencia_vehiculo !="" ) {
							
						


							$sql = "UPDATE compras
							  SET  numero_cuenta = '$numero_cuenta', 
							       nombre_completo      =  '$nombre_completo', 
							       referencia_vehiculo        = '$referencia_vehiculo'
					       	  WHERE id = $id";



					       	$modificar = mysqli_query($conx, $sql);  
							if ($modificar) {
								echo "
									<script>
										alert('compra registrada con exito...');
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




