<?php
    class Anuncio{
        private $id;
        private $foto_anuncio;
        
        function Anuncio($id = null, $foto_anuncio = null){
            if ($id == null)
                $this->id = 1;
            else
                $this->id = $id;
            if ($foto_anuncio == null)
                $this->foto_anuncio = "https://www.murciaturistica.es/webs/murciaturistica/fotos/1/museos/22006i5_g.jpg";
            else
                $this->foto_anuncio = $foto_anuncio;
    
        }
       
        function getId(){
            return $this->id;
        }
        function getFotoAnuncio(){
            return $this->foto_anuncio;
        }
        function setId($otro_id){
            $this->id = $otro_id;
        }
        function setFotoAnuncio($otra_foto_anuncio){
            $this->foto_anuncio = $otra_foto_anuncio;
        }
    }
?>
