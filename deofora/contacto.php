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
         <link href="css/contacto.css" rel="stylesheet" type="text/css"/>
         <script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
         <script src="js/contacto.js" type="text/javascript"></script>
         
    </head>
    <body>  
        <header>
            <div class="container">
                <div class="cajacentro">   
                    <div id="contenedor_logo">
                        <a id="linklogo" href= "index.php">
                            <img class="gift" src="images/logo.jpg" alt=""/>
                        </a>
                    </div>
                   
                        <nav class="menu">
                            <ul class="menulista">
                                <li><a class= "menulinks" href="catalogo.php">CATÁLOGO</a></li>
                                <li><a class= "menulinks" href="artista.php">ARTISTAS</a></li>
                                <li><a class= "menulinks" href="#">NOVEDADES</a></li>

                             </ul>
                            <h5 id="bienvenido"><?php echo 'Bienvenid@: '.$nombre;?><br>
                                <a id="cierresesion" href="cerrar_sesion.php">Cerrar Sesión</a>
                            </h5>
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
            <section id="contact-form">
                <h2 id="titulocontacto" >ENVÍANOS UN E-MAIL</h2>
                <form id="contact" name="contact" accept-charset="utf-8">
                    <label><span></span><input class="oblig" name="name" type="text" placeholder="Nombre"/></label>
                    <label><span></span><input class="oblig" name="email" type="email" placeholder="Email"/></label>
                    <label><span></span><textarea class="oblig" name="message" placeholder="Mensaje"></textarea></label>
                    <label><span></span><input name="submit" type="button" value="Enviar" onclick="fValida()"/></label>
                </form>
                
            </section>
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
