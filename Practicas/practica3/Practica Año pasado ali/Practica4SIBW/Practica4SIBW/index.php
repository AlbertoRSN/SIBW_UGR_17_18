<!DOCTYPE html>


<html>

<link rel="stylesheet" type="text/css" href="estilo/index.css" />
	<head>

		<meta charset="utf-8"></meta>
		<title>El infodiario</title>
		<script src="javascript/noticia.js"></script>

	</head>


	<body>
	<?php
		
		include ("conexionDB/connection.php");
		$seccion = 'Portada';
		$noti = 'no';
		$noticia = '1';
		
		//aqui va el $_GeT a la base de datos
		if (isset($_GET['secc']))
            $seccion = $_GET['secc'];
		else if (isset($_GET['noticia']))
            $noticia = $_GET['noticia'];
		
		if (isset($_POST['secc']))
            $seccion = $_POST['secc'];
		else if (isset($_POST['noticia']))
            $noticia = $_POST['noticia'];
		
		if(isset($_GET['noti']))
			$noti = $_GET['noti'];
		else if (isset($_POST['noti']))
			$noti = $_POST['noti'];
		
		include 'header.php';
		include 'controlador/banner.php';
		include 'controlador/contenido.php';
			
		include 'footer.php';
	?>
				
			
  	</body>

</html>
