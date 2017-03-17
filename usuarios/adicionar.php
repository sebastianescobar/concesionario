<?php 	
		require "../public/header.php";
		require "../connection.php";
		
?>
 <body background="imgs/fondo1.jpg" style="background-size: cover; ">

	<div class="text-center">
		<h1>Adicionar usuarios</h1>
		<a href="index.php">Regresar</a>
		<hr>
		<form method="post" class="form-group">
			<div class="container">
				<label>Tipo Documento</label>
				<select name="tipo_documento">
					<option value="">--Seleccione--</option>
					<option value="T.I">Tarjeta de Identidad</option>
					<option value="C.C">Cedula de Ciudadania</option>
				</select>	
			</div>
			<div class="container">
				<label>Documento</label>
				<input type="number" name="documento" placeholder="Documento" .input-group-addon>
			</div>
			<div class="container">
				<label>Nombres</label>
				<input type="text" name="nombres" placeholder="Nombres">
			</div>
			<div class="container">
				<label>Apellidos</label>
				<input type="text" name="apellidos" placeholder="Apellidos">
			</div>
			<div class="container">
				<label>Genero</label>
				<input type="radio" name="genero" value="M">Masculino
				<input type="radio" name="genero" value="F">Femenino
			</div>
			<div class="container">
				<label>Correo Electronico</label>
				<input type="email" name="correo" placeholder="Correo">
			</div>
			<div class="container">
				<label>Contraseña</label>
				<input type="password" name="clave" placeholder="contraseña">
			</div>
			<div class="container">
				<label>Celular</label>
				<input type="numer" name="celular" placeholder="Celular">
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
					$clave = $_POST['clave'];
					$celular = $_POST['celular'];


					if ($tipo_documento !="" && $documento !="" && $nombres !="" && $apellidos 
					 !="" && $correo !="" && $clave !="" && $celular !="") {
							
						


							$adicionar = mysqli_query($conx, "INSERT INTO usuarios VALUES('', '$tipo_documento', $documento, '$nombres', '$apellidos', '$genero', '$correo', '$clave', $celular)");
							if ($adicionar) {
								echo "
									<script>
										alert('Usuario registrado con exito...');
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
				}
			
	 ?>

<?php  require "../public/footer.php";	?>