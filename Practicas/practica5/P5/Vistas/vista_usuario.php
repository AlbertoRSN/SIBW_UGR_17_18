<?php

    class VistaUsuario{
    	
    	//Para que se vea cada obra en la pagina principal
        static function muestraUsuario($usu){	
            	//$html = "<a  href=?pag_inf=".$pag->getNombre().">'"; //IMPORTANTE LAS COMILLAS!!
				//	$html = $pag->getNombre() ;
            	//$html .= "'</a>";
            $html = "<p> '".$usu->getTipoUsuario(). "'</p>";
        	$html = "<p> '".$usu->getNombre(). "'</p>";
            return $html;
        }
    }
?>