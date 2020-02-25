<?php
    class PlabrasProhibidas{
        private $id;
        private $palabra;
        
        function PlabrasProhibidas($id = null, $palabra = null){
            if ($id == null)
                $this->id = 1;
            else
                $this->id = $id;
            if ($palabra == null)
                $this->palabra = "adios";
            else
                $this->palabra = $palabra;
    
        }
       
        function getId(){
            return $this->id;
        }
        function getPalabra(){
            return $this->palabra;
        }
        function setId($otro_id){
            $this->id = $otro_id;
        }
        function setPalabra($otra_palabra){
            $this->palabra = $otra_palabra;
        }
    }
?>
