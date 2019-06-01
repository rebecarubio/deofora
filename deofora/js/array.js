/*
* @author: Rebeca Rubio
* @versio: 1.0
* @description: en construcción. será una herramienta para generar contenido dinámico dentro del catálogo.
* @date: 28/02/2018
*
*/





var campos = []; //campos
var datos = [];
var posArray = 0;



function cargarCampos()
{
	var campo = "";
	do
	{
		campo = prompt("Introduzca la caracteris "+(posArray+1)+":");
		if(campo==""){break;}
		campos[posArray] = campo;
		posArray++;
	}
	while(campo!="")
}

function cargarDatos()
{
	var numProductos = prompt("Cuantos productos vas a introducir?");
	for(var i = 0; i<numProductos; i++)
	{
		datos[i] = [];
		for(var j = 0; j<campos.length; j++)
		{
			var dato = prompt(campos[j]+" del producto "+(i+1)+": ");
			datos[i][j] = dato;
		}
	}
}

function mostrarTabla()
{
	var divContent = "<table border='1' cellpadding='10'>";
	divContent+="<tr>";
	for(var i = 0; i<campos.length; i++)
	{
		divContent+="<th>"+campos[i]+"</th>";
	}
	divContent+="</tr>";

	for(var j = 0; j<datos.length; j++)
	{
		divContent+="<tr>";
		for(k = 0; k<datos[j].length; k++)
		{
			divContent+="<td>"+datos[j][k]+"</td>";
		}
		divContent+="</tr>";
	}

	divContent+="</table>";
	      document.getElementById('contenedorarray').innerHTML += (divContent);
  } 