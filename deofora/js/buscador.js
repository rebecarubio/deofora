/*
* @author: Rebeca Rubio
* @versio: 1.0
* @description: función de buscador interno dentro de la web. realizado a partir del plug-in DataTable de la biblioteca de JQUERY de Javascript.
* @date: 28/02/2017
*
*/


/*
Para realizar el buscador interno, primero debemos crear una tabla en nuestro HTML con las categorias que queremos que aparezcan en el buscador.
Nuestro link javascript con la función del buscador deberá ir al final de la tabla (justo antes de </body>) para que el navegador 
interprete el javascript después de cargar los elementos HTML. 

Las etiquetas <thead> y <tbody> son necesarias a la hora de elaborar la tabla para que funcione el plug-in.
La tabla tiene el atributo "display: none" para que sólo aparezca gracias al "fadeIn" cuando el usuario introduzca catacteres en el buscador.

Cuando el usuario clicka en el buscador (keyup) llamará a la función.
Recogeremos la información introducida por el ususario en el buscador en la variable consulta.

Para acabar hacemos el condicional a la función:
-si está vacío, no mostrará las categorias (hide)
-de los contrario la función mostrará a la tabla y aparecerán las categorias que coincidan con los caracteres introducidos en el buscador. 
*/
var consulta = $("#searchTable").DataTable();

$("#inputBusqueda").keyup(function(){
	consulta.search($(this).val()).draw();
	

	if ($("#inputBusqueda").val() == ""){
//		$("header").css({
//			"height": "auto",
//			"background": "none"
//		})

		$("#search").hide()

	} else {
		$("#search").fadeIn("fast");
	}
})