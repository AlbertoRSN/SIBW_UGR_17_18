<?php

    class ContenedorUsuarios{
        private $array_usuarios = array(); 

        function getAllUsuarios(){       
            $sql = "select * from usuarios"; 
            global $conn;
            if ($result = $conn->query($sql)) { 
                //while($row =  $result->fetch_row()){
                while($row =  mysqli_fetch_array($result){
                    $tipo_usuario = $row[0];
                    $contrasenia = $row[1];
                    $correo= $row[2];
                    $usuario = $row[3];
                    
                    $usuarios = new Usuario( $tipo_usuario,  $contrasenia , $correo , $usuario);
                    array_push($this->array_usuarios, $usuarios);
                }
            }
            return $this->array_usuarios;
        }


        function ComprobarUsuario($corr){
           // $coleccionn = $this->getcoleccionByIndice($ind);
            $sql = "select * from usuarios where correo='".$corr."'";
            
            global $conn;
            if($result = $conn->query($sql)){
                while($row =  mysqli_fetch_array($result){//$result->fetch_row()){
                    //$tipo_usuario = $row[0];
                    $cont = $row[1];
                    //$correo= $row[2];
                    //$usuario = $row[3];
                    
                    //$usuarios = new Usuario($contrasenia);//$tipo_usuario,  $contrasenia , $correo , $usuario);
                    //array_push($this->array_usuarios, $usuarios);
                }
            }
            //return $this->array_usuarios;
            return $cont;
        }

		
}
