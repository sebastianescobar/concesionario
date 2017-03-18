<?php 
require"../public/header.php" ;
require"../public/seguridad1.php";
require"../connection.php";
?>
<body background="../imgs/fondo1.jpg" style="background-size: cover; ">
<div class="text-center">
	<h1>comprar</h1>
	<a href="index.php">regresar</a>
	<hr>
	<form method="get" class="form-group">
		<div class="container">
			<label>numero de cuenta</label>
			<input type="text" name="numero_cuenta" placeholder="numero de cuenta" .input-group-addon>
		</div>
		<div class="container">
				<label>Nombre completo</label>
				<input type="text" name="nombre_completo" placeholder="Nombre completo">
	    </div>
	    <div class="container">
	    	<label>referencia de vehiculo</label>
	    	<input type="text" name="referencia_vehiculo" placeholder="referencia de vehiculo">
	    </div>
	    <div class="container">
				<input type="submit" value="comprar">
			</div>
		</form>
	</form>
</div>

<?php 
	if ($_GET) {
		$numero_cuenta 			= $_POST["numero_cuenta"];
		$nombre_completo		= $_POST["nombre_completo"];	
		$referencia_vehiculo	= $_POST["referencia_vehiculo"];	
		
		if($numero_cuenta!="" && $nombre_completo!=""&& $referencia_vehiculo!=""){

			$comprar = mysqli_query($conx,"INSERT INTO compras VALUES('','$numero_cuenta','$nombre_completo','$referencia_vehiculo')");
			if ($comprar) {
				echo "<script>
						alert('compra realizada con exito...');
						window.location.replace('index.php');
					  </script> 
					";
			}else{
							echo "
							<script>
								alert('Llene todos los campos...');
							</script>
								";
     			}	
		   }else{
		   			echo "
						<script>
							alert('Llene todos los campos...');
						</script>";
		   }
		}


 ?>