<?php
    class ContenedorComentarios{
        private $array_comentarios = array();
		
        function getAllComentarios(){
            $sql = "select * from comentarios"; 
            global $conn;
            if ($result = $conn->query($sql)) { 
                while($row =  $result->fetch_row()){
                    $IP = '192.168.1.2';
                    $nombre = $row[1];
                    $correo = $row[2];
                    $date = $row[3];
  		            $coment = $row[4];
		   
                    $comentario = new Comentario($IP, $nombre, $correo, $date, $coment);
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
 
