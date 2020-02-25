<?php
    class ContenedorSecciones{
        private $array_secciones = array();
  	

        function getAllSecciones(){
            $sql = "select * from seccion"; 
            global $conn;
            if ($result = $conn->query($sql)) { 
                while($row =  $result->fetch_row()){
                    $nombre = $row[0];
                    
                    $seccionn = new Seccion($nombre);
                    array_push($this->array_secciones, $seccionn);
                }
            }
            return $this->array_secciones;
        }
        
        function getSecciones(){
            return $this->array_secciones;
        }


}
