<?php
    session_start();
    
    $nombre=$_SESSION["usuario"]["nombre"];
?>
<html>
    <head>

   
            <title>TODO supply a title</title>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="shortcut icon" href="data:image/x-icon;," type="image/x-icon"> 
            <script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
            <script src="js/jquery.dataTables.min.js" type="text/javascript"></script>
            <link href="css/buscador.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <header>
		<div class="header-top">
			<div class="navegacion">
                        <input type="search" placeholder="Buscar . . ." id="inputBusqueda">
			</div>
		</div>
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
						<td><a href="#">Contacto</a></td>
					</tr>
					<tr>
						<td><a href="#">Curso Html</a></td>
					</tr>
					<tr>
						<td><a href="#">Nuevo Articulo</a></td>
					</tr>
					<tr>
						<td><a href="#">Curso de CSS</a></td>
					</tr>
					<tr>
						<td><a href="#">Curso Javascript</a></td>
					</tr>
					<tr>
						<td><a href="#">Curso Jquery</a></td>
					</tr>
					<tr>
						<td><a href="#">Curso Ajax</a></td>
					</tr>
					<tr>
						<td><a href="#">Curso PHP</a></td>
					</tr>
					<tr>
						<td><a href="#">Curso Angular Js</a></td>
					</tr>
					<tr>
						<td><a href="#">Curso Angular 2</a></td>
					</tr>
					<tr>
						<td><a href="#">Mas cursos</a></td>
					</tr>
					<tr>
						<td><a href="#">Noticias</a></td>
					</tr>
				</tbody>
                            </table>
                
            </div>
        </header>
        <script src="buscador.js" type="text/javascript"></script>
        </body>
</html>
