<?php
    class VistaColeccion{
        static function muestraColeccion($coleccionn){
            
				$html = "<li><a href=?coleccion=".$coleccionn->getIdColeccion().">".$coleccionn->getNombre()."</a></li>";
            
            
            return $html;
        }



}
?>