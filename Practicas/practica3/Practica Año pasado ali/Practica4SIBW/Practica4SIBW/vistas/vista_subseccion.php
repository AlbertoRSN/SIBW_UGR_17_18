<?php
    class VistaSubseccion{
        static function muestraSubseccion($subseccionn){
            
				$html = "<li><a href=?secc=".$subseccionn->getNombre().">".$subseccionn->getNombre()."</a></li>";
            
            
            return $html;
        }



}
?>
