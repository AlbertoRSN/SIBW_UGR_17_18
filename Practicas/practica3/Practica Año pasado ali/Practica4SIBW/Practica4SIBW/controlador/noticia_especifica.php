<?php

//include "modelo/noticia.php";
//include "vistas/vista_noticias.php";
//include "contenedores/contenedor_noticias.php";

$contenedor = new ContenedorNoticias();


$noticias = $contenedor->getNoticiasByIndice($seccion);
VistaNoticias::muestraNoticiasEspecificas($noticias);