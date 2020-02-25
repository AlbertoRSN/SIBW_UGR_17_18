<?php
	class PagInfo{
		private $pag;
		private $nombre;
		private $info;
		
		function PagInfo($pag = null, $nombre= null, $info= null){
			if ($pag == null)
                $this->pag = 1;
            else
                $this->pag = $pag;


			if($nombre == null)
				$nombre = "Inicio";
			else
				$this->nombre = $nombre;
			
			if ($info == null)
				$this->info = "Información de la obra";
			else
				$this->info = $info;

		}
		


        //get de cada parametro
        function getPagina(){
            return $this->pag;
        }


		function getNombre(){
			return $this->nombre;
		}
		

		function getInfo(){
			return $this->info;
		}


        //set de cada parametro
        function setPagina($otra_pag){
			$this->pag = $otro_pag;
		}


		function setNombre($otro_nombre){
			$this->nombre = $otro_nombre;
		}


		function setInfo($otra_info){
			$this->info = $otra_info;
		}
	}
	
?>