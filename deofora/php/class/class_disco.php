<?php

require_once "class_connect.php";

class Disco {

    private $id;
    private $nombre;
    private $imagen;
    private $precio;

    public function __construct($n, $i, $d) {
        $this->nombre = $n;
        $this->imagen = $i;
        $this->precio = $d;
    }

    public static function getRecent() {
        //Instancio conexión Base de datos
        $db = new connectDB();
        //Preparo la consulta
        $stmt = $db->prepare("SELECT * FROM discos");
        //Ejecuto la consulta
        $stmt->execute();
        //Obtengo el/los resultados de la consulta
        $discos = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $discos;
    }
    public static function getDiscoById($id)
    	{
    		$bd = new connectDB();
    		$stmt = $bd->prepare("SELECT * FROM discos WHERE id_disco=:idDisco");
    		$stmt->bindParam(':idDisco', $id);
    		$stmt->execute();
    		$result = $stmt->fetch(PDO::FETCH_ASSOC);
                
            $result["titulo"] = utf8_encode($result["titulo"]);
    		return $result;
        }

}
