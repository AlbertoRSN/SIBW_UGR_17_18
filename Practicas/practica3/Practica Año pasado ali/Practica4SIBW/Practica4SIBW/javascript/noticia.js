var numero_comentarios = 2;
function Redirigir_FB(){
	window.open("https://www.facebook.com");
}

function Redirigir_TW(){
	window.open("https://www.twitter.com");
}

function Comentarios(){
	if(document.getElementById("formularios").style.display=="block"){
		document.getElementById("formularios").style.display="none";
		document.getElementById("noticiascol").style.display="block";
	}
	else if(document.getElementById("formularios").style.display=="none"){
		document.getElementById("formularios").style.display="block";
		document.getElementById("noticiascol").style.display="none";
	}
	else{
		document.getElementById("formularios").style.display="block";
		document.getElementById("noticiascol").style.display="none";
	}
}


 function Comentar(){
				
				var comentarioComentario=document.formulario.fcomentario.value ;
				var nombreComentario=document.formulario.fname.value ;
				var correoComentario=document.formulario.fcorreo.value ;
				var fechaActual = new Date();
				//extraemos el día mes y año 
				var dia = fechaActual.getDate();
				var mes = (fechaActual.getMonth()) + 1;
				var ano = fechaActual.getFullYear();
				var hora = fechaActual.getHours();
				var min = fechaActual.getMinutes();

				if(nombreComentario=="" || correoComentario=="" || comentarioComentario==""){
					alert("Completar formulario");
				}
				
				else{
				//escribimos la fecha en un formato legible 
				numero_comentarios += 1;
				var fechaComentario = dia + "/" + mes + "/" + ano + " | " + hora + ":" + min;
               
				var contenido1 = document.createTextNode(nombreComentario);
				var contenido2 = document.createTextNode(comentarioComentario);
				var contenido3 = document.createTextNode(correoComentario);
				var contenido4 = document.createTextNode(fechaComentario);
				var contenido5 = document.createTextNode(numero_comentarios);
				
               
				var midiv = document.createElement("div");
				var midiv2 = document.createElement("div");
				var midiv3 = document.createElement("div");
				var midiv4 = document.createElement("div");
				var midiv5 = document.createElement("div");

				midiv.setAttribute("class","comentario");
				midiv2.setAttribute("class", "nombre_comentario");
				midiv3.setAttribute("class", "numero_comentario");
				midiv4.setAttribute("class", "texto_comentario");
				midiv5.setAttribute("class", "correo_comentario");
				
				var nomb = document.createElement("p");
				var comen = document.createElement("p")
				var nume = document.createElement("p");
				var date = document.createElement("p");
				var correo = document.createElement("p");
               
               
				nomb.appendChild(contenido1);
				comen.appendChild(contenido2);
				correo.appendChild(contenido3);
				date.appendChild(contenido4);
				nume.appendChild(contenido5);
				
               
               
				midiv2.appendChild(nomb);
				midiv4.appendChild(comen);
				midiv5.appendChild(correo);
				midiv3.appendChild(nume);
				midiv.appendChild(midiv2);
				midiv.appendChild(midiv3);
				midiv.appendChild(midiv4);
				midiv.appendChild(midiv5);
				midiv.appendChild(date);
				
				document.getElementById("comentarios").appendChild(midiv);
				}
}

function PalabrasProhibidas(palabra) {    
           
          var palabras = palabra.value;
           palabras = palabras.replace(/\bpolla\b/gi,"*****");
           palabras = palabras.replace(/\bpito\b/gi,"****");
           palabras = palabras.replace(/\bpene\b/gi,"****");
           palabras = palabras.replace(/\bculo\b/gi,"****");
           palabras = palabras.replace(/\bcaca\b/gi,"****");
           palabras = palabras.replace(/\bhola\b/gi,"****");
           palabras = palabras.replace(/\bpis\b/gi,"***");
           palabras = palabras.replace(/\bpicha\b/gi,"*****");
           palabras = palabras.replace(/\bputa\b/gi,"****");
           palabras = palabras.replace(/\bputilla\b/gi,"*******");
           palabras = palabras.replace(/\bputon\b/gi,"*****");
           palabra.value = palabras;
}
	   
/*function Registrarse(correo, nombre, contrasenia){
	var mail=correo.value;
	var name=nombre.value;
	var login=contrasenia.value;
}
*/

/*function Rotacion(){
	var imagenes = new array("../imagenes/cocacolabanner.png","../imagenes/fb.png");
	var contador = 2;
	if (document.images){
		contador++;
	}
	if(contador == imagenes.length){
		contador = 0;
	}
	document.im   = imagenes[contador];
}*/
