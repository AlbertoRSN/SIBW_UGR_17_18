<?php
    include "vista_obra.php";
    
    class VistaObras{
		
		static function muestraObras($obras){
			echo '<div class="obras">';
				foreach ($obras as $obra){
					echo VistaObra::muestraObra($obra);
				}
			echo '</div>';
		}
		
		static function muestraObrasEspecificas($obras){
			echo '<div class="obras">';
				foreach($obras as $obra){
					echo VistaObra::muestraObraEspecifica($obra);
				}
				echo '</div>';
		}
		
		static function muestraObrasPrincipal($obras){
			echo '<section id="contenido-principal">';
				echo '<div id="fila1">';
					echo '<article class="imagen-contenido">';
						foreach($obras as $obra){
							echo VistaObra::muestraObraPrincipal($obra);
						}
					echo '</article>';
				echo '</div>';
			echo '</section>';
		}
}