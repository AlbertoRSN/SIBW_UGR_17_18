<?php
    class Usuario{
        private $usuario;
        private $contrasenia;
		private $correo;
        
        function Usuario($usuario = null, $contrasenia = null, $correo = null){
            if ($usuario == null)
                $this->usuario = 1;
            else
                $this->usuario = $usuario;
            if ($contrasenia == null)
                $this->contrasenia = "adios";
            else
                $this->contrasenia = $contrasenia;
			if ($correo == null)
				$this->correo = "hola@hotmail.com";
			else	
				$this->correo = $correo;
        }
       
        function getUsuario(){
            return $this->usuario;
        }
        function getContrasenia(){
            return $this->contrasenia;
        }
		function getCorreo(){
			return $this->correo;
		}
        function setUsuario($otro_usuario){
            $this->usuario = $otro_usuario;
        }
        function setContrasenia($otra_contrasenia){
            $this->contrasenia = $otra_contrasenia;
        }
		function setCorreo($otro_correo){
			$this->correo = $otro_correo;
		}
    }
?>
