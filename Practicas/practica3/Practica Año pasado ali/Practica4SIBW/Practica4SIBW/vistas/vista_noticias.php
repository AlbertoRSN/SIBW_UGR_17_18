<?php
    include "vista_noticia.php";
    
    class VistaNoticias{
		
        static function muestra3Noticias($noticias, $seccion){
			$contador = 0;
            echo "<div class='noticiascol'>";
                foreach ($noticias as $noticia) {
					$muestra = $noticia->getIndice();
					if($contador <3){
						if($muestra != $seccion){
							echo VistaNoticia::muestraNoticiaColumna($noticia);
							$contador++;
						}
						else{
							
						}
					}
                }
            echo "</div>";
        }
		
		static function muestraNoticias($noticias){
			echo '<div class="noticias">';
				foreach ($noticias as $noticia){
					echo VistaNoticia::muestraNoticia($noticia);
				}
			echo '</div>';
		}
		
		static function muestraNoticiasEspecificas($noticias){
			echo '<div class="noticias">';
				foreach($noticias as $noticia){
					echo VistaNoticia::muestraNoticiaEspecifica($noticia);
				}
				echo '</div>';
		}
		
		static function muestraNoticiasPrincipal($noticias){
			echo '<div id="noticia_principall">';
				foreach($noticias as $noticia){
					echo VistaNoticia::muestraNoticiaPrincipal($noticia);
				}
				echo '</div>';
		}


}