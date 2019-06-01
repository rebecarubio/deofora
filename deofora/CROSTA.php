<?php
    session_start();
    
    $nombre=$_SESSION["usuario"]["nombre"];
?>
<html>
    <head>
        <title>Dê o Fora!</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link href="css/normalize.css" rel="stylesheet" type="text/css"/>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <link href="css/crosta.css" rel="stylesheet" type="text/css"/>
        <link href="css/catalogo.css" rel="stylesheet" type="text/css"/>
         <link href="css/formulario.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>  
        <header>
            <div class="container">
                <div class="cajacentro">   
                    <div id="contenedor_logo">
                        <a id="linklogo" href= "index.html" >
                            <img class="gift" src="images/logo.jpg" alt=""/>
                           
                        </a>
                    </div>
                   
                        <nav class="menu">
                            <ul class="menulista">
                                <li><a class= "menulinks" href="catalogo.html">CATÁLOGO</a></li>
                                <li><a class= "menulinks" href="#">ARTISTAS</a></li>
                                <li><a class= "menulinks" href="#">NOVEDADES</a></li>

                             </ul>
                            <h5 id="bienvenido"><?php echo 'Bienvenid@: '.$nombre;?><br>
                                <a id="cierresesion" href="cerrar_sesion.php">Cerrar Sesión</a>
                            </h5>
                        </nav>
                     <div class="social">
                        
                        <a href="formulario.html"> <img class="media" src="images/carrito.jpg" alt=""/></a>
                        <a href="#"><img class="media" src="images/Social/FB-Icon1.png" alt=""/></a>
                        <a href="https://deofora.bandcamp.com/" target="_blank"><img class="media" src="images/Social/bandcamp1-300x300.png" alt=""/></a>
                        <a href="https://www.instagram.com/de.o.fora/" target="_blank"><img class="media" src="images/Social/instagram.png" alt=""/></a>
                            <a href="#"><img class="media" src="images/Social/spotify_icon-icons.com_62652.png" alt=""/></a>
                            <a href="#"> <img class="media" src="images/Social/youtube-logotipo_318-65152.jpg" alt=""/></a>
                    </div> 
             </header>    
        <main>
            <div class="containerbody">
                <div class="containercolumnas">
                    <div class="item1">
                    <iframe style="border: 0; width: 350px; height: 555px;" src="https://bandcamp.com/EmbeddedPlayer/album=595939776/size=large/bgcol=ffffff/linkcol=0687f5/transparent=true/" seamless><a href="http://deofora.bandcamp.com/album/crosta-refugis-7-ep-dof007">Crosta - Refugis 7&#39;&#39; EP - DOF007 by Crosta</a></iframe>
                    </div>
                    <div class="item2">
                        <img id="logocrosta" src="images/artista crosta/crosta_title.png" alt=""/>
                        <ul class="menucompravertigo">
                            <li><div id="infovertigo">CROSTA</div></li>
                            <li><div id="infovertigo2">Refugis 7" EP - 5€</div></li>
                            <li><div><a href="#" id="linkcompravertigo">Comprar</a></div></li>
                        </ul> 
                        <div class="otrosdiscos">
                            <img id="crosta1" src="images/artista crosta/crosta-siguem-sincers-siguem-humils.jpg" alt=""/>
                            <img id="crosta2" src="images/artista crosta/crosta_nusalagola_LP.jpg" alt=""/>
                        </div>
                    </div>
                    
                    <div class="item3">
                        <img id="grupofoto" src="images/artista crosta/01.jpg" alt=""/>
                         <p id="infovertigotexto"> Crosta nos ha regalado el privilegio de editar sus últimas grabaciones realizadas en 2013 al tiempo que la banda se despedía. Parecía que una manera de entender el punk, sin soberbia pero cargada de convicción y honestidad, con tanta sencillez como fuerza, se marchaba con ellas. Cuatro años han pasado desde entonces y sin embargo tenemos la absoluta certeza de que sus palabras y sonidos son de máxima actualidad. Todo acaba, sí, pero «en un segundo todo puede cambiar». Gracias.</p>
                        </div>  
                </div>
            </div>
        </main>   
        <footer>
            <div class="informacion">
                <div class="final">
                    <div class="textofooter">Dê o Fora! 2018 © |<a class="inputs_footer" href="contacto.html">Contacto</a> | Aviso legal | Ayuda | Política de cookies | Enlaces
                        
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>
