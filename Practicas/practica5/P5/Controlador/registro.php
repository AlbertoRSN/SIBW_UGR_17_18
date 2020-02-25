<?php

session_start();

$db_table_name = 'usuarios';

$correo = $_POST['email'];
$usu = $_POST['user'];
$pw=$_POST['pass'];

$cifrada = sha1($pw);

include_once "../conexionDB/connection.php";
//-----------------------CONEXION---------------------
$connection = ConnectionDB();
//-----------------------CONEXION---------------------

$user_reg = '1';

$query = "SELECT * FROM usuarios where correo='".$correo."'";
$result = mysqli_query($connection,$query);
 
//Si ya hay un usuarii registrado con ese correo muestra error
if (mysqli_num_rows($result)>0){
	header('Location: ../Fail.html');
} else {
	$_SESSION['tipo'] = '1';
	$_SESSION['usuario'] = $usu;
	$_SESSION['mail'] = $correo;

	$sql = "INSERT INTO usuarios (tipo_usuario, contrasenia, correo, usuario)VALUES('$user_reg', '$cifrada', '$correo', '$usu')";

    if (mysqli_query($connection, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "" . mysqli_error($conn);
    }

	header('Location: ../Success.html');
}


// INSERT INTO table_name (column1, column2, column3,...)
// VALUES (value1, value2, value3,...)


cerrarConexionDB();
		
?>