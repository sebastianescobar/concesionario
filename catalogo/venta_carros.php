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
 <body background="../imgs/fon.png" style="background-size: cover;     color: #fff;">
 
	<div class="text-center">
		
		<ul>
			<li><?php echo $_SESSION['nombre']; ?></li>
			<li><a href="../cerrar_sesion.php">Cerrar Sesión</a></li>
		</ul>

		<h1>Modeloss</h1>
		
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
		<div class="container">
			<div class="col-md-2">
			<article class="carro1">
				<img src="../imgs/eleanor.jpg" alt="">
				<p class="text-center"> $60.000 euros</p>
				<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" >
						<input type="hidden" name="cmd" value="_cart">
						<input type="hidden" name="business" value="juancamilomojicamoreno@gmail.com">
						<input type="hidden" name="lc" value="AL">
						<input type="hidden" name="item_name" value="<?= $carros['referencia'] ?>">
						<input type="hidden" name="amount" value="<?= $carros['precio'] ?>">
						<input type="hidden" name="currency_code" value="USD">
						<input type="hidden" name="button_subtype" value="products">
						<input type="hidden" name="no_note" value="0">
						<input type="hidden" name="add" value="1">
						<input type="hidden" name="bn" value="PP-ShopCartBF:btn_cart_LG.gif:NonHostedGuest">
						<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
						<img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
						</form>
			</article>
			<article class="carro2">
				<tr>
					<td> 	
						<img src="../imgs/gt.jpg">
						<p class="text-center" style="text-transform: uppercase; color: "> $70.000 euros</p>

						<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" >
						<input type="hidden" name="cmd" value="_cart">
						<input type="hidden" name="business" value="juancamilomojicamoreno@gmail.com">
						<input type="hidden" name="lc" value="AL">
						<input type="hidden" name="item_name" value="<?= $carros['referencia'] ?>">
						<input type="hidden" name="amount" value="<?= $carros['precio'] ?>">
						<input type="hidden" name="currency_code" value="USD">
						<input type="hidden" name="button_subtype" value="products">
						<input type="hidden" name="no_note" value="0">
						<input type="hidden" name="add" value="1">
						<input type="hidden" name="bn" value="PP-ShopCartBF:btn_cart_LG.gif:NonHostedGuest">
						<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
						<img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
						</form>
					</td>
				</tr>
			</article>
			<article class="carro3">
				<img src="../imgs/shelby.jpg">
				<p class="text-center"> $54.000 euros </p>
				<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" >
						<input type="hidden" name="cmd" value="_cart">
						<input type="hidden" name="business" value="juancamilomojicamoreno@gmail.com">
						<input type="hidden" name="lc" value="AL">
						<input type="hidden" name="item_name" value="<?= $carros['referencia'] ?>">
						<input type="hidden" name="amount" value="<?= $carros['precio'] ?>">
						<input type="hidden" name="currency_code" value="USD">
						<input type="hidden" name="button_subtype" value="products">
						<input type="hidden" name="no_note" value="0">
						<input type="hidden" name="add" value="1">
						<input type="hidden" name="bn" value="PP-ShopCartBF:btn_cart_LG.gif:NonHostedGuest">
						<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
						<img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
						</form>
			</article>
			<br><br>
			</div>
		</div>
		<section>
			<a href="../chat/simchat.html"><button type="button" class=" 0btn btn-danger" aria-label="Left Align" style="position: relative; left: 658px; padding: 10px;"> CONTACTA A NUESTRO SERVIDOR</button></a>
		</section>





	
	

<?php require "../public/footer.php"; ?>
