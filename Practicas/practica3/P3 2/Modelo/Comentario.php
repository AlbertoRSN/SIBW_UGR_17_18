<?php
    class Comentario{
        private $ip;
        private $nombre;
		private $correo;
		private $fecha;
        private $comentario;
        
        function Comentario($ip = null, $nombre = null, $correo = null, $fecha = null, $comentario = null){
            if ($ip == null)
                $this->ip = "IP usuario";
            else
                $this->ip = $ip;
            if ($nombre == null)
                $this->nombre = "Nombre usuario";
            else
                $this->nombre = $nombre;
			if ($correo == null)
				$this->correo = "correo usuario";
			else
				$this->correo = $correo;
			if ($fecha == null)
				$this->fecha = "fecha del comentario";
			else
				$this->fecha = $fecha;
            if ($comentario == null)
                $this->comentario = "https://www.museoautomovilmalaga.com/wp-content/uploads/2016/01/EvPhoto-004-835x557.jpg";
            else
                $this->comentario = $comentario;
    
        }


         //get de cada parametro
        function getIp(){
            return $this->ip;
        }
    
        function getNombre(){
            return $this->nombre;
        }
		function getCorreo(){
			return $this->correo;
		}
		function getFecha(){
			return $this->fecha;
		}
        function getComentario(){
            return $this->comentario;
        }
        
         //set de cada parametro
        function setIp($otro_ip){
            $this->ip = $otro_ip;
        }
        function setNombre($otro_nombre){
            $this->nombre = $otro_nombre;
        }
		function setCorreo($otra_correo){
			$this->correo = $otra_correo;
		}
		function setFecha($otro_fecha){
			$this->fecha = $otro_fecha;
		}
        function setComentario($otra_comentario){
            $this->comentario = $otra_comentario;
        }
    }
?>
