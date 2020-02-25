<?php

 session_start();

$correo = $_SESSION['mail'];
$usu = $_POST['userModificar'];
$com = $_POST['coment'];
$fecha = ''.date("d").'/'.date("n").'/'.date("Y").' | '.date('H').':'.date('i').'';

include_once "../conexionDB/connection.php";
//-----------------------CONEXION---------------------
$connection = ConnectionDB();
//-----------------------CONEXION---------------------

$sql = "UPDATE comentarios SET Fecha='$fecha',Comentario='$com *Modificado por el Moderador*' WHERE Nombre='$usu'";

    if (mysqli_query($connection, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "" . mysqli_error($conn);
    }

header("Location: ../index.php");

cerrarConexionDB();
		
		
?>