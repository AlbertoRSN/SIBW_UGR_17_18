<?php
    $conn = ConnectionDB();



    echo "<section>";

    switch($seccion){
			case 'Portada':
				include 'portada.php';
				break;
			
			case 'Deportes':
				include 'subseccion.php';
				include 'seccion.php';
				break;
				
			case 'Internacional':
				include 'subseccion.php';
				include 'seccion.php';
				break;
				
			case 'España':
				
				include 'subseccion.php';
				include 'seccion.php';
				break;
				
			case 'Tecnología':
				include 'subseccion.php';
				include 'seccion.php';
				break;
				
			case 'Economía':
				include 'subseccion.php';
				include 'seccion.php';
				break;
			
			case 'Ciencia':
				include 'subseccion.php';
				include 'seccion.php';
				break;
				
			case 'Cultura':
				include 'subseccion.php';
				include 'seccion.php';
				break;
				
			case 'Moda':
				include 'subseccion.php';
				include 'seccion.php';
				break;
				
			case 'Televisión':
				include 'subseccion.php';
				include 'seccion.php';
				break;
		
				
			default:
				include 'noticia_especifica.php';
				$noti = "si";
				break;
		}
	
    echo "</section>";
    
    //CerrarConexionDB();
