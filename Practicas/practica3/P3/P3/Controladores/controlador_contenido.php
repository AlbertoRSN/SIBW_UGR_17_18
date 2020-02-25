<?php
$conn = ConnectionDB();

include ('../Modelo/Obra.php');
include ('../vistas/vista_obras.php');
include ('../Modelo/contenedores/contenedor_obras.php');

$contenedor = new ContedorObras();
$obras = $contenedor->getAllObras();
VistaObrass::muestraObrasEspecificas($obras);