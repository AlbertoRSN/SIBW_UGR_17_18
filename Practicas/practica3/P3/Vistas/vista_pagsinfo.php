<?php
    include "vista_paginfo.php";
    
    class VistaPagsInfo{
		
		static function muestraPags($pags){
			echo '<header>'; 

        		echo '<div id="cabecera">'; 
        			echo '<img id="logo-cab" src="imagenes/logo10.png">'; 
					echo '<a><img id="titulo-cab" src="imagenes/logonuevo2.png"></a>'; 
				echo '</div>'; 

            echo '</header>';

			echo '<nav id="menu-cab">';
				foreach ($pags as $pag){
					echo VistaPagInfo::muestraPag($pag);
				}
			echo '</nav>';
		}
		
}