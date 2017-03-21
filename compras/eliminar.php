<?php require "../connection.php" ;


?>
	
	


	<?php 

		$id = $_GET['id']; 
		$del = mysqli_query ($conx, "DELETE FROM compras WHERE id = $id");



		echo " 
		<script>
			alert('compra eliminada con exito...')
			window.location.replace('index.php');
		</script>  
		"
	?> 
