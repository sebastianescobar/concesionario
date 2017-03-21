<?php 
	require "public/header.php";


	

	if (!isset($_SESSION['nombre'])) {
		echo "
			<script>
				alert('Debe loguearse para poder ingresar...');
				window.location.replace('index.php')
			</script> 

		 ";
	}

 
 ?>
 <body background="imgs/fondo1.jpg" style="background-size: cover; ">
	<div class="text-center">
		
		<ul>
			<li><?php echo $_SESSION['nombre']; ?></li>
			<li><a href="cerrar_sesion.php">Cerrar Sesión</a></li>
		</ul>

		<h1>Dashboard</h1>
		
	</div>
	<ul class="nav nav-pills nav-stacked col-md-2">
  		<li role="presentation" class="active "><a href="#">Inicio</a></li>
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
        <li role="presentation"><a href="map.html">Encuentranos</a></li>
	</ul>


	







	
	

<?php require "public/footer.php"; ?>
