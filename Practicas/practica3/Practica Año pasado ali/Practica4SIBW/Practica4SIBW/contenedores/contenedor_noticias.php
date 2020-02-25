<?php
    class ContenedorNoticias{
        private $array_noticias = array();
		
		//Cambiar esta y poner que coja todas las noticias donde la variable "principal"(que hay que meterla en la base de datos) sea "no".
		
		function getNoticiaPrincipal(){
			$sql = "select * from noticias where principal='si'";
			
			global $conn;
			if($result = $conn->query($sql)){
				while($row = $result->fetch_row()){
		$seccion = $row[0];
			$subseccion= $row[1];
					$indice = $row[2];
                    $titulo1= $row[3];
                    $titulo2 = $row[4];
                    $entradilla = $row[5];
					$texto = $row[6];
					$imagen = $row[7];
                    
                    $noticia = new Noticia($subseccion, $indice,$seccion,$titulo1,$titulo2,$entradilla,$texto,$imagen);
                    array_push($this->array_noticias, $noticia);
				}
			}
			return $this->array_noticias;
		}
        function getAllNoticias(){
            $sql = "select * from noticias where principal='no'"; 
            global $conn;
            if ($result = $conn->query($sql)) { 
                while($row =  $result->fetch_row()){
                    $seccion = $row[0];
			$subseccion= $row[1];
					$indice = $row[2];
                    $titulo1= $row[3];
                    $titulo2 = $row[4];
                    $entradilla = $row[5];
					$texto = $row[6];
					$imagen = $row[7];
                    
                    $noticia = new Noticia($subseccion, $indice,$seccion,$titulo1,$titulo2,$entradilla,$texto,$imagen);
                    array_push($this->array_noticias, $noticia);
                }
            }
            return $this->array_noticias;
        }
        
        function getNoticias(){
            return $this->array_noticias;
        }
        
        function getNoticiasByIndice($indice){
           
            $sql = "select * from noticias where indice='".$indice."'";
            
            global $conn;    
            if ($result = $conn->query($sql)) { 
                while($row =  $result->fetch_row()){
                  $seccion = $row[0];
			$subseccion= $row[1];
					$indice = $row[2];
                    $titulo1= $row[3];
                    $titulo2 = $row[4];
                    $entradilla = $row[5];
					$texto = $row[6];
					$imagen = $row[7];
                    
                    $noticia = new Noticia($subseccion, $indice,$seccion,$titulo1,$titulo2,$entradilla,$texto,$imagen);
                    array_push($this->array_noticias, $noticia);
                }
            }
            return $this->array_noticias;
            
           
        }
		
		function getNoticiasBySeccion($seccion){
			$sql = "select * from noticias where seccion='".$seccion."'";
			
			global $conn;
			if ($result = $conn->query($sql)) { 
                while($row =  $result->fetch_row()){
                   $seccion = $row[0];
			$subseccion= $row[1];
					$indice = $row[2];
                    $titulo1= $row[3];
                    $titulo2 = $row[4];
                    $entradilla = $row[5];
					$texto = $row[6];
					$imagen = $row[7];
                    
                    $noticia = new Noticia($subseccion, $indice,$seccion,$titulo1,$titulo2,$entradilla,$texto,$imagen);
                    array_push($this->array_noticias, $noticia);
                }
            }
            return $this->array_noticias;
		}
		
		function getSeccionByIndice($seccion){
			$sql = "select seccion from noticias where indice='".$seccion."'";
			
			global $conn;
			if($result = $conn->query($sql)){
				while($row = $result->fetch_row()){
					$resultado = $row[0];
				}
				return $resultado;
			}
			
		}
		
		function getNoticiasBySeccionByIndice($seccion){
			$seccionn = $this->getSeccionByIndice($seccion);
			$sql = "select * from noticias where seccion='".$seccionn."'";
			
			global $conn;
			if($result = $conn->query($sql)){
				while($row =  $result->fetch_row()){
                   $seccion = $row[0];
			$subseccion= $row[1];
					$indice = $row[2];
                    $titulo1= $row[3];
                    $titulo2 = $row[4];
                    $entradilla = $row[5];
					$texto = $row[6];
					$imagen = $row[7];
                    
                    $noticia = new Noticia($subseccion, $indice,$seccion,$titulo1,$titulo2,$entradilla,$texto,$imagen);
                    array_push($this->array_noticias, $noticia);
                }
			}
			return $this->array_noticias;
		}

		function getNoticiasBySubseccion($subseccion){
			$sql = "select * from noticias where subseccion='".$subseccion."'";
			
			global $conn;
			if ($result = $conn->query($sql)) { 
                while($row =  $result->fetch_row()){
                   $seccion = $row[0];
			$subseccion= $row[1];
					$indice = $row[2];
                    $titulo1= $row[3];
                    $titulo2 = $row[4];
                    $entradilla = $row[5];
					$texto = $row[6];
					$imagen = $row[7];
                    
                    $noticia = new Noticia($subseccion, $indice,$seccion,$titulo1,$titulo2,$entradilla,$texto,$imagen);
                    array_push($this->array_noticias, $noticia);
                }
            }
            return $this->array_noticias;
		}
		
}
