<?php
    class Obra{
        private $indice;
	    private $id_coleccion;
		private $titulo;
        private $autor;
        private $anio;
		private $fecha_public;
		private $fecha_modif;
        private $texto;
        private $imagen;
        
        function Obra($indice = null, $id_coleccion = null, $titulo = null, $autor = null, $anio = null,  $fecha_public = null,  $fecha_modif = null, $texto = null, $imagen = null){
            if ($indice == null)
                $this->indice = 1;
            else
                $this->indice = $indice;


			if ($id_coleccion == null)
				$this->id_coleccion = "1";
			else
				$this->id_coleccion = $id_coleccion;


            if ($titulo == null)
                $this->titulo = "Título de obra";
            else
                $this->titulo = $titulo;


            if ($autor == null)
                $this->autor = "Autor de la obra";
            else
                $this->autor = $autor;


			if ($anio == null)
				$this->anio = "Año de la obra";
			else
				$this->anio = $anio;


            if ($fecha_public == null)
                $this->fecha_public = "Fecha de publicación";
            else
                $this->fecha_public = $fecha_public;


            if ($fecha_modif == null)
                $this->fecha_modif = "Fecha de publicación";
            else
                $this->fecha_modif = $fecha_modif;


			if ($texto == null)
				$this->texto = "Texto de la obra";
			else
				$this->texto = $texto;


            if ($imagen == null)
                $this->imagen = "https://www.museoautomovilmalaga.com/wp-content/uploads/2016/01/EvPhoto-004-835x557.jpg";
            else
                $this->imagen = $imagen;
    
        }


        //get de cada parametro
        function getIndice(){
            return $this->indice;
        }


        function getId_coleccion(){
            return $this->id_coleccion;
        }


        function getTitulo(){
            return $this->titulo;
        }


        function getAutor(){
            return $this->autor;
        }


		function getAnio(){
			return $this->anio;
		}


        function getFechaPublic(){
            return $this->fecha_public;
        }


        function getFechaModif(){
            return $this->fecha_modif;
        }

		function getTexto(){
			return $this->texto;
		}


        function getImagen(){
            return $this->imagen;
        }


        //set de cada parametro
        function setIndice($otro_indice){
            $this->indice = $otro_indice;
        }


		function setId_coleccion($otra_id_coleccion){
			$this->id_coleccion = $otra_id_coleccion;
		}


        function setTitulo($otro_titulo){
            $this->titulo = $otro_titulo;
        }

        
        function setAutor($otro_autor){
            $this->autor = $otro_autor;
        }


		function setAnio($otra_anio){
			$this->anio = $otra_anio;
		}

        function setFechaModif($otra_fecha){
            $this->fecha_modif = $otra_fecha;
        }


		function setTexto($otro_texto){
			$this->texto = $otro_texto;
		}

        
        function setImagen($otra_imagen){
            $this->imagen = $otra_imagen;
        }
    }
?>
