/*
* @author: Rebeca Rubio
* @versio: 1.0
* @description: función de registro para nuevo usuario y guardado en localStorage.
* @date: 28/02/2017
*
*/
		
var nombrereg;
var clavereg;

/*funcion guardar la contraseña en localStorage.
 * A partir de 2 variables cogemos los 2 valores de ususario y contraseña que introduzcan.
 * Si los campos están vacios, aparecerán mensajes para que el usuario lo rellene antes de guardar.
 * A través del "setItem" guardamos la información y aparece un mensaje de bienvenida con el nombre que ha introducido el usuario.
 * Una vez registrado, redirigimos al usuario a la página de inicio, porque en teoria está ya registrado.
*/

//function guardar() {
//
//    nombrereg = document.getElementById("reg_nombre").value;
//    clavereg = document.getElementById("reg_pass").value;
//    passreg = document.getElementById("reg_email").value;
//
//
//    if (nombrereg === "" || clavereg === "" || passreg === "") {
//        alert("Por favor, rellene los campos requeridos");
//
//    }
//
//}
        

   $(document).ready(function(){
     
	$("#login_registro").on("click", function(){

            var user = $("#reg_nombre").val();
            var pass = $("#reg_pass").val();    
            var mail = $("#reg_email").val();
            
            var datos = [user, pass, mail];
		var jsonData = JSON.stringify(datos);
		var outputData = [];
            
        if (user === "" || pass === "" || mail === "") {
            $('#reg_nombre').css('border-color','#ff1a1a');
            $('#reg_pass').css('border-color','#ff1a1a');
            $('#reg_email').css('border-color','#ff1a1a');
            alert("Por favor, rellene los campos requeridos");

        }
        else if(user != "" || pass != "" || mail != ""){
            $('#reg_nombre').css('border-color','#00ff00');
            $('#reg_pass').css('border-color','#00ff00');
            $('#reg_email').css('border-color','#00ff00');
		
            

        $.ajax({
            type: 'post', //tipo de método de envío
            url: 'php/controller.php', //pagina que va a enviar los datos
            data: 'procedimiento=2&datos='+jsonData, // Datos del ECHO del archivo que devuelve
            dataType: 'json',
            success: function (data) { //entra si la recepción de datos es correcta
                outputData= data;
                
                if (data === 'error') {
                    $('.resp_reg').html('reg incorrecto');
                    
              
                   
                } 
                
                
                else{
                    $('.resp_reg').html('reg correcto, entrando...');
                    $('.img_load_reg').html('<img src="images/loader.gif">');
                      setTimeout(function(){ window.location.replace("formulario.php");
; }, 2000);
                }
            },
            error: function () {
                $('.resp_reg').html('Error en la recepción de datos');
            }
            
        });
    }
    });
    
});