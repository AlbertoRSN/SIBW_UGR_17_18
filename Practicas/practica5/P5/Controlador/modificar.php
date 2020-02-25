<?php

session_start();

$correo = $_POST['email2'];
$usu = $_POST['user'];
$pw=$_POST['pass2'];

// echo ' Usuario-> '.$correo;
// echo ' Contraseña-> '.$pw;
// echo ' usuario ->'.$usu;

include_once "../conexionDB/connection.php";
//-----------------------CONEXION---------------------
$connection = ConnectionDB();
//-----------------------CONEXION---------------------

echo ' Email-> '.$correo;
echo ' Contraseña-> '.$pw;
echo ' User ->'.$usu;

$compruebaCorreo = $_SESSION['mail'];

$sql = "UPDATE usuarios SET contrasenia='$pw',usuario='$usu' WHERE correo='$compruebaCorreo'";
$_SESSION['usuario']=$usu;
$_SESSION['mail']=$correo;
// //$sql = "UPDATE INTO usuarios (tipo_usuario, contrasenia, correo, usuario)VALUES('$user_reg', '$pw', '$correo', '$usu')";

if (mysqli_query($connection, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "" . mysqli_error($conn);
}

header('Location: ../SuccessDatos.html');

cerrarConexionDB();
		
?>