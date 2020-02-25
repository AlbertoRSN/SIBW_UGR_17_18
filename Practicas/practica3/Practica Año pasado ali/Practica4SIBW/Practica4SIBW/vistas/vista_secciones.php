<?php
    include "vista_seccion.php";
    
    class VistaSecciones{
		
		static function muestraSecciones($secciones){
			
				foreach ($secciones as $seccionn){
					echo VistaSeccion::muestraSeccion($seccionn);
				}
			
		}

}