<?php 	
		require "../public/header.php";
		require "../connection.php";
	require "../public/seguridad1.php";
		
		if($_GET){
			$id = $_GET['id'];
			$usuarios = mysqli_query($conx, "SELECT * FROM usuarios WHERE id = $id ");
			$info     = mysqli_fetch_array($usuarios);
		}
?>
 <body background="imgs/fondo1.jpg" style="background-size: cover; ">

	<div class="text-center">
		<h1>Adicionar usuarios</h1>
		<a href="index.php">Regresar</a>
		<hr>
		<form method="post">
			<div class="container">
				<label>Tipo Documento</label>
				<select name="tipo_documento">
					<option value="">--Seleccione--</option>
					<option <?php if ($info['tipo_documento'] == "T.I") { echo "selected"; } ?> value="T.I">Tarjeta de Identidad</option>
					<option <?php if ($info['tipo_documento'] == "C.C") { echo "selected"; } ?> value="C.C">Cedula de Ciudadania</option>
				</select>	
			</div>
			<div class="container">
				<label>Documento</label>
				<input type="number" name="documento" placeholder="Documento" value="<?php echo $info['documento'] ?>">
			</div>
			<div class="container">
				<label>Nombres</label>
				<input type="text" name="nombres" placeholder="Nombres" value="<?php echo $info['nombres'] ?>">
			</div>
			<div class="container">
				<label>Apellidos</label>
				<input type="text" name="apellidos" placeholder="Apellidos" value="<?php echo $info['apellidos'] ?>">
			</div>
			<div class="container">
				<label>Genero</label>
				<input <?php if ($info['genero'] == "M") { echo "checked"; } ?> type="radio" name="genero" value="M">Masculino
				<input <?php if ($info['genero'] == "F") { echo "checked"; } ?> type="radio" name="genero" value="F">Femenino
			</div>
			<div class="container">
				<label>Correo Electronico</label>
				<input type="email" name="correo" placeholder="Correo" value="<?php echo $info['correo'] ?>">
			</div>
			<div class="container">
				<label>Celular</label>
				<input type="numer" name="celular" placeholder="Celular" value="<?php echo $info['celular'] ?>">
			</div>
			<div class="container">
				<input type="submit">
			</div>
		</form>
	</div>

	<?php 
		if ($_POST) {
			if(isset($_POST['genero'])){	
					$tipo_documento = $_POST['tipo_documento'];
					$documento = $_POST['documento'];
					$nombres = $_POST['nombres'];
					$apellidos = $_POST['apellidos'];
					$genero = $_POST['genero'];
					$correo = $_POST['correo'];
					$celular = $_POST['celular'];


					if ($tipo_documento !="" && $documento !="" && $nombres !="" && $apellidos !="" && $correo !="" && $celular !="" ) {
							
						


							$sql = "UPDATE usuarios 
							  SET  tipo_documento = '$tipo_documento', 
							       documento      =  $documento, 
							       nombres        = '$nombres', 
							       apellidos      = '$apellidos', 
							       genero         = '$genero', 
							       correo         = '$correo', 
							       celular        =  $celular 
					       	  WHERE id = $id";



					       	$modificar = mysqli_query($conx, $sql);  
							if ($modificar) {
								echo "
									<script>
										alert('Usuario modificado con exito...');
										window.location.replace('index.php');
									</script> 
								 ";
							}
						}
						else{
							echo "
							<script>
								alert('Llene todos los campos...');
							</script>
								";
						}	
					}
			else{
					echo "
						<script>
							alert('Llene todos los campos...');
						</script>
					";
					}

				}
	 ?>

<?php  require "../public/footer.php";	?>