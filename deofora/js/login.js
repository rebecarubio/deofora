

$(document).ready(function(){
     var outputData = [];
	$("#entrar").on("click", function(){

		var user = $("#user").val();
		var pass = $("#pass").val();
		var datos = [user, pass];
		var jsonData = JSON.stringify(datos);
		var outputData = [];
        
            if (user === "" || pass === ""){
                $("#user").css('border-color', '#ff1a1a');
                 $("#pass").css('border-color', '#ff1a1a');
                   
            }
            
            else if(user != "" || pass != ""){
                $("#user").css('border-color','#00ff00');
                 $("#pass").css('border-color','#00ff00');
            
            
            
		$.ajax({
	        type: "POST",
	        async: false,
	        url: "php/controller.php",
	        data: 'procedimiento=5&datos='+jsonData,
	        dataType: 'json',
	        success: function (dataSuccess) {
	            outputData = dataSuccess;
	        },
	        error: function (error){

	        }
                
	    });
}
	    if(outputData=="Error")
	    {
                
	    	$("#logError").html("Usuario y contraseña incorrectas.").css("color","red");
	    }
            else if(user=="" || pass=="")
            {
                $("#logError").html("Introduzca usuario y contraseña").css("color","red");
                
            }
	    else 
	    {
	    	localStorage.setItem('usuario', JSON.stringify(outputData));
                 $('.resp_reg').html('login correcto, entrando...');
                 $('.img_load_reg').html('<img src="images/loader.gif">');
                  setTimeout(function(){ location.reload(); }, 
                  3000);
                  alert("Bienvenido "+user);
                  window.location='index.php'; 
	    }

	});

});