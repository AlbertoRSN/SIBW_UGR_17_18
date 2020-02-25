<?php
include('head.php');
    include "vista_obra.php";
    class VistaObras{
		
		static function muestraObras($obras){
			//echo '<div class="obras">';
			echo '<section id="contenido-principal">';
				foreach ($obras as $obra){
					echo VistaObra::muestraObra($obra);
				}
			//echo '</div>';
			echo '</section>';
		}
		
		static function muestraObrasEspecificas($obras){
			echo '<div class="obras">';
				foreach($obras as $obra){
					echo VistaObra::muestraObraEspecifica($obra);
				}
				echo '</div>';
		}
		
		static function muestraObrasPrincipal($obras){
			echo '<section id="contenido-principal-obra">';
				echo '<div id="fila1">';
					echo '<article class="imagen-contenido">';
						foreach($obras as $obra){
							echo VistaObra::muestraObraPrincipal($obra);
						}
					echo '</article>';
				echo '</div>';
			echo '</section>';
		}

		static function muestraObraDeseada($obra){
			//echo '<div class="obras">';
			
			foreach ($obra as $ob){		
				echo '<section id="contenido-principal">';	
					echo '<section id="contenido-principal-obra">';	
				
						echo '<div id="Titulo">';		
							echo VistaObra::muestraTituloObra($ob);	
							echo VistaObra::muestraAutorObra($ob);
							echo VistaObra::muestraAnioObra($ob);
						echo '</div>';

						echo '<section id="Fotos_obra">';	
							echo VistaObra::muestraFotosObra($ob);
						echo '</section>';

						echo '<section id="Parte1">';	
							echo VistaObra::muestraTextoObra($ob);
						echo '</section>';

						echo '<section id="social">';
							echo 	'<button class="boton" onclick="Redirigir_FB()">
									<img id="fc" src="./imagenes/fc.png">
									</button>';	
							echo 	'<button class="boton" onclick="Redirigir_TW()">
									<img id="tw" src="./imagenes/tw.png">
									</button>';	
							echo VistaObra::muestraSocialObra($ob);
						echo '</section>';
						
					echo '</section>';

					echo '<aside id="columna-derecha">';
						echo VistaObra::muestraColumnaDerechaObra($ob);
						
				
					echo '</aside>';

				echo '</section>';	
			}
			
				//echo '</div>';
		}
}