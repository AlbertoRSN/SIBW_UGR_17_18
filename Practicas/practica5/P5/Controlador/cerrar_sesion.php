<?php
	//include ("seguridad.php");
	session_start();
	session_destroy();
	$_SESSION['tipo']='0';
	//session_unset();
	header('Location: ../index.php');
	
?>