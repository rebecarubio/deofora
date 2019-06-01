<?php

require_once "class_connect.php";

class Artista {

    private $id;
    private $nombre;
    private $imagen;
    private $precio;

    public function __construct($n, $i, $d) {
        $this->nombre = $n;
        $this->imagen = $i;
        $this->precio = $d;
    }

    public static function getArtist() {
        //Instancio conexión Base de datos
        $db = new connectDB();
        //Preparo la consulta
        $stmt = $db->prepare("SELECT * FROM artista");
        //Ejecuto la consulta
        $stmt->execute();
        //Obtengo el/los resultados de la consulta
        $artista = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        return $artista;
    }
    public static function getArtistRecords() {
        //Instancio conexión Base de datos
        $db = new connectDB();
        //Preparo la consulta
        $stmt = $db->prepare("SELECT * FROM discos d, artista a WHERE d.artista_id=a.id_artista;");
        //Ejecuto la consulta
        $stmt->execute();
        //Obtengo el/los resultados de la consulta
        $artista = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        return $artista;
    }
}