<?php
	class Seccion{
		private $nombre;
		
		function Seccion($nombre){
			if($nombre == null){
				$nombre = "Portada";
			}
			else{
				$this->nombre = $nombre;
			}
		}
		
		function getNombre(){
			return $this->nombre;
		}
		
		function setNombre($otro_nombre){
			$this->nombre = $otro_nombre;
		}
	}
	
?>