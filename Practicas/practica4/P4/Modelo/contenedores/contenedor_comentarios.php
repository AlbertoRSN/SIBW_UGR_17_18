<?php
    class ContenedorComentarios{
        private $array_comentarios = array();
		
        function getAllComentarios(){
            $sql = "select * from comentarios"; 
            global $conn;
            if ($result = $conn->query($sql)) { 
                while($row =  $result->fetch_row()){
                    $nombre = $row[1];
                    $date = $row[3];
  		    $coment = $row[4];
		   
                    $comentario = new Comentario(null, $nombre, null, $date, $coment);
                    array_push($this->array_comentarios, $comentario);
                }
            }
            return $this->array_comentarios;
        }
        
        function getComentarios(){
            return $this->array_comentarios;
        }

 	

    }
?>
 
