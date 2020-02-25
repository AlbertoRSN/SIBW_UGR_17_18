<?php

session_start();

    	//$_SESSION["favcolor"] = "yellow";
		//print_r($_SESSION);

include('head.php');
    include "vista_obra.php";
    include "vista_comentario.php";
    class VistaObras{
		
		static function muestraObras($obras){
			//echo '<div class="obras">';
			echo '<section id="contenido-principal">';
				foreach ($obras as $obra){
					echo VistaObra::muestraObra($obra);
				}
			//echo '</div>';
			echo '</section>';
		}
		
		static function muestraObrasEspecificas($obras){
			echo '<div class="obras">';
				foreach($obras as $obra){
					echo VistaObra::muestraObraEspecifica($obra);
				}
				echo '</div>';
		}
		
		static function muestraObrasPrincipal($obras){
			echo '<section id="contenido-principal-obra">';
				echo '<div id="fila1">';
					echo '<article class="imagen-contenido">';
						foreach($obras as $obra){
							echo VistaObra::muestraObraPrincipal($obra);
						}
					echo '</article>';
				echo '</div>';
			echo '</section>';
		}

		static function muestraObraDeseada($obra){
      //echo '<div class="obras">';
      
      foreach ($obra as $ob){    
        //echo '<section id="contenido-principal">';  
          echo '<section id="contenido-principal-obra">';  
        
            echo '<div id="Titulo">';    
              echo VistaObra::muestraTituloObra($ob);  
              echo VistaObra::muestraAutorObra($ob);
              echo VistaObra::muestraAnioObra($ob);
            echo '</div>';

            echo '<section id="Fotos_obra">';  
              echo VistaObra::muestraFotosObra($ob);
            echo '</section>';

            echo '<section id="Parte1">';  
              echo VistaObra::muestraTextoObra($ob);
            echo '</section>';

            echo '<section id="social">';
              echo   '<button class="boton" onclick="Redirigir_FB()">
                  <img id="fc" src="./imagenes/fc.png">
                  </button>';  
              echo   '<button class="boton" onclick="Redirigir_TW()">
                  <img id="tw" src="./imagenes/tw.png">
                  </button>';  
              echo VistaObra::muestraSocialObra($ob);
            echo '</section>';
            
          echo '</section>';

          // echo '<aside id="columna-derecha">';
          //   echo VistaObra::muestraColumnaDerechaObra($ob);        //COMENTARIOS!!!!!
            // echo '<aside id="columna-derecha">';
            // foreach ($comentarios as $comentario){
            //   echo VistaComentario::muestraComentario($comentario);
            // }
          echo '</aside>';
        
          // echo '</aside>';

        //echo '</section>';  
      }
      //echo '</div>';
    }


    static function muestraComentarios($comentarios){
          echo '<aside id="columna-derecha">';
          echo '<button type="button" onClick="Comentarios()">Comentarios</button>';
            foreach ($comentarios as $comentario){
              echo VistaComentario::muestraComentario($comentario);
            }

            if($_SESSION['tipo'] != '0'){
	            echo  '<div id="OpcionesFormulario">';
	            echo    '<form id="formulario_env" action="Controlador/enviarComentario.php" method="post">';
	            echo      '<input type="hidden" name="diract2" value="'.$_SERVER["PHP_SELF"].'">';
	            //echo      '<p>Nombre: <input type="text" name="fname"> </p>';
	            //echo      '<p>E-mail: <input type="email" name="fcorreo"> </p>';
	            echo      '<p>Texto del comentario: <input type"text" name="fcomentario" onkeypress="PalabrasProhibidas(this)"> </p>';
				      echo 	'<button id="boton_env_coment">Enviar</p>';
		          echo    '</form type="submit">';
	            echo  '</div> ';

	            if($_SESSION['tipo']=='2' || $_SESSION['tipo']=='4' ){
					       echo    '<form id="formulario_mod" action="modificarComentario.html" method="post">';
					       echo 	'<button id="boton_mod_coment">Modificar</p>';
		             echo    '</form type="submit">';
				        
                 echo    '<form id="formulario_mod" action="borrarComentario.html" method="post">';
                 echo   '<button id="boton_mod_coment">Borrar</p>';
                 echo    '</form type="submit">';
              } 
              echo'</div>';
            }
          echo '</aside>';

      }




}