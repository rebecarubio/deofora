/*
* @author: Rebeca Rubio
* @versio: 1.0
* @description: función de validación del formulario de contacto.
* @date: 28/02/2017
*
*/


/*La función fValida tiene 3 campos para validar (nombre, email y mensaje), pues son obligatorios.
 * Mientras cualquiera de estos campos estén vacíos, el borde del formulario será rojo.
 * En cambio, cuando el usuario introduzca los campos, el borde será verde y saldrá un mensaje de alert como "mensaje enviado". 
 * 
 * */
 

function fValida(){
	var oblig = document.getElementsByClassName("oblig");
	for(var i=0; i<oblig.length; i++){
		if (oblig[i].value==""){
		 	oblig[i].style.border="1px solid red";
                        
		}else{
			oblig[i].style.border="1px solid green";
                        alert("Tu mensaje ha sido enviado");
                        
		}
	}
}
