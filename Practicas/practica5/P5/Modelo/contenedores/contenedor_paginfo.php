<?php

//include ('Modelo/PagInfo.php');

    class ContenedorPagInfo{
        private $array_PagInfo = array(); 
		private $pagina_informacion;


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
		
		
		 function getPagInfoByIndice($pag){
           
            $sql = "select * from paginasinfo where pagina='".$pag."'";
            
            global $conn;    
            if ($result = $conn->query($sql)) { 
                while($row =  $result->fetch_row()){
                    $pag = $row[0];
                    $nombre = $row[1];
                    $info= $row[2];
                    
                    $pg_info = new PagInfo($pag, $nombre, $info);
                    array_push($this->array_PagInfo, $pg_info);
                    //$pagina_informacion = $pg_info;
                }
            }
            return $this->array_PagInfo;
                     
        }


        //Devuelve el indice de la pagina 
        function getNombrePagByIndice($indice){
            $sql = "select * from paginasinfo where pagina='".$indice."'";
            
            global $conn;
            if($result = $conn->query($sql)){
                while($row = $result->fetch_row()){
                    $nombre = $row[1];
                }
                return $nombre;
            }
            
        }
		
}
