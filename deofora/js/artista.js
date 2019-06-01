$(document).ready(function () {
    var outputData = [];
    //var desde = 4;
    $.ajax({
        type: "POST",
        async: false,
        url: "php/controller.php",
        data: 'procedimiento=3',
        dataType: 'json',
        success: function (dataSuccess) {
             outputData = dataSuccess;
            
        },
        error: function (error) {

        }
    });

    var divContent = "";

    for(var i = 0; i<outputData.length; i++)
    {
        divContent+="<h2 class='tituloartista'>"+outputData[i]["nombre"]+"</h2>";
        divContent+="<div id='contenedor'>";
        divContent+="<div class='fotoartista' style='background-image: url(images/artistas/"+outputData[i]["foto"]+")'></div>";
        
        divContent+="<p class='infoartista'>"+outputData[i]["descripcion"]+"</p>";
        divContent+="<iframe class='video' style='width:420; height:315;' src="+outputData[i]["video"]+" frameborder='0' allow='autoplay; encrypted-media' allowfullscreen></iframe>";
   
        divContent+="</div>";
        
    }

     $("main").html(divContent);
     $("main").attr("id","principal");



});


