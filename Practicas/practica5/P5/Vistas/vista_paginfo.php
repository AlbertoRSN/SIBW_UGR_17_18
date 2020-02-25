<?php
//include ('Modelo/PagInfo.php');
session_start();

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


        static function muestraRegistro(){
			$html = "<button id='boton_reg' type='button'  onclick='Registro()'>Log In / Sign Up</button>";
			//$html = "<button id='boton_registrar'>Si no esta registrado pulse AQUI</p>";


			$html .= "<div id='formularios_reg'>";
				$html .=		"<form id='formulario_reg' action='Controlador/validar.php' method='POST'>";
				$html .= 			"<input type='hidden' name='diract' value='".$_SERVER['PHP_SELF']."'>";
				$html .=			"<p><input id='label_correo' type='text' name='fcorreo_reg' placeholder='E-Mail'> </p>";
				$html .=			"<p><input type='password' name='fpassword_reg' placeholder='Contraseña'> </p>";
				$html .=			"<button id='boton_conectar' type='submit' name='Acceder'>Conectar</p>";
				$html .=		"</form>";
				$html .= 		"<form id='formulario_reg2' action='registro.html'>";
				$html .= 			"<button id='boton_registrar''>Registrar</p>";
				$html .= 		"</form>";


				//$html .= 			"<button id='boton_registrar' href='../hola.html'>Sign Up</p>";
			$html .="</div>";

			return $html;		
		}

		 static function muestraLogueado(){
			//$html = "<button id='boton_reg' type='button'  onclick='Registro()'>Conectarse</button>";

		 	if($_SESSION['tipo'] == 1)
		 		$privilegio = 'Usuario Registrado.';
		 	if($_SESSION['tipo'] == 2)
		 		$privilegio = 'Moderador.';
		 	if($_SESSION['tipo'] == 3)
		 		$privilegio = 'Gestor Museo';
		 	if($_SESSION['tipo'] == 4)
		 		$privilegio = 'Superusuario';

			$html .= "<div id='formularios_login'>";
				$html .=		"<form id='formulario_reg' action='Controlador/validar.php'>";
				$html .= 			"<input type='hidden' name='diract' value='".$_SERVER['PHP_SELF']."'>";
				$html .= 			"<p>Conectado como: '".$_SESSION['usuario']."'</p>";
				$html .= 			"<p>Privilegios: '".$privilegio."'</p>";
				$html .=			"<button id='boton_desconectar' type='submit'>Desconectar</button>";
				//$html .=			"<button id='boton_modificar' onclick='Modifica()'> Modificar</button>";
				//$html = 			"<button id='boton_mod' type='button'  onclick='Registro()'>Modificar</button>";
				$html .=		"</form type='submit'>";
				$html .= 		"<form id='formulario_reg2' action='modificar.html'>";
				$html .= 			"<button id='boton_modificar''>Modificar Datos</p>";
				$html .= 		"</form>";
				if($_SESSION['tipo']=='4' ){
					$html .= 		"<form id='formulario_reg2' action='roles.html'>";
					$html .= 			"<button id='boton_modificar''>Roles</p>";
					$html .= 		"</form>";
				}
			$html .="</div>";



				// $html .= "<div id='formulario_mod'>";
				// 	$html .=			"<button id='boton_modificar' onclick='Modificar()'>Modificar</button>";
				// $html .="</div>";

			//$html .="</div>";



			return $html;		
		}

		

}

?>