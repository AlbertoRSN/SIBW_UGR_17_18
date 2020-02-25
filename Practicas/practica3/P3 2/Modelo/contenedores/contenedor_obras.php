<?php

    class ContenedorObras{
        private $array_obras = array(); 
		
		//Devuelve todas las obras
        function getAllObras(){		
            $sql = "select * from obras"; 
            global $conn;
            if ($result = $conn->query($sql)) { 
                while($row =  $result->fetch_row()){
                	$indice = $row[0];
                	$id_colec = $row[1];
					$titulo = $row[2];
        			$autor = $row[3];
        			$anio = $row[4];
					$fecha_public = $row[5];
					$fecha_modif  = $row[6];
        			$texto = $row[7] ;
        			$imagen = $row[8];
                    
                    $obra = new Obra($indice, $id_colec , $titulo , $autor , $anio ,  $fecha_public,  $fecha_modif, $texto , $imagen);
                    array_push($this->array_obras, $obra);
                }
            }
            return $this->array_obras;
        }
        

		//Devuelve el array obras
        function getobras(){
            return $this->array_obras;
        }
        


		//Devuelve la obra por el identificador de coleccion
		function getObrasByColeccion($id_colec){
			$sql = "select * from obras where id_coleccion='".$id_colec."'";
			
			global $conn;
			if ($result = $conn->query($sql)) { 
                while($row =  $result->fetch_row()){
                   	$indice = $row[0];
                	$id_colec = $row[1];
					$titulo = $row[2];
        			$autor = $row[3];
        			$anio = $row[4];
					$fecha_public = $row[5];
					$fecha_modif  = $row[6];
        			$texto = $row[7] ;
        			$imagen = $row[8];
                    
                    $obra = new Obra($indice, $id_colec , $titulo , $autor , $anio ,  $fecha_public,  $fecha_modif, $texto , $imagen);
                    array_push($this->array_obras, $obra);
                }
            }
            return $this->array_obras;
		}


		//Devuelve la coleccion por indice
		/*function getColeccion($ind){
			
			$result=getcoleccionByIndice($ind);
			return $resultado;
			}
			
		}*/
		
		
		function getObrasByColeccionByIndice($ind){
			$coleccionn = $this->getcoleccionByIndice($ind);
			$sql = "select * from obras where coleccion='".$coleccionn."'";
			
			global $conn;
			if($result = $conn->query($sql)){
				while($row =  $result->fetch_row()){
                   	$indice = $row[0];
                	$id_colec = $row[1];
					$titulo = $row[2];
        			$autor = $row[3];
        			$anio = $row[4];
					$fecha_public = $row[5];
					$fecha_modif  = $row[6];
        			$texto = $row[7] ;
        			$imagen = $row[8];
                    
                    $obra = new Obra($indice, $id_colec , $titulo , $autor , $anio ,  $fecha_public,  $fecha_modif, $texto , $imagen);
                    array_push($this->array_obras, $obra);
                }
			}
			return $this->array_obras;
		}



        function getObraByIndice($ind){
           // $coleccionn = $this->getcoleccionByIndice($ind);
            $sql = "select * from obras where indice='".$ind."'";
            
            global $conn;
            if($result = $conn->query($sql)){
                while($row =  $result->fetch_row()){
                    $indice = $row[0];
                    $id_colec = $row[1];
                    $titulo = $row[2];
                    $autor = $row[3];
                    $anio = $row[4];
                    $fecha_public = $row[5];
                    $fecha_modif  = $row[6];
                    $texto = $row[7] ;
                    $imagen = $row[8];
                    
                    $obra = new Obra($indice, $id_colec , $titulo , $autor , $anio ,  $fecha_public,  $fecha_modif, $texto , $imagen);
                    array_push($this->array_obras, $obra);
                }
            }
            return $this->array_obras;
        }

		
}
