<?php
	class Subseccion{
		private $nombre;
		private $seccion;
		
		function Subseccion($nombre, $seccion){
			if($nombre == null){
				$nombre = "Portada";
			}
			else{
				$this->nombre = $nombre;
			}

			if($seccion == null){
				$seccion = "Otra";
			}
			else{
				$this->seccion = $seccion;
			}
		}
		
		function getNombre(){
			return $this->nombre;
		}
		
		function getSeccion(){
			return $this->seccion;
		}

		function setNombre($otro_nombre){
			$this->nombre = $otro_nombre;
		}
   
		function setSeccion($otra_seccion){
			$this->seccion = $otra_seccion;
		}
	}
	
?>
