<?php
	class Coleccion{
		private $id_coleccion;
		private $nombre;
		
		function Coleccion($id_coleccion=null, $nombre=null){
			if($id_coleccion == null){
				$id_coleccion = "1";
			}
			else{
				$this->id_coleccion = $id_coleccion;
			}

			if($nombre == null){
				$nombre = "Portada";
			}
			else{
				$this->nombre = $nombre;
			}

		}
		
		function getIdColeccion(){
			return $this->id_coleccion;
		}
		
		function getNombre(){
			return $this->nombre;
		}
		
		function setIdColeccion($otro_id_coleccion){
			$this->id_coleccion = $otro_id_coleccion;
		}

		function setNombre($otro_nombre){
			$this->nombre = $otro_nombre;
		}
	}
	
?>