<?php 
echo '<header id="header">';
		
		echo'	<div id="logo"> ';
		echo'		<img src="imagenes/logo.jpg" width="50" height="50"></img>';
		echo'	</div>';


		echo'	<div id="titulo">';

		echo'		<h1> <a href=?secc=Portada>El infodiario</a></h1>';

		echo'	</div>';
		
			
		echo'	<div id="menu">';
		echo'		<ul>';
					include 'controlador/menu.php';
		echo'		</ul>';
		echo'	</div>';
echo'</header>';