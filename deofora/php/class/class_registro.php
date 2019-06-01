

<?php
require_once 'class_connect.php';
//session_start();
    
class registro{
        private $id;
        private $nombre;
        private $password;
        private $email;

        
        public function __construct($no, $pass, $em)
        {
            
            $this->nombre = $no;
            $this->password = $pass;
            $this->email = $em;
        }
        
        public function insertar()
		{
			$bd = new connectDB();
			$stmt = $bd->prepare("INSERT into `usuario` (`id_usuario`, `nombre`, `password`, `email`) VALUES (DEFAULT, :nombre, :password, :email);");
                        $stmt->bindParam(":nombre", $this->nombre);
   			$stmt->bindParam(":password", md5($this->password));
   			$stmt->bindParam(":email", $this->email);
		
                        if($stmt->execute())
			{
//                            $registro = $stmt->fetch(PDO::FETCH_ASSOC);
                                $registro = [
                                    "id_usuario" => $bd->lastInsertId(),
                                    "nombre" => $this->nombre,
                                    "password" => $this->password,
                                    "email" => $this->email
                                ];
                     
				return $registro;
			}
			else
			{
				return "Error";
			}
		}






}




