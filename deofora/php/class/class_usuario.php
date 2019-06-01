<?php
        require_once "class_connect.php";
	
        class user
	{
		private $i;
		private $nombre;
		private $pass;
		private $mail;

		public function __construct($no, $pa)
		{
			$this->nombre = $no;
			$this->pass = $pa;
		}

		public function entrar()
		{
			$bd = new connectDB();
			$passMD5 = md5($this->pass);
			$stmt = $bd->prepare("SELECT * FROM `usuario` WHERE nombre=:nomUser AND password=:passUser");
			$stmt->bindParam(':nomUser', $this->nombre);
			$stmt->bindParam(':passUser', $passMD5);
			$stmt->execute();
			$usuario = $stmt->fetch(PDO::FETCH_ASSOC);
			if($usuario===false)
			{
				return "Error";
			}
			else
			{
				$_SESSION["usuario"] = $usuario;
				return $usuario;
                                
			}
		}
	}

?>
