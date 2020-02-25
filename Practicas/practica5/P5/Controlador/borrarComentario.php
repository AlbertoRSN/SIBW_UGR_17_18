<?php

 session_start();

$correo = $_SESSION['mail'];
$usu = $_POST['userBorrar'];
//$comentario=$_POST['fcomentario'];
//$fecha = ''.date("d").'/'.date("n").'/'.date("Y").' | '.date('H').':'.date('i').'';

include_once "../conexionDB/connection.php";
//-----------------------CONEXION---------------------
$connection = ConnectionDB();
//-----------------------CONEXION---------------------

$sql = "DELETE FROM comentarios WHERE nombre='$usu'";
//$sql = "INSERT INTO comentarios (IP, Nombre, Correo, Fecha, Comentario)VALUES('null', '$nombre', '$correo', '$fecha', '$comentario')";

    if (mysqli_query($connection, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "" . mysqli_error($conn);
    }

header("Location: ../index.php");


//$sql = "UPDATE usuarios SET contrasenia='$pw',usuario='$usu' WHERE correo='$compruebaCorreo'";
// $_SESSION['usuario']=$usu;
// $_SESSION['mail']=$correo;
// // //$sql = "UPDATE INTO usuarios (tipo_usuario, contrasenia, correo, usuario)VALUES('$user_reg', '$pw', '$correo', '$usu')";

// if (mysqli_query($connection, $sql)) {
//     echo "New record created successfully";
// } else {
//     echo "Error: " . $sql . "" . mysqli_error($conn);
// }

// header('Location: ../SuccessDatos.html');

cerrarConexionDB();
		
?>