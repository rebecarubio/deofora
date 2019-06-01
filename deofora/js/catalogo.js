$(document).ready(function () {
    var outputData = [];
    //var desde = 4;
    $.ajax({
        type: "POST",
        async: false,
        url: "php/controller.php",
        data: 'procedimiento=1',
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
        divContent+="<a style='text-decoration:none' href='detalle.php?id="+outputData[i]["id_disco"]+"'>";
        divContent+="<div>";
        divContent+="<div class='item' style='background-image: url(images/Portadas_LPs/"+outputData[i]["imagen"]+")'></div>";
         divContent+="<h2 class='titulo'>"+outputData[i]["artista"]+"</h2>";
        divContent+="<p class='info'>"+outputData[i]["titulo"]+"</p>";
        divContent+="<p class='info'>"+outputData[i]["precio"]+"</p>";
        divContent+="<p class='info'>"+outputData[i]["formato"]+"</p>";
         divContent+="<img src='images/carrito.jpg' class='info' id='carrito'></div>";
        divContent+="</div>";
        divContent+="</a>";
    }

     $("main").html(divContent);
     $("main").attr("id","principal");



});