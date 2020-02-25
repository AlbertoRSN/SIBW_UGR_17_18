<?php 
	//session_start();
	include ('cerrar_sesion.php');
	session_start();

	//header("Location: ../hola.html");

	// include ('../Modelo/contenedores/contenedor_usuarios.php');
	// include ('../Modelo/Usuario.php')

	$_SESSION['tipo'] = '0';
	
	//-----------------------obtencion de datos del formulario---------------------
	$correo = $_POST['fcorreo_reg'];
	$pass = $_POST['fpassword_reg'];

	echo 'Usuario: ' .$correo;
	echo ' Contrasenia: ' .$pass;
	//-----------------------obtencion de datos del formulario---------------------


	//comrpobacion si los datos estan vacios
	if(empty($correo) || empty($pass)){
		header("Location: ../index.php");
		exit();
	}


	include_once "../conexionDB/connection.php";
	//-----------------------CONEXION---------------------
	// $db_server = "localhost";
	// $db_name = "museo";
	// $db_user = "usuario";
	// $db_pass = "";

	// //crear un usuario para que no sea root, para que no pueda borrar tablas
	// $connection = new mysqli($db_server, $db_user, $db_pass, $db_name);
		
	// if($connection->connect_error){
	// 	die("Error al conectar...   " . $connection->connect_error);
	// }
		
	// if(!$connection->set_charset( "utf8" )){
	// 	echo "error cargando el conjunto de caracteres utf8";
	// }
	$connection = ConnectionDB();
	//-----------------------CONEXION---------------------

	$query = "SELECT * from usuarios where correo='".$correo."'";

	$result = mysqli_query($connection,$query);
	
	if (!$result) {
    	echo 'No se pudo ejecutar la consulta: ' . mysqli_error();
    	exit();
	}

	//en la variable actor guardo el valor de la consulta
	$valor = $result->fetch_assoc();

	if($valor['contrasenia'] == $pass){
		$_SESSION['tipo'] = $valor['tipo_usuario'];
		$_SESSION['usuario'] = $valor['usuario'];
		$_SESSION['mail'] = $correo;

		//print_r($_SESSION);
		//echo 'la contrasenia es la misma! BIEN!';
		header("Location: " .$_POST['diract']);
	}
		//echo 'la contrasenia es la misma! BIEN!';
	else{
		$_SESSION['tipo'] = '0';
		header("Location: " .$_POST['diract']);
	}
	//echo "A veces veo a " . $actor['tipo_usuario'] . " " . $actor['usuario'] . " en la TV.";







	// mysql_connect('localhost','usuario','') or die("Error al conectar " . mysql_error());
	// mysql_select_db('museo') or die ("Error al seleccionar la Base de datos: " . mysql_error());

	// include_once "conexionDB/connection.php";
	// $conn = ConnectionDB();

	// $contenedor = new ContenedorUsuarios();
	// $usuarios = $contenedor->getAllUsuarios(); //Tipo contraseña correo y usuario
	// $password = $contenedor->ComprobarUsuario($correo);


	// print_r($password);


	
	// $sql = "select * from usuarios where correo='".$_POST['fcorreo_reg']."'";
            
 //    $conn=ConnectionDB();

 //    if($result = $conn->query($sql)){
 //        while($row =  $result->fetch_row()){
 //            $cont = $row[1];
 //        }
 //    }


	

	// $query = "SELECT * from usuarios ";//where correo='".$correo."'";

	// $result = mysqli_query($con,$query);
	
	// if (!$result) {
 //    	echo 'No se pudo ejecutar la consulta: ' . mysqli_error();
 //    	exit;
	// }

	// $fila = mysql_fetch_row($result);

	// echo $fila[0]; 
	// echo $fila[1];


 	// while($row = mysqli_fetch_array($rec)){
 	// 	$cont = $row[1];
 	// }

 	// echo $cont;


    //return $this->array_usuarios;
    //echo $cont;

	// if($password == $pass){
	// 	session_start();
	// 	$_SESSION['usuario'] = "PEPA";
	// 	header("Location: ../hola.html");//" .$_POST['diract']);
	// }
	// else{
	// 	header("Location: ../index.php");//" .$_POST['diract']);
	// }








	//VistaUsuarios::MuestraUsu($password);

	//header("Location: hola.html");

	//$con = ConnectionDB();
	//$query = "SELECT correo, contrasenia from usuarios";

	// $result = mysql_query("SELECT * from usuarios where correo='" . $correo . "'");
	//$result = mysql_query("SELECT * from usuarios ");

	// $result = mysqli_query($con,$query);

	// if($row = mysql_fetch_array($result)){
	// 	if($row['contrasenia'] == $pass){
	// 		$_SESSION['correo'] = $correo;
	// 		header("Location: index.php");//Controlador/contenido.php");
	// 	}else{
	// 		header("Location: index.php");
	// 		exit();
	// 	}
	// }else{
	// 	header("Location: index.php");
	// 	exit();
	// }
	
	cerrarConexionDB();
?>
