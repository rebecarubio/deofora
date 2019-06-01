<?php
session_start();
	require_once "class/class_disco.php";
	require_once "class/class_usuario.php";
        require_once "class/class_registro.php";
        require_once "class/class_artista.php";


if (!isset($_POST["procedimiento"]) && !isset($_POST["enviarImagen"])) {
    header("location:../index.php");
} else {
    $proc = 0;
    if (isset($_POST["procedimiento"]))
        $proc = $_POST["procedimiento"];

    switch (true) {
        case $proc == '1':
            $discos = Disco::getRecent();
            echo json_encode($discos);
            
            break;
        
        case $proc=='2':
            $datos = json_decode($_POST["datos"]);
            $registro = new registro($datos[0], $datos[1], $datos[2]);
            $new= $registro->insertar();
            echo json_encode($new);
                
				break;
            
        case $proc == '3':
            $artista = Artista::getArtist();
            echo json_encode($artista);
            
            break;
        
        case $proc=='4':
		$id = $_POST["id"];
		$videogame = Disco::getDiscoById($id);
		echo json_encode($videogame);
		break;
        
            case $proc=='5':
		$datos = json_decode($_POST["datos"]);
		$usuario = new user($datos[0], $datos[1]);
                $login= $usuario->entrar();
		echo json_encode($login);
                
				break;

        default:
            echo json_encode("Error");
            break;
    }
}
