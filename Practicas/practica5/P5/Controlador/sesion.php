<?php


if (isset($_POST['correo']) && isset($_POST['contrasenia'])) {
 	 echo 'hola: '.$_POST['usuario'];
  	 echo 'hola: '.$_POST['contrasenia'];



include_once "conexionDB/connection.php";

session_start();

$_SESSION['usuario']="";
$_SESSION['tipo']="hola";
$_SESSION['correo']="adriana";
$_SESSION['contrasenia']="adriana";

// print_r($_SESSION);

$con = ConnectionDB();

$query = 'SELECT correo, contrasenia, tipo_usuario from usuarios';

$rec = mysqli_query($con,$query);

 while($row = mysqli_fetch_array($rec)){
 	if (($_POST['fcorreo_reg']==$row['correo'])&&($_POST['fpassword_reg']==$row['contrasenia']) ){

 		$_SESSION['usuario']=$row['correo'];
 		$_SESSION['tipo']=$row['tipo_usuario'];

 		echo $_SESSION['usuario'];
   		echo $_SESSION['tipo'];

   		header("Location: index.php"}
 	}else if (($_POST['fcorreo_reg']==$row['correo'])&&($_POST['fpassword_reg']==$row['contrasenia'])){
	   $_SESSION['usuario']=$row['correo'];
	   $_SESSION['tipo']=$row['tipo_usuario'];
	   echo $_SESSION['usuario'];
	   echo $_SESSION['tipo'];
	   header("Location: index.php");
  	}
 }
 //header("Location:".$_POST['diract']);
}
?>
