<?php
	
$conn = ConnectionDB();

include ('Modelo/Obra.php');
include ('Vistas/vista_obras.php');
include ('Modelo/contenedores/contenedor_obras.php');



//include ('Modelo/PagInfo.php');
//include ('Vistas/vista_pagsinfo.php');
//include ('Modelo/contenedores/contenedor_paginfo.php');

			$ob='nada';
			$pg='0';
			$colec='0';

			//aqui va el $_GeT a la base de datos, los $id son variables globales por lo que los ficheros include los conocen
			if (isset($_GET['obra']))
            	$ob = $_GET['obra'];
			else if (isset($_GET['pag_inf']))
           	 	$pg = $_GET['pag_inf'];
			else if(isset($_GET['coleccion']))
				$colec = $_GET['coleccion'];


			if (isset($_POST['obra']))
            	$ob = $_POST['obra'];
			else if (isset($_POST['pag_inf']))
           	 	$pg = $_POST['pag_inf'];
			else if(isset($_POST['coleccion']))
				$colec = $_POST['coleccion'];

if($pg=='0' && $ob=='nada'){	//estamosen la portada pg=0 es la pg de inicio
	
	//Modelo 

	$contenedor1 = new ContenedorObras();
	$obras = $contenedor1->getAllObras();

	//Vistas
	VistaObras::muestraObras($obras);
}

if($pg != '0'){ //Si la pagina no es la de inicio 

	//Modelo
	$contetedor2 = new ContenedorPagInfo();
	$nombre_pag= $contetedor2->getNombrePagByIndice($pg);

	//COMPARAMOS SI ES LA PAGINA COLECCIONES QUE SE MUESTREN LAS COLECCIONES EN VENTANA EMERGENTE
	//...
	if($nombre_pag != 'Colecciones' ){
		//Modelo
		$pag_info_especif = $contetedor2->getPagInfoByIndice($pg);//devuelve una pagina entera
		//Vistas
		VistaPagsInfo::muestraPagEspecifica($pag_info_especif);
	}
	else {
		//Modelo

		include ('Modelo/contenedores/contenedor_colecciones.php');
		$contetedor3 = new ContenedorColecciones();
		$colecciones = $contetedor3->getAllColecciones();
		//Vistas
		VistaPagsInfo::muestraColecciones($colecciones);	//AQUI HABRIA QUE HAVER UNA VENTANA EMERGENTE MEJOR QUE MUESTRE LAS COELLECIONES QUE HAYA Y SISE PULSA ENTONCES SALDRÁN LAS COLECCIONES CON SUS OBRAS.
	}

}




//SI SE PULSA EN LAS OBRAS SE MOSTRARA CADA OBRA...
if($ob!='0'){ //Si la pagina no es la de inicio 

	//Modelo
	$contenedor4 = new ContenedorObras();
	$obra_especifica = $contenedor4->getObraByIndice($ob);

	//Vistas
	VistaObras::muestraObraDeseada($obra_especifica);

}

?>


