
	<script src="http://localhost/concesionario/js/jquery-3.1.1.min.js"></script>
	<script src="http://localhost/concesionario/js/bootstrap.min.js"></script> 
	<script>
		$(document).ready(function() {
			$(".eliminar-usuario").click(function() {
				$id = $(this).attr("data-id");
				$confirm = confirm("Estas seguro mamaguevo"); 

				if ($confirm){
					window.location.replace("eliminar.php?id="+$id);
				}
			});
		});
	</script>
</body>
</html>