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
						<option <?php if ($info['tipo_documento'] == "T.I") { echo "selected"; } ?> value="T.I">Tarjeta de Identidad</option>
						<option <?php if ($info['tipo_documento'] == "C.C") { echo "selected"; } ?> value="C.C">Cedula de Ciudadania</option>
					</select>	
				</div>
				<div class="form-group">
					<label>Documento</label>
					<input type="number" name="documento" class="form-control" placeholder="Documento"  value="<?php echo $info['documento'] ?>" .input-group-addon>
				</div>
				<div class="form-group">
					<label>Nombres</label>
					<input type="text" name="nombres" placeholder="Nombres" class="form-control" value="<?php echo $info['nombres'] ?>">
				</div>
				<div class="form-group">
					<label>Apellidos</label>
					<input type="text" name="apellidos" placeholder="Apellidos" class="form-control" value="<?php echo $info['apellidos'] ?>">
				</div>
				<div class="form-group">
	                    
	                    <img id="avatar" src="<?php echo $info['image'] ?>" style="width: 209px; height: 209px;">
	                    <input type="file" id="upload" name="image" accept="image/*"></input>
	                </div> 
				<div class="form-group">
					<label>Genero</label>
					<input <?php if ($info['genero'] == "M") { echo "checked"; } ?> type="radio" name="genero" value="M" class="form-control">Masculino
					<input <?php if ($info['genero'] == "F") { echo "checked"; } ?> type="radio" name="genero" value="F" class="form-control">Femenino
				</div>
				<div class="form-group">
					<label>Correo Electronico</label>
					<input type="email" name="correo" placeholder="Correo" class="form-control" value="<?php echo $info['correo'] ?>">
				</div>
				<div class="form-group">
					<label>Celular</label>
					<input type="numer" name="celular" placeholder="Celular" class="form-control" value="<?php echo $info['celular'] ?>">
				</div>

				<div class="form-group">
					<input type="submit">
				</div>
			</form>
			</div>
		</div>
	</div>

	<?php 
		if ($_FILES) {
			if(isset($_POST['genero'])){
					$path = $_FILES['image']['name'];
                  	$extension = pathinfo($path, PATHINFO_EXTENSION);
                  	$nimage = time();	
					$tipo_documento = $_POST['tipo_documento'];
					$documento = $_POST['documento'];
					$nombres = $_POST['nombres'];
					$apellidos = $_POST['apellidos'];
                  	$image = '../public/imgs/avatars/'.$nimage.'.'.$extension;
					$genero = $_POST['genero'];
					$correo = $_POST['correo'];
					$celular = $_POST['celular'];


					if (!empty($_FILES['image']['tmp_name'])) {
							
						
							move_uploaded_file($_FILES['image']['tmp_name'], $image);
							
						


							$sql = "UPDATE usuarios 
							  SET  tipo_documento = '$tipo_documento', 
							       documento      =  $documento, 
							       nombres        = '$nombres', 
							       apellidos      = '$apellidos',
							       image          =	'$image', 
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