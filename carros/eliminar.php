<?php require "../connection.php" ;


?>
	
	


	<?php 

		$id = $_GET['id']; 
		$del = mysqli_query ($conx, "DELETE FROM carros WHERE id = $id");



		echo " 
		<script>
			alert('Registro eliminado con exito...')
			window.location.replace('index.php');
		</script>  
		"
	?> 
	

