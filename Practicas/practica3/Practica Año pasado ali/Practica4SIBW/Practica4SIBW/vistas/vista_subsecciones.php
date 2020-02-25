<?php
    include "vista_subseccion.php";
    
    class VistaSubsecciones{
		
		static function muestraSubsecciones($subsecciones){
			
				foreach ($subsecciones as $subseccionn){
					echo VistaSubseccion::muestraSubseccion($subseccionn);
				}
			
		}

}
