<?php
    class Usuario{
        private $tipo_usuario;
        private $usuario;
        private $contrasenia;
		private $correo;
        
        function Usuario($tipo_usuario = null, $usuario = null, $contrasenia = null, $correo = null){
            if ($tipo_usuario == null)
                $this->tipo_usuario = "";
            else
                $this->tipo_usuario = $tipo_usuario;
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
       

       function getTipoUsuario(){
            return $this->tipo_usuario;
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
        function setUsuario($otro_tipo_usuario){
            $this->tipo_usuario = $otro_tipo_usuario;
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