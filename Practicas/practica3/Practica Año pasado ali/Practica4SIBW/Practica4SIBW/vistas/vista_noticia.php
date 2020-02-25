<?php
    class VistaNoticia{
    	
        static function muestraNoticia($noticia){
            $html = "<div class='noticia'>";
				$html .= "<img src='".$noticia->getImagen()."' width='300' height='150'></img>";
				$html .= "<h2 id='titulo_noticia'><a href=?secc=".$noticia->getIndice()."&noti=si> '".$noticia->getTitulo1()."'</a></h2>";
				$html .= "<a href=?secc=".$noticia->getSeccion().">'".$noticia->getSeccion()."'</a>";
            $html .= "</div>";
            
            return $html;
        }

		static function muestraNoticiaEspecifica($noticia){
	
				$html = "<div id='titulo_noticia'>";
				$html .= "<h1>".$noticia->getTitulo1()."</h1>";
				$html .= "</div>";
				$html .= "<div id='Intro'>";
				$html .= "<h2>".$noticia->getTitulo2()."</h2>";
				$html .= "</div>";
				$html .= "<div id='Parte2'>";
				$html .= $noticia->getentradilla();
				$html .= "</div>";
				$html .= "<div id='social'>";
				$html .= "<button onclick='Redirigir_FB()'>";
				$html .= "<img src='imagenes/fb.png' width='25' height='25'></img>";
				$html .= "</button>";
				$html .= "<button onclick='Redirigir_TW()'>";
				$html .= "<img src='imagenes/tw.jpg' width='25' height='25'></img>";
				$html .= "</button>";
				$html .= "<a href='codigo/noticia_imprimir.html'><input type='button' value='Imprimir' name='submit' /></a>";
			    $html .= "</div>";
				$html .= "<div id='Parte0'>";
				$html .= "<img src='".$noticia->getImagen()."' width='700' height='400'></img>";
				$html .= "</div>";
				$html .= "<div id='Parte2'>";
				$html .= $noticia->getTexto();
				$html .= "</div>";
				
				
			
			
			return $html;
		}
		
		static function muestraNoticiaColumna($noticia){
            $html = "<div class='noticiacol'>";
				$html .= "<img src='".$noticia->getImagen()."' width='200' height='100'></img>";
				$html .= "<h2 id='titulo_noticia'><a href=?secc=".$noticia->getIndice()."&noti=si> '".$noticia->getTitulo1()."'</a></h2>";
				$html .= "<a href=?secc=".$noticia->getSeccion().">'".$noticia->getSeccion()."'</a>";
            $html .= "</div>";
            
            return $html;
        }
		
		static function muestraNoticiaPrincipal($noticia){
			$html = "<div id='noticia_principal'>";
			$html .= "<img src='".$noticia->getImagen()."' width='700' height='350'></img>";
			$html .= "<h2 id='titulo_noticia'><a href=?secc=".$noticia->getIndice()."&noti=si> '".$noticia->getTitulo1()."'</a></h2>";
			$html .= "<a href=?secc=".$noticia->getSeccion().">'".$noticia->getSeccion()."'</a>";
            $html .= "</div>";
            
            return $html;
		}

}
?>