<?php 	
		require "../public/header.php";
		require "../connection.php";
		
?>
<link rel="stylesheet" href="../css/custom.css">
 <body background="../imgs/fondo1.jpg" style="background-size: cover; ">

	<div class="container-fluid">
		<div class="row">
      		<div class="col-md-6 col-md-offset-3">
			<h1>Adicionar usuarios</h1>
			<a href="index.php">Regresar</a>
			<hr>
			<form method="post" class="form-group" enctype="multipart/form-data">
				<div class="form-group">
					<label>Tipo Documento</label>
					<select name="tipo_documento"  class="form-control">
						<option value="">--Seleccione--</option>
						<option value="T.I">Tarjeta de Identidad</option>
						<option value="C.C">Cedula de Ciudadania</option>
					</select>	
				</div>
				<div class="form-group">
					<label>Documento</label>
					<input type="number" name="documento" class="form-control" placeholder="Documento" .input-group-addon>
				</div>
				<div class="form-group">
					<label>Nombres</label>
					<input type="text" name="nombres" placeholder="Nombres" class="form-control">
				</div>
				<div class="form-group">
					<label>Apellidos</label>
					<input type="text" name="apellidos" placeholder="Apellidos" class="form-control">
				</div>
				<div class="form-group">
	                    
	                    <img id="avatar" src="../public/imgs/avatar.png">
	                    <input type="file" id="upload" name="image" accept="image/*"></input>
	                </div> 
				<div class="form-group">
					<label>Genero</label>
					<input type="radio" name="genero" value="M" class="form-control">Masculino
					<input type="radio" name="genero" value="F" class="form-control">Femenino
				</div>
				<div class="form-group">
					<label>Correo Electronico</label>
					<input type="email" name="correo" placeholder="Correo" class="form-control">
				</div>
				<div class="form-group">
					<label>Contraseña</label>
					<input type="password" name="clave" placeholder="contraseña" class="form-control">
				</div>
				<div class="form-group">
					<label>Celular</label>
					<input type="numer" name="celular" placeholder="Celular" class="form-control">
				</div>

				<div class="form-group">
					<input type="submit">
				</div>
			</form>
			</div>
		</div>
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