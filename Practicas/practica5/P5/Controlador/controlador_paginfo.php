<?php

$conn = ConnectionDB();

session_start();

include ('Modelo/PagInfo.php');
include ('Vistas/vista_pagsinfo.php');
include ('Modelo/contenedores/contenedor_paginfo.php');


//Modelo 
$contenedor = new ContenedorPagInfo();
$paginas = $contenedor->getAllPagInfo();

//Vistas

//Si es usuario anonimo
if($_SESSION['tipo'] == '0'){
	VistaPagsInfo::muestraPags0($paginas);
}
//Si es un usuario registrado
if($_SESSION['tipo'] != '0'){
	VistaPagsInfo::muestraPags($paginas);
}