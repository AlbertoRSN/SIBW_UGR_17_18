<?php
$conn = ConnectionDB();

include ('Modelo/PagInfo.php');
include ('Vistas/vista_pagsinfo.php');
include ('Modelo/contenedores/contenedor_paginfo.php');


//Modelo 
$contenedor = new ContenedorPagInfo();
$paginas = $contenedor->getAllPagInfo();

//Vistas
VistaPagsInfo::muestraPags($paginas);
