<?php
include ('Modelo/Coleccion.php');

    class ContenedorColecciones{
        
        private $array_colecciones = array();
  	

        function getAllColecciones(){
            $sql = "select * from colecciones"; 
            global $conn;
            if ($result = $conn->query($sql)) { 
                while($row =  $result->fetch_row()){
                    $id_coleccion = $row[0];
                    $nombre = $row[1];
                    
                    $coleccionn = new Coleccion($id_coleccion ,$nombre);
                    array_push($this->array_colecciones, $coleccionn);
                }
            }
            return $this->array_colecciones;
        }
        

        //Devuelve la coleccion por indice
        function getColeccionByIndice($indice){
            $sql = "select nombre from colecciones where id_coleccion='".$indice."'";
            
            global $conn;
            if($result = $conn->query($sql)){
                while($row = $result->fetch_row()){
                    $resultado = $row[1];
                }
                return $resultado;
            }
            
        }


        function getcolecciones(){
            return $this->array_colecciones;
        }


}
