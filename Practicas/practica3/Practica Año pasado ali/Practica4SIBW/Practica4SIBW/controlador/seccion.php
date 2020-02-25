<?php

//include "modelo/noticia.php";
//include "vistas/vista_noticias.php";
//include "contenedores/contenedor_noticias.php";

$contenedor = new ContenedorNoticias();
  

$noticias = $contenedor->getNoticiasBySeccion($seccion);
   
VistaNoticias::muestraNoticias($noticias);
   








