<?php
    class Noticia{
        private $indice;
	private $subseccion;
		private $seccion;
        private $titulo1;
        private $titulo2;
		private $entradilla;
		private $texto;
        private $imagen;
        
        function Noticia($subseccion=null, $indice = null, $seccion = null, $titulo1 = null, $titulo2 = null, $entradilla = null, $texto = null, $imagen = null){
            if ($indice == null)
                $this->indice = 1;
            else
                $this->indice = $indice;
			if ($seccion == null)
				$this->seccion = "deportes";
			else
				$this->seccion = $seccion;
            if ($titulo1 == null)
                $this->titulo1 = "Título de noticia";
            else
                $this->titulo1 = $titulo1;
            if ($titulo2 == null)
                $this->titulo2 = "Título 2 de noticia";
            else
                $this->titulo2 = $titulo2;
			if ($entradilla == null)
				$this->entradilla = "entradilla de la noticia";
			else
				$this->entradilla = $entradilla;
			if ($texto == null)
				$this->texto = "Texto de la noticia";
			else
				$this->texto = $texto;
            if ($imagen == null)
                $this->imagen = "https://www.murciaturistica.es/webs/murciaturistica/fotos/1/museos/22006i5_g.jpg";
            else
                $this->imagen = $imagen;
    
        }
        function getTitulo1(){
            return $this->titulo1;
        }
        function getIndice(){
            return $this->indice;
        }
		function getSeccion(){
			return $this->seccion;
		}
	function getSubseccion(){
			return $this->subseccion;
		}

        function getTitulo2(){
            return $this->titulo2;
        }
		function getentradilla(){
			return $this->entradilla;
		}
		function getTexto(){
			return $this->texto;
		}
        function getImagen(){
            return $this->imagen;
        }
        function setIndice($otro_indice){
            $this->indice = $otro_indice;
        }
		function setSeccion($otra_seccion){
			$this->seccion = $otra_seccion;
		}
	function setSubseccion($otra_subseccion){
            $this->subseccion = $otra_subseccion;
        }

        function setTitulo1($otro_titulo1){
            $this->titulo1 = $otro_titulo1;
        }
        function setTitulo2($otro_titulo2){
            $this->titulo2 = $otro_titulo2;
        }
		function setentradilla($otra_entradilla){
			$this->entradilla = $otra_entradilla;
		}
		function setTexto($otro_texto){
			$this->texto = $otro_texto;
		}
        function setImagen($otra_imagen){
            $this->imagen = $otra_imagen;
        }
    }
?>
