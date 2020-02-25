<?php
    $conn = ConnectionDB();
   // CerrarConexionDB();

include "modelo/seccion.php";
include "vistas/vista_secciones.php";
include "contenedores/contenedor_secciones.php";

$contenedor2 = new ContenedorSecciones();

$menu = $contenedor2->getAllSecciones();
   
VistaSecciones::muestraSecciones($menu);
  














?>

