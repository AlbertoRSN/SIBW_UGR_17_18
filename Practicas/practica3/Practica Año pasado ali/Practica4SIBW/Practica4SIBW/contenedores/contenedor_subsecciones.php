<?php
    class ContenedorSubsecciones{
        private $array_subsecciones = array();
  	

        function getAllSubsecciones(){
            $sql = "select * from subseccion"; 
            global $conn;
            if ($result = $conn->query($sql)) { 
                while($row =  $result->fetch_row()){
                    $nombre = $row[0];
                    $seccion = $row[1];

                    $subseccionn = new Subseccion($nombre, $seccion);
                    array_push($this->array_secciones, $subseccionn);
                }
            }
            return $this->array_subsecciones;
        }
        
        function getSubsecciones(){
            return $this->array_subsecciones;
        }

	function getSubseccionBySeccion($seccion){
			$sql = "select * from subseccion where seccion='".$seccion."'";
			
			global $conn;
			if ($result = $conn->query($sql)) { 
                		while($row =  $result->fetch_row()){
					$nombre = $row[0];
                   			$seccion = $row[1];
                    
                    			$subseccion = new Subseccion($nombre,$seccion);
                    			array_push($this->array_subsecciones, $subseccion);
                		}
            		}
            		return $this->array_subsecciones;
	}
}



