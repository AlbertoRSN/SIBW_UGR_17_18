<?php
    include "vista_paginfo.php";
    include "vista_coleccion.php";

    class VistaPagsInfo{
		
		static function muestraPags($pags){
			echo '<header>'; 

        		
        		echo '<img id="logo-cab" src="imagenes/logo10.png">'; 
        		echo '<div id="cabecera">'; 
					echo '<a href=?pag_inf=0><img id="titulo-cab" src="imagenes/logonuevo2.png"></a>'; 
					echo '<nav class="menu-cab">';
						foreach ($pags as $pag){
							echo VistaPagInfo::muestraPag($pag);
						}
					echo '</nav>';
				echo '</div>'; 

				
            echo '</header>';

			
		}
		
		static function muestraPagEspecifica($pag_entera){
			//echo '<div id="Titulo">'; 
			foreach ($pag_entera as $pag){
				echo VistaPagInfo::muestraPagEntera($pag);
			//echo '</div>'; 
			}
		}
		
		static function muestraColecciones($colecc){
			//echo '<div class="obras">';
			echo '<section id="contenido-principal">';
				foreach ($colecc as $col){
					echo VistaColeccion::muestraColeccion($col);
				}
			//echo '</div>';
			echo '</section>';
		}
}