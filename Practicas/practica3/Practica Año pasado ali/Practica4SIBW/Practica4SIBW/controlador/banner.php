<?php 

include "modelo/noticia.php";
include "vistas/vista_noticias.php";
include "contenedores/contenedor_noticias.php";

	
$numbanners = 3; //numero de banners
$random = rand(1,$numbanners);
$enlace = array();
$imagen = array();
$enlace[1] = "#";
$imagen[1] = "imagenes/cocacolabanner.png";

$enlace[2] = "#";
$imagen[2] = "imagenes/etsiitbanner.png";

$enlace[3] = "#";
$imagen[3] = "imagenes/ugrbanner.png";

if($seccion == "Portada"){
echo '<div id="columnabanner">';
		
		echo'	<div id="banners">';					
		echo'	<div class="banner">';
		echo "<a href='".$enlace[$random]."' target='_blank'><img src='".$imagen[$random]."' width='1200' height = '200'></a>";
		/*echo'		<img src="imagenes/cocacolabanner.png" width="1200" height="200"></img>';*/
	

		echo'	</div>';
		echo'	</div>';
echo'</div>';
}
else if($noti == "si"){/* if ($noti = "si") Hay que meterlo en el else, significa que hemos dado click a una noticia.
	
	*/
	echo '<div id="columna">';
        echo '<button onclick = "Comentar()">';		
	echo '<img src="imagenes/comentarios.png" width="25" height="25"></img>';
	echo '</button>';

	$contenedor = new ContenedorNoticias();


	$noticias = $contenedor->getNoticiasBySeccionByIndice($seccion);
		VistaNoticias::muestra3Noticias($noticias, $seccion);
		
	echo "<a href='".$enlace[$random]."' target='_blank'><img src='".$imagen[$random]."' width='250' height = '150'></a>"; 
		
	echo '</div>';
}
