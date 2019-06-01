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
        <link href="css/formulario.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
        <script src="js/jquery.dataTables.min.js" type="text/javascript"></script>
        <link href="css/buscador.css" rel="stylesheet" type="text/css"/>
        <script src="js/contacto.js" type="text/javascript"></script>
        
        
    
    </head>
    
    <body>
        
        <header>
            <div class="container">
                <div class="cajacentro">   
                    <div id="contenedor_logo">
                        <a id="linklogo" href="index.php">
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
                    
                  
                    
                        <div class="header-top">
                               <div class="social">
                        <a href="formulario.php"> <img class="media" src="images/carrito.jpg" alt=""/></a>
                        <a href="array.html"><img class="media" src="images/Social/FB-Icon1.png" alt=""/></a>
                        <a href="https://deofora.bandcamp.com/" target="_blank"><img class="media" src="images/Social/bandcamp1-300x300.png" alt=""/></a>
                        <a href="https://www.instagram.com/de.o.fora/" target="_blank"><img class="media" src="images/Social/instagram.png" alt=""/></a>
                            <a href="#"><img class="media" src="images/Social/spotify_icon-icons.com_62652.png" alt=""/></a>
                            <a href="#"> <img class="media" src="images/Social/youtube-logotipo_318-65152.jpg" alt=""/></a>
                    </div> 
			<div id="navegacion">
                        <input type="search" placeholder="Buscar . . ." id="inputBusqueda">
                        
			
		
		<div class="search" id="search">
			<table class="search-table" id="searchTable">
                           
                    <thead>
					<tr>
						<td></td>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><a href="vertigo.html">vertigo</a></td>
                               
					</tr>
					<tr>
						<td><a href="crosta.html">crosta</a></td>
					</tr>
					<tr>
						<td><a href="catalogo.html">catalogo</a></td>
					</tr>
					<tr>
						<td><a href="formulario.html">Contacto</a></td>
					</tr>
					<tr>
						<td><a href="#">Rakta</a></td>
					</tr>
					<tr>
						<td><a href="#">Mentira</a></td>
					</tr>
					<tr>
						<td><a href="#">Buraco Negro</a></td>
					</tr>
					
				</tbody>
                            </table>
                    </div>
                <script src="buscador.js" type="text/javascript"></script> 
                </div>
                            </div>
                 
                   
                </div>
                    
            </div>
        
                    
            
        </header>  
        <main>
            <div class="containerbody">
                <div class="containercolumnas">
                    <div class="columna1">
                     <div class="containercrosta">
                      <img src="images/Portadas_LPs/CrostaLP.jpg"  class="crostaLP">
                            <a href="CROSTA.php" class="overlay">
                                <div class="text">Crosta <p>Refugis 7'' EP</p></div>
                            </a>
                    </div>
                        <div class="containerplaylist">
                         <iframe id="playlist" src="https://open.spotify.com/embed?uri=spotify:track:3NqO03dSnLkkf1JBWqD1uN" width="300" height="380" frameborder="0" allowtransparency="true"></iframe>
                        </div>
                        
                        <div class="raktadisco">
                            <img class="imagenraktadisco" src="images/Portadas_LPs/raktadisco.jpg" alt=""/>
                        </div>
  
                </div>
                <div class="columna2">
                     <div class="Novedad1">
                        <a class="vertigo">
                             <img class="vertigoLP" src="images/Portadas_LPs/VertigoLP.jpg" alt=""/>
                         </a>
                   
                        <a href="vertigo.php" class="overlaynovedad1">
                            <div class="novedad-header">Vértigo<p>Vínculos 12'' LP</p></div>
                        </a>
                    </div>
                    
                    <div class="buraco">
                        <a class="buracolink">
                            <img class="buracotape" src="images/Portadas_LPs/buraco.jpg" alt=""/>
                        </a> 
                        <a href="detalle.php?id=8" class="overlayburaco">
                            <div class="novedad-buraco">Buraco Negro<p>Devastação k7</p></div>
                        </a>
                    </div>
                    
                </div>
                <div class="columna3">
                     <div class="Novedad3">
                        <img class="mentiraEP" src="images/Portadas_LPs/mentiraEP.jpg" alt=""/>
                         <a href="#" class="mentiraoverlay">
                             <div class="texto3">Mentira<p>Autointitulado 7'' EP</p></div>
                         </a>
                     </div>
                    <div class="raktaportada">
                        <img class="raktaEP" src="images/Portadas_LPs/raktaEP.jpg" alt=""/>
                    </div>
                    
                    <div class="raktaelemento">
                        <img class="rakta3" src="images/Portadas_LPs/rakta3.jpg" alt=""/>
                    </div>
                    
                </div>
                <div class="columna4">    
                   <iframe id="videorakta" src="https://www.youtube-nocookie.com/embed/_avWPNVFNHE?rel=0&amp;showinfo=0" frameborder="0"  allowfullscreen></iframe>
                   <a href="http://calaveracamisetasparapunks.tictail.com/" target="_blank"><img class="laura" src="images/Portadas_LPs/laura.jpg" alt=""/>
                   </a>
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
        <script src="buscador.js" type="text/javascript"></script>
    </body>
</html>
