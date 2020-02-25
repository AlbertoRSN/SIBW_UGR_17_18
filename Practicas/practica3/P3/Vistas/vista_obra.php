<?php
    class VistaObra{
    	
    	//Para que se vea cada obra en la pagina principal
        static function muestraObra($obra){	
            $html = "<article class='imagen-contenido'>"; //IMPORTANTELAS COMILLAS!!
				$html .="<a class='texto' href=?coleccion=".$obra->getTitulo()."><img class='im' src='".$obra->getImagen()."'/>'".$obra->getTitulo()."'</a>";
            $html .= "</article>";
            return $html;
        }

        //Para que se vea la obra seleccionada
		static function muestraObraEspecifica($obra){
	
			//$html ="<section id='contenido-principal-obra'>";

				$html ="<div id='Titulo'>";
					$html ="<h1>".$obra->getTitulo()."</h1>";
					$html ="<h2>".$obra->getAutor()."</h2>";
					$html ="<h3>".$obra->getAnio()."</h3>";
				$html .= "</div>";

				$html ="<div id='Fotos_obra'>";
					$html ="<img id='imagen_obra1' src='".$obra->getImagen()."' >Fiat clásico</img>";	//Por ahora dejamos aqui el nombre de la foto
					//$html ="<img id='imagen_obra1' src='".$obra->getImagen()."' >Fiat 500</img>";	//Para meter la otra foto
				$html .= "</div>";

				$html ="<section class='Parte1'>";
					$html ="<p>".$obra->getTexto()."</p>";	
				$html .= "</section>";


				$html .= "<div id='social'>";
					$html .= "<button onclick='Redirigir_FB()'>";
					$html .= "<img id='fc' src='../imagenes/fc.png'></img>";
					$html .= "</button>";
					$html .= "<button onclick='Redirigir_TW()'>";
					$html .= "<img id='tw' src='../imagenes/tw.jpg'></img>";
					$html .= "</button>";
					$html .= "<a id='impresora' href='imprimir.html'><input type='button' value='Imprimir' name='submit' /></a>"; //??<img id=tw src="imgs/impresora.png">
			    $html .= "</div>";

			    $html .= "<div class='Parte1'>";
					$html .= $obra->getFechaPublic();
				$html .= "</div>";
				$html .= "<div class='Parte1'>";
					$html .= $obra->getFechaModif();
				$html .= "</div>";
			//$html .= "</section>";		
			
			return $html;
		}

}
?>