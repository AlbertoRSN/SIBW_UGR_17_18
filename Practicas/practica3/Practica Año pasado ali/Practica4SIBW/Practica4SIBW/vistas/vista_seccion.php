<?php
    class VistaSeccion{
        static function muestraSeccion($seccionn){
            
				$html = "<li><a href=?secc=".$seccionn->getNombre().">".$seccionn->getNombre()."</a></li>";
            
            
            return $html;
        }



}
?>