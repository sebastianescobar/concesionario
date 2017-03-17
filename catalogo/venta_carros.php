<?php 
	require "../public/header.php"; 
	require "../connection.php";

		if (isset($_SESSION['nombre'])) {
		echo "
			<script>
				alert('Usted ya esta logueado...');
				window.location.replace('Dashboard.php');
			</script> 

		 ";
	}
?>
	<div class="container">
		
		<h1 class="text-center"> </h1>
		<a href="usuarios/adicionar.php">Registrarse</a>
		<hr>
		<form method="post" >
			<div class="input-group">
				<span class="input-group-addon" id="basic-addon1">E-mail</span>
				<input type="email" class="form-control" name="correo" placeholder="Correo Electronico"  value="<?php if (isset($_POST['correo'])) {echo $_POST['correo'];} ; ?>">
			</div>
			<div class="input-group" >
				<span class="input-group-addon" id="basic-addon1">Password</span>
				<input type="password" class="form-control" name="clave" placeholder="contraseña">
			</div>
			<div class="btn-group" role="group" >
				<input type="submit" class="btn btn-default" value="Ingresar">
			</div>
		</form>
	</div>

	<?php 
		if ($_POST) {
			 $correo = mysqli_real_escape_string($conx, $_POST['correo']);
			 $clave = mysqli_real_escape_string($conx, $_POST['clave']);


			 if ($correo!="" && $clave!="") {
			  $query = mysqli_query($conx, "SELECT nombres, apellidos  FROM usuarios WHERE correo = '$correo' AND clave = '$clave'");

				 if (mysqli_num_rows($query) > 0 ) {
				 	
				 	$row = mysqli_fetch_array($query);
				 	// Variable tipo session
				 	$_SESSION['nombre'] = $row['nombres']." ".$row['apellidos'];
				 	header("Location: Dashboard.php");	

				 } else  {
				 	echo "
						<script>
							alert('Correo o clave incorrecta...');
						</script> 

				 	";
				 }	
		 }else  {
			 	echo "
					<script>
						alert('Hay campos vacios...');
					</script> 

			 	";
			 }


			
		}


	 ?>

	
<?php require "../public/footer.php" ?>