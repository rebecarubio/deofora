<?php
    session_start();
    
    if(isset($_SESSION["usuario"]))
    {
        $nombre= $_SESSION["usuario"]["nombre"];
    }
?>
<html>
    <head>
        <title>Dê o Fora!</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link href="css/normalize.css" rel="stylesheet" type="text/css"/>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <link href="css/catalogo.css" rel="stylesheet" type="text/css"/>
         <link href="css/formulario.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>  
        <header>
            <div class="container">
                <div class="cajacentro">   
                    <div id="contenedor_logo">
                        <a id="linklogo" href="index.php" >
                            <img class="gift" src="images/logo.jpg" alt=""/>
                          
                        </a>
                    </div>
                   
                        <nav class="menu">
                            <ul class="menulista">
                                <li><a class= "menulinks" href="catalogo.php">CATÁLOGO</a></li>
                                <li><a class= "menulinks" href="artista.php">ARTISTAS</a></li>
                                <li><a class= "menulinks" href="#">NOVEDADES</a></li>

                             </ul>
                             <?php
                                if (! empty($_SESSION["usuario"]["nombre"]))
                                    {
                                
                                    
                                    echo '<h5 id="bienvenido">Bienvenido/a:' .$nombre .' <br>
                                
                                <a id="cierresesion" href="cerrar_sesion.php">Cerrar Sesión</a></h5>';
                               
                                } 
                                
                                ?>
                        </nav>
                     <div class="social">
                        
                        <a href="formulario.php"> <img class="media" src="images/carrito.jpg" alt=""/></a>
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
                        <iframe style="border: 0; width: 350px; height: 680px;" src="https://bandcamp.com/EmbeddedPlayer/album=2343503026/size=large/bgcol=ffffff/linkcol=333333/track=2819361958/transparent=true/" seamless><a href="http://deofora.bandcamp.com/album/v-rtigo-v-nculos-12-lp-dof009">Vértigo - Vínculos 12&#39;&#39; LP - DOF009 by Vértigo</a></iframe>
                    </div>
                    <div class="item2">
                        <img id="logover" src="images/artista vertigo/logo.png" alt=""/>
                        <ul class="menucompravertigo">
                            <li><div id="infovertigo">VÉRTIGO</div></li>
                            <li><div id="infovertigo2">Vínculos 12" LP - 10€</div></li>
                            <li><div><a href="#" id="linkcompravertigo">Comprar</a></div></li>
                        </ul> 
                        <div class="otrosdiscos">
                            <img id="tapevertigo" src="images/artista vertigo/tapevertigo.jpg" alt=""/>
                            <img id="vertigo2" src="images/artista vertigo/vertigo2.jpg" alt=""/>
                            
                        </div>
                    </div>
                    
                    <div class="item3">
                         <img id="grupofoto" src="images/artista vertigo/vertigogrupofoto.jpg" alt=""/>
                         <p id="infovertigotexto"> Vértigo, grupo barcelonés que mezcla las experiencias de personas de otros rincones del mundo, donde reflejan los sentimiento de como es vivir en esta ciudad bajonera que es Barcelona en su música. 

                            Vértigo nos encanta con su sonido crudo, apasionado y que a veces, sonará hasta romántico. De las vísceras escuchamos sus cantos que emergen nuestros pulsos hacía nuevas posibilidades. No hay cómo no identificarse. 

                            Grabado en el Sonic Riot Studio. 
                            Grabado, mezclado y masterizado por Paco Delgado. 
                            Diseño de portada y contraportada por Patri. 
                            Insert por Vértigo.</p>
                        </div>  
                </div>
            </div>
        </main>   
        <footer>
            <div class="informacion">
                <div class="final">
                    <div class="textofooter">Dê o Fora! 2018 © |<a class="inputs_footer" href="contacto.php">Contacto</a> | Aviso legal | Ayuda | Política de cookies | Enlaces
                        
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>
