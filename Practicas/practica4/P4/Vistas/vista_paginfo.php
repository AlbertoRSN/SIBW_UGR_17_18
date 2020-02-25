<?php
//include ('Modelo/PagInfo.php');

    class VistaPagInfo{
    	
    	//Para que se vea cada obra en la pagina principal
        static function muestraPag($pag){	
            	//$html = "<a  href=?pag_inf=".$pag->getNombre().">'"; //IMPORTANTE LAS COMILLAS!!
				//	$html = $pag->getNombre() ;
            	//$html .= "'</a>";
        	$html = "<a  href=?pag_inf=".$pag->getPagina().">'" .$pag->getNombre(). "'</a>";
            return $html;
        }

        //Para que se vea la obra seleccionada
		static function muestraPagByIndice($pag){
	

				$html ="<div id='Titulo'>";
					$html ="<h1>".$pag->getNombre()."</h1>";
				$html .= "</div>";


				$html ="<section class='Parte1'>";
					$html ="<p>".$pag->getInfo()."</p>";	
				$html .= "</section>";		
			
			return $html;
		}

		static function muestraPagEntera($pag){	
            
        	$html ="<div id='Titulo'>";
					$html ="<h1>".$pag->getNombre()."</h1>";
				$html .= "</div>";


				$html ="<section class='Parte1'>";
					$html ="<p>".$pag->getInfo()."</p>";	
				$html .= "</section>";		
            return $html;
        }
}
?>