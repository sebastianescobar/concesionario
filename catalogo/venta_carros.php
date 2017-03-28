<?php 
	require "../public/header.php";
	include '../connection.php';
	$sql = mysqli_query($conx, "SELECT * FROM carros");


	

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
 	li { list-style: none;	 }
 	article {
 		width: 350px;
 		height: 300px;
 		display: table-cell;
 	}
	img {
		height: 165px;
	}
	.content { padding-left: 22rem; }
	.container { width: 1128px; }

 </style>
 <body background="../imgs/fon.png" style="background-size: cover;     color: #fff;">
 
	<div class="text-center">
		
		<ul>
			<li><?php echo $_SESSION['nombre']; ?></li>
			<li><a href="../cerrar_sesion.php">Cerrar Sesión</a></li>
		</ul>

		<h1>Modelos</h1>
		
	</div>
		<ul class="nav nav-pills nav-stacked col-md-2">
	  		<li role="presentation" class="active "><a href="../Dashboard.php">Home</a></li>
	  		<li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Usuarios<span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="../usuarios/index.php">Consultar</a></li>
	            <li role="separator" class="divider"></li>
	            <li><a href="../usuarios/adicionar.php">Añadir</a></li>

	          </ul>
	        </li>
	 		<li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Vehiculos<span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="../carros/index.php">Consultar</a></li>
	            <li role="separator" class="divider"></li>
	            <li><a href="../carros/adicionar.php">Adicionar</a></li>
	            <li role="separator" class="divider"></li>
            	<li><a href="#">Catalogo</a></li>

	          </ul>
	        </li>
		</ul>
		<div class="content">
			<div class="container">
				<div class="row">
				<?php while($row = mysqli_fetch_array($sql)): ?>
				<article class="carro1 col-md-3">
					<img src="<?php echo $row['imagen']; ?>" alt="">
					<p class="text-center"> $<?php echo $row['precio'] ?></p>
					<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" >
						<input type="hidden" name="cmd" value="_cart">
						<input type="hidden" name="business" value="juancamilomojicamoreno@gmail.com">
						<input type="hidden" name="lc" value="AL">
						<input type="hidden" name="item_name" value="<?= $row['referencia'] ?>">
						<input type="hidden" name="amount" value="<?= $row['precio'] ?>">
						<input type="hidden" name="currency_code" value="USD">
						<input type="hidden" name="button_subtype" value="products">
						<input type="hidden" name="no_note" value="0">
						<input type="hidden" name="add" value="1">
						<input type="hidden" name="bn" value="PP-ShopCartBF:btn_cart_LG.gif:NonHostedGuest">
						<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
						</form>
				</article>
				<?php endwhile; ?>				
				<br><br>
				</div>			
			</div>
		</div>
		
		<section>
			<a href="../chat/simchat.html"><button type="button" class=" 0btn btn-danger" aria-label="Left Align" style="position: relative; left: 658px; padding: 10px;"> CONTACTA A NUESTRO SERVIDOR</button></a>
		</section>





	
	

<?php require "../public/footer.php"; ?>
