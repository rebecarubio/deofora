$(document).ready(function(){
       var loc = new URL(location.href).searchParams.get("id");
       var outputData= [];
	
	 $.ajax({
        type: "POST",
        async: false,
        url: "php/controller.php",
        data: 'procedimiento=4&id='+loc,
        dataType: 'json',
        success: function (dataSuccess) {
            outputData = dataSuccess;
        },
        error: function (error){

        }
    });
    
    
	 var divContent= "<img id='portadagrande'  src='images/Portadas_LPs/"+outputData["imagen"]+"'>";
         divContent+= "<div id='discoA' >";
	  divContent+= "<p id='artistadisco'>"+outputData["artista"]+"</p>";
	  divContent+= "<h1 id='titulosdisco'>"+outputData["titulo"]+"</h1>";
          divContent+= "<p id='descripciondisco'>"+outputData["descripcion"]+"<p>";
           divContent+= "<p id='preciodisco'>"+outputData["precio"]+" euros<p>";
          divContent+= "<a id='compra'>COMPRAR<img id='carrito' src='images/carrito.jpg'></a>";
          divContent+= "<a id='back' href='catalogo.php'>"+'Volver al Catálogo'+"</a>";
          divContent+="</div>";

	  $("div#content").html(divContent);
          
          
          
          $("#compra").click(function(){
             var divContent= "<img  class='comprafinal' src='images/Portadas_LPs/"+outputData["imagen"]+"'>";
             divContent+="<p id='compraadd'>Añadido a tu cesta</p>";
         divContent+= "<div class='comprafinaltexto'>";
	  divContent+= "<p >"+outputData["artista"]+"</p>";
	  divContent+= "<h1 >"+outputData["titulo"]+"</h1>";
          
           divContent+= "<p >"+outputData["precio"]+" euros<p>";
            divContent+="</div>";
        
            $("#new").toggleClass('show');
            $("#new").html(divContent);
            $("#carritocompra").css({border: "red 2px solid"});

        
     
    });
});
