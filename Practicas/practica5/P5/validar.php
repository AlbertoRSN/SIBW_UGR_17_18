<?php 
	$usuario = $_POST['fcorreo_reg'];
	$pass = $_POST['fpassword_reg'];

	if(empty($usuario) || empty($pass)){
		header("Location: index.php");
		exit();
	}

	mysql_connect('localhost','usuario','') or die("Error al conectar " . mysql_error());
	mysql_select_db('museo') or die ("Error al seleccionar la Base de datos: " . mysql_error());

	$result = mysql_query("SELECT * from usuarios where correo='" . $usuario . "'");

	if($row = mysql_fetch_array($result)){
		if($row['contrasenia'] == $pass){
			session_start();
			$_SESSION['correo'] = $usuario;
			header("Location: Controlador/contenido.php");
		}else{
			header("Location: hola.html");
			exit();
		}
	}else{
		header("Location: hola.html");
		exit();
	}
?>
