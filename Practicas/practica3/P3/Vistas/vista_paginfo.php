<?php
    class VistaPagInfo{
    	
    	//Para que se vea cada obra en la pagina principal
        static function muestraPag($pag){	
            	$html = "<nav id='menu-cab'>"; //IMPORTANTELAS COMILLAS!!
					$html .="<a href=?pag_info=".$pag->getNombre().">'".$pag->getNombre()."'</a>";
            	$html .= "</nav>";
            return $html;
        }

        //Para que se vea la obra seleccionada
		static function muestraPagEspecifica($pag){
	

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