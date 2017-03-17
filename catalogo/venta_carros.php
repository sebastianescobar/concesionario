<?php 
	require "../public/header.php";


	

	if (!isset($_SESSION['nombre'])) {
		echo "
			<script>
				alert('Debe loguearse para poder ingresar...');
				window.location.replace('index.php')
			</script> 

		 ";
	}

 
 ?>
	<div class="text-center">
		
		<ul>
			<li><?php echo $_SESSION['nombre']; ?></li>
			<li><a href="cerrar_sesion.php">Cerrar Sesión</a></li>
		</ul>

		<h1>Dashboard</h1>
		
	</div>
		<ul class="nav nav-pills nav-stacked col-md-2">
	  		<li role="presentation" class="active "><a href="#">Home</a></li>
	  		<li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Usuarios<span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="usuarios/index.php">Consultar</a></li>
	            <li role="separator" class="divider"></li>
	            <li><a href="usuarios/adicionar.php">Añadir</a></li>

	          </ul>
	        </li>
	 		<li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Marcas<span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="carros/index.php">Consultar</a></li>
	            <li role="separator" class="divider"></li>
	            <li><a href="carros/adicionar.php">Adicionar</a></li>

	          </ul>
	        </li>
		</ul>
		<div class="col-md-8">
			<article class="carro1">
				
			</article>
			<article class="carro2">
				<tr>
					<td> 	
						<img src='../imgs/bmw_2.jpg'>
					</td>
				</tr>
			</article>
			<article class="carro3">
				
			</article>
		</div>





	
	

<?php require "../public/footer.php"; ?>
