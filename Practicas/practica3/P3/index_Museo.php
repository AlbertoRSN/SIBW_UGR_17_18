<html lang="es">

	<?php
	include "conexionDB/connection.php";
		include('head.php');
		
		include('Controlador/controlador_contenido.php');
	?>
	
	<body>
		<?php
			
		
		
			//aqui va el $_GeT a la base de datos
			if (isset($_GET['obra1']))
            	$id = $_GET['obra1'];
			else if (isset($_GET['pginfo1']))
           	 $id = $_GET['pginfo1'];
			else if(isset($_GET['coleccion1']))
				$id = $_GET['coleccion1'];
			

		?>

		<div id="cuerpo_principal">

			<?php
				include('sidebar.php');
				include('Controlador/controlador_contenido.php');
			?>

		</div>
	</body>

	<?php
	include('footer.php');
	?>

</html>