<html lang="es">

	<?php
		include "conexionDB/connection.php";
		include('head.php');

		//include('Controlador/controlador_paginfo.php');
	?>
	
	<body>
		<?php
	

			$ob="nada";
			$pg="Inicio'";
			$colec="0";

			//aqui va el $_GeT a la base de datos, los $id son variables globales por lo que los ficheros include los conocen
			if (isset($_GET['obra']))
            	$ob = $_GET['obra'];
			else if (isset($_GET['pag_inf']))
           	 $pg = $_GET['pag_inf'];
			else if(isset($_GET['coleccion']))
				$colec = $_GET['coleccion'];


			if (isset($_POST['obra']))
            	$ob = $_POST['obra'];
			else if (isset($_POST['pag_inf']))
           	 $pg = $_POST['pag_inf'];
			else if(isset($_POST['coleccion']))
				$colec = $_POST['coleccion'];

			include('Controlador/controlador_paginfo.php');
		?>

		<div id="cuerpo_principal">
			<?php
				include('sidebar.php');
				include('Controlador/controlador_contenido.php');
			?>
		</div>
		
		<?php
		include('footer.php');
		?>
	</body>
</html>