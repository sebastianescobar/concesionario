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
 <style>
 	article {
 		width: 350px;
 		height: 300px;
 		display: table-cell;
 	}
	img {
		width: 350px;
		height: 300px;
		margin-right: 10px;
	}


 </style>
 <body background="../imgs/fondo-white.jpg" style="background-size: cover; ">
 
	<div class="text-center">
		
		<ul>
			<li><?php echo $_SESSION['nombre']; ?></li>
			<li><a href="../cerrar_sesion.php">Cerrar Sesión</a></li>
		</ul>

		<h1>Modeloss</h1>
		
	</div>
		<ul class="nav nav-pills nav-stacked col-md-2">
	  		<li role="presentation" class="active "><a href="#">Home</a></li>
	  		<li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Usuarios<span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="../usuarios/index.php">Consultar</a></li>
	            <li role="separator" class="divider"></li>
	            <li><a href="../usuarios/adicionar.php">Añadir</a></li>

	          </ul>
	        </li>
	 		<li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Marcas<span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="../carros/index.php">Consultar</a></li>
	            <li role="separator" class="divider"></li>
	            <li><a href="../carros/adicionar.php">Adicionar</a></li>

	          </ul>
	        </li>
		</ul>
		<div class="container">
			<div class="col-md-2">
			<article class="carro1">
				<img src="../imgs/eleanor.jpg" alt="">
				<p class="text-center"> $60.000 euros</p>
				<a href="../compras/comprar.php"><button type="button" class=" 0btn btn-success" aria-label="Left Align" style="position: relative; left: 135px;"> COMPRAR </button></a>
			</article>
			<article class="carro2">
				<tr>
					<td> 	
						<img src="../imgs/gt.jpg">
						<p class="text-center" style="text-transform: uppercase; color: "> $70.000 euros</p>
						<a href="../compras/comprar.php"><button type="button" class=" 0btn btn-success" aria-label="Left Align" style="position: relative; left: 135px;"> COMPRAR </button></a>
					</td>
				</tr>
			</article>
			<article class="carro3">
				<img src="../imgs/shelby.jpg">
				<p class="text-center"> $54.000 euros </p>
				<a href="../compras/comprar.php"><button type="button" class=" 0btn btn-success" aria-label="Left Align" style="position: relative; left: 135px;"> COMPRAR </button></a>
			</article>
			</div>
		</div>





	
	

<?php require "../public/footer.php"; ?>
