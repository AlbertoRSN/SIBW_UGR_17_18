<?php

include "modelo/subseccion.php";
include "vistas/vista_subsecciones.php";
include "contenedores/contenedor_subsecciones.php";

$contenedor1 = new ContenedorSubsecciones();


$subseccion1 = $contenedor1->getSubseccionBySeccion($seccion);
VistaSubsecciones::muestraSubsecciones($subseccion1);
