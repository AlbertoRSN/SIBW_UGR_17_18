<?php
    include "vista_usuario.php";

    class VistaUsuarios{
		
		static function muestraUsu($usu){
			echo '<div id="formularios_reg">'; 
			
			foreach($usu as $u){
				echo VistaUsuario::muestraUsuario($u);
			}
			echo '</div>';
		}
	}
?>