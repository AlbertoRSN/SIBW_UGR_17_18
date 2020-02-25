<?php

 session_start();

$correo = $_SESSION['mail'];
$usu = $_POST['userModificar'];
$rolNuevo = $_POST['rol'];
//$fecha = ''.date("d").'/'.date("n").'/'.date("Y").' | '.date('H').':'.date('i').'';

echo $rolNuevo; //Devuelve numero de rol

include_once "../conexionDB/connection.php";
//-----------------------CONEXION---------------------
$connection = ConnectionDB();
//-----------------------CONEXION---------------------

$sql = "UPDATE usuarios SET tipo_usuario='$rolNuevo' WHERE usuario='$usu'";

    if (mysqli_query($connection, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "" . mysqli_error($conn);
    }

header("Location: ../index.php");

cerrarConexionDB();
		
		
?>