<?php

//include "modelo/noticia.php";
//include "vistas/vista_noticias.php";
//include "contenedores/contenedor_noticias.php";

$contenedor = new ContenedorNoticias();
$contenedor2 = new ContenedorNoticias();

//poner otra variable noticia_principal=$contenedor->getNoticiaPrincipal()

$noticia_principal = $contenedor2->getNoticiaPrincipal();
VistaNoticias::muestraNoticiasPrincipal($noticia_principal);

$noticias = $contenedor->getAllNoticias();
VistaNoticias::muestraNoticias($noticias);

