<?php require "../public/header.php" ?>
<?php require "../connection.php";
	require "../public/seguridad1.php";


 ?>
 <body background="imgs/fondo1.jpg" style="background-size: cover; ">
 
 	<div class="text-center">
		<h1>Consultas</h1>
		<a href="index.php">Regresar</a>
		<hr>
		<?php 
			$id = $_GET['id'];
			$usuarios = mysqli_query($conx, "SELECT * FROM usuarios where id = '$id' ");
					while ($usuario = mysqli_fetch_array($usuarios)){
						echo "
							<div class='container'>
								<table border='1' class='table-condensed'>
										<tr>
											<td>Nombres</td>
											<td>$usuario[nombres]</td>
										</tr>
										<tr>
											<td>Apellidos</td>
											<td>$usuario[apellidos]</td>
										</tr>
										<tr>
											<td>Documento</td>
											<td>$usuario[tipo_documento] $usuario[documento]</td>
										</tr>
										<tr>
											<td>genero</td>
											<td>$usuario[genero]</td> 
										</tr>
										<tr>
											<td>Correo</td>
											<td>$usuario[correo]</td> 
										</tr>
										<tr>
											<td>Celular</td>
											<td>$usuario[celular]</td> 
										</tr>
								</table>	
							</div>
						 ";
					}
		 ?>
	</div>



	<?php 
		if ($_POST) {


				$id = $_POST["id"];
				
				$usuarios = mysqli_query($conx, "SELECT * FROM usuarios WHERE id = '$id'");

				while ($row=mysqli_fetch_array($usuarios)){ 
					echo $row["tipo_documento"]." ".$row["documento"]." ".$row["nombres"]." ".$row["apellidos"]." ".$row["genero"]." ".$row["correo"]." ".$row["celular"];
				} 
			}

	 ?>


<?php require "../public/footer.php" ?>