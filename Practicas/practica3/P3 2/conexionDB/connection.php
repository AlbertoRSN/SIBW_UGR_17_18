<?php

	function ConnectionDB(){
		$db_server = "alicia";
		$db_name = "museo";
		$db_user = "alicia";
		$db_pass = "";
		//crear un usuario para que no sea root, para que no pueda borrar tablas
		$connection = new mysqli($db_server, $db_user, $db_pass, $db_name);
		
		if($connection->connect_error){
			die("Connection failed" . $connection->connect_error);
		}
		
		if(!$connection->set_charset( "utf8" )){
			echo "error cargando el conjunto de caracteres utf8";
		}
		return $connection;
	}
	
	
	function CerrarConexionDB(){
		mysqli_close();
	}
?>
