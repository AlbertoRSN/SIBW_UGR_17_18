<?php

    class VistaComentario{
        static function muestraComentario($comentario){
            $html = "<div class='comentario'>";
				$html .= "<div class='nombre_comentario'>";
				$html .= "<p>".$comentario->getNombre()."</p>";
				$html .= "</div>";
				$html .= "<div class='numero_comentario'>";
				$html .= "<p>".$comentario->getIp()."</p>";
				$html .= "</div>";
				$html .= "<div class='texto_comentario'>";
				$html .= "<p>".$comentario->getComentario()."</p>";
				$html .= "</div>";
				$html .= "<div class='fecha_comentario'>";
				$html .= "<p>".$comentario->getFecha()."</p>";
				$html .= "</div>";
				$html .= "<div class='correo_comentario'>";
				$html .= "<p>".$comentario->getCorreo()."</p>";
				$html .= "</div>";
            $html .= "</div>";

           
            
            return $html;
        }
		
		static function muestraTodosComentario($comentario){
			$html = "<div class='comentario'>";
				$html .= "<div class='nombre_comentario'>";
				$html .= "<p>".$comentario->getNombre()."</p>";
				$html .= "</div>";
				$html .= "<div class='numero_comentario'>";
				$html .= "<p>".$comentario->getIp()."</p>";
				$html .= "</div>";
				$html .= "<div class='texto_comentario'>";
				$html .= "<p>".$comentario->getComentario()."</p>";
				$html .= "</div>";
				$html .= "<div class='fecha_comentario'>";
				$html .= "<p>".$comentario->getFecha()."</p>";
				$html .= "</div>";
				$html .= "<div class='correo_comentario'>";
				$html .= "<p>".$comentario->getCorreo()."</p>";
				$html .= "</div>";
				$html .= "<div class='id_comentario'>";
				$html .= "<p>Noticia ".$comentario->getID()."</p>";
				$html .= "</div>";

				
            $html .= "</div>";
            
            return $html;
		}
		
		static function muestraTodosComentarioConID($comentario){
			$html = "<div class='comentario'>";
				$html .= "<div class='nombre_comentario'>";
				$html .= "<p>".$comentario->getNombre()."</p>";
				$html .= "</div>";
				$html .= "<div class='numero_comentario'>";
				$html .= "<p>".$comentario->getIp()."</p>";
				$html .= "</div>";
				$html .= "<div class='texto_comentario'>";
				$html .= "<p>".$comentario->getComentario()."</p>";
				$html .= "</div>";
				$html .= "<div class='fecha_comentario'>";
				$html .= "<p>".$comentario->getFecha()."</p>";
				$html .= "</div>";
				$html .= "<div class='correo_comentario'>";
				$html .= "<p>".$comentario->getCorreo()."</p>";
				$html .= "</div>";
				$html .= "<div class='id_comentario'>";
				$html .= "<p>Noticia ".$comentario->getID()."</p>";
				$html .= "</div>";
				$html .= "<div class='ident_comentario'>";
				$html .= "<p>ID ".$comentario->getIdentificador()."</p>";
				$html .= "</div>";
            $html .= "</div>";
            
            return $html;
		}

}
?>