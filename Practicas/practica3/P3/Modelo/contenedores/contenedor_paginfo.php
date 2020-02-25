<?php

    class ContenedorPagInfo{
        private $array_PagInfo = array(); 
		
		//Devuelve todas las PagInfo
        function getAllPagInfo(){		
            $sql = "select * from paginasinfo"; 
            global $conn;
            if ($result = $conn->query($sql)) { 
                while($row =  $result->fetch_row()){
                    $pag = $row[0];
                    $nombre = $row[1];
                    $info= $row[2];
                    
                    $pg_info = new PagInfo($pag, $nombre, $info);
                    array_push($this->array_PagInfo, $pg_info);
                }
            }
            return $this->array_PagInfo;
        }
        

		//Devuelve el array PagInfo
        function getPagInfo(){
            return $this->array_PagInfo;
        }
		
		
		 function getPagInfoByIndice($indice){
           
            $sql = "select * from paginasinfo where pag='".$indice."'";
            
            global $conn;    
            if ($result = $conn->query($sql)) { 
                while($row =  $result->fetch_row()){
                    $pag = $row[0];
                    $nombre = $row[1];
                    $info= $row[2];
                    
                    $pg_info = new PagInfo($pag, $nombre, $info);
                    array_push($this->array_PagInfo, $pg_info); 
                }
            }
            return $this->array_PagInfo;
                     
        }
		
}
