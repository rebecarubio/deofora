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
        <script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
        <script src="js/jquery.dataTables.min.js" type="text/javascript"></script>
        <link href="css/buscador.css" rel="stylesheet" type="text/css"/>
        <script src="js/registro.js" type="text/javascript"></script>
        <link href="css/registro.css" rel="stylesheet" type="text/css"/>
        
        
    
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
                            </h5>
                        </nav>
                    
                  
                    
                        <div class="header-top">
			<div class="navegacion">
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
                    <div class="social">
                        <a href="formulario.php"> <img class="media" src="images/carrito.jpg" alt=""/></a>
                        <a href="#"><img class="media" src="images/Social/FB-Icon1.png" alt=""/></a>
                        <a href="https://deofora.bandcamp.com/" target="_blank"><img class="media" src="images/Social/bandcamp1-300x300.png" alt=""/></a>
                        <a href="https://www.instagram.com/de.o.fora/" target="_blank"><img class="media" src="images/Social/instagram.png" alt=""/></a>
                        <a href="#"><img class="media" src="images/Social/spotify_icon-icons.com_62652.png" alt=""/></a>
                        <a href="#"> <img class="media" src="images/Social/youtube-logotipo_318-65152.jpg" alt=""/></a>
                    </div> 
                   
                </div>
                    
            </div>
        
        </header>            
        <main id="cuerporeg">
          <div id="registro" >
                <h2 id="creacuenta">Regístrate</h2>
                <input type="text" class="login_input" name="reg_nombre" id="reg_nombre" placeholder="Usuario" required>
                
                <input type="email" class="login_input" name="reg_email"  id="reg_email" placeholder="Correo Electronico" required>
                
                <input type="text" class="login_input" name="reg_pass" id="reg_pass" placeholder="Contraseña" required>

                <input type="button" class="login_button" name="login_registro" id="login_registro"  value="Registrarse"><br><br>
                
                <input type="button" id="entrar" value="Ya tengo una cuenta" onclick="location.href='formulario.php';">
                
                <p class="resp_reg"></p>
                <p class="img_load_reg"></p>
                
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
