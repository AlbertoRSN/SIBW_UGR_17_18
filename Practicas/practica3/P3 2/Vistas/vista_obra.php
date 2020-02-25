<?php

    class VistaObra{
    	
    	//Para que se vea cada obra en la pagina principal
        static function muestraObra($obra){	
            $html = "<article class='imagen-contenido'>"; //IMPORTANTELAS COMILLAS!!
				$html .="<a class='texto' href=?obra=".$obra->getIndice()."><img class='im' src='".$obra->getImagen()."'/>'".$obra->getTitulo()."'</a>";
            $html .= "</article>";
            return $html;
        }

        static function muestraTituloObra($obra){	
			$html ="<h1>".$obra->getTitulo()."</h1>";
			return $html;
		}

		static function muestraAutorObra($obra){	
			$html ="<h3>".$obra->getAutor()."</h3>";		
				return $html;
		}

		static function muestraAnioObra($obra){	
			$html ="<p>".$obra->getAnio()."</p>";	
			return $html;
		}

		static function muestraFotosObra($obra){	
			$html ="<img id='imagen_obra1' src='".$obra->getImagen()."' >".$obra->getTitulo()."</img>";//Por ahora dejamos aqui el nombre de la foto
			return $html;
		}

        //Para que se vea la obra seleccionada
		static function muestraTextoObra($obra){
		
			$html = "<p>".$obra->getTexto()."</p>";	
			$html .= "<p>".$obra->getFechaPublic()."</p>";
			$html .= "<p>".$obra->getFechaModif()."</p>";

				
			return $html;
		}


		static function muestraSocialObra($obra){
			//$html = "<div id='social'>";
				//$html = "<button class='boton' onclick='Redirigir_FB()'>";
				//$html .= "<img id='fc' src='./imagenes/fc.png'>";
				//$html .= "</button>";
				//$html .= "<button class='boton' onclick='Redirigir_TW()'>";
				//$html .= "<img id='tw' src='./imagenes/tw.png'></img>";
				//$html .= "</button>";
				$html = "<a id='impresora' href='imprimir.html'><input type='button' value='Imprimir' name='submit' /></a>"; //??<img id=tw src="imgs/impresora.png">
			//$html .= "</div>";
	
			return $html;	
		}

		static function muestraColumnaDerechaObra($obra){
			//$html = "<aside id='columna-derecha'>";		

			$html = "<button type='button' onclick='Comentarios()'>Comentarios</button>";   
			$html .= "<div id='formularios'>";

			$html .=	"<div id='comentarios'>";
					
			$html .=		"<div class='comentario'>";
			$html .=			"<div class='nombre_comentario'>";
			$html .=				"<p>Jose</p>";
			$html .=			"</div>";
							
			$html .=			"<div class='fecha_comentario'>";
			$html .=				"<p>5/1/2018</p>";
			$html .=			"</div>";

			$html .=			"<div class='hora_comentario'>";
			$html .=				"<p>22:14</p>";
			$html .=			"</div>";
							
			$html .=			"<div class='texto_comentario'>";
			$html .=				"<p>Es interesante, siempre creí que este coche era egipcio.</p>";
			$html .=			"</div>";
						
			$html .=	"</div>";
					
			$html .=	"<div class='comentario'>";
			$html .=			"<div class='nombre_comentario'>";
			$html .=				"<p>Cecilia</p>";
			$html .=			"</div>";
						
			$html .=			"<div class='fecha_comentario'>";
			$html .=				"<p>3/4/2018 </p>";
			$html .=			"</div>";

			$html .=			"<div class='hora_comentario'>";
			$html .=				"<p> 18:11</p>";
			$html .=			"</div>";
							
			$html .=			"<div class='texto_comentario'>";
			$html .=				"<p>Me fascina este coche.</p>";
			$html .=			"</div>";
			$html .=		"</div>";

			$html .=	"</div>";

				
			$html .=	"<div id='OpcionesFormulario'>";
			$html .=		"<form id='formulario' name='formulario' action='#' onsubmit='return validateForm()' method='post'>";
			$html .=			"<p>Nombre: <input class='text-box' type='text' name='fname'> </p>";
			$html .=			"<p>E-mail: <input type='text' name='fcorreo'> </p>";
			$html .=			"<p>Texto del comentario: <input type='text' name='fcomentario' onkeypress='PalabrasProhibidas(this)> </p>";
			$html .=		 "</form>";
			$html .=		"<button id='Enviar' onclick='Comentar()'>Enviar</button>";
			$html .=	"</div> ";
			$html .="</div>";
			//$html .="</aside>";
			return $html;		
		}

}
?>