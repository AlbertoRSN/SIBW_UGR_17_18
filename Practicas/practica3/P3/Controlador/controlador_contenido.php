<?php
$conn = ConnectionDB();

include ('Modelo/Obra.php');
include ('Vistas/vista_obras.php');
include ('Modelo/contenedores/contenedor_obras.php');

//Modelo 
$contenedor = new ContenedorObras();
$obras = $contenedor->getAllObras();

//Vistas
VistaObras::muestraObras($obras);

