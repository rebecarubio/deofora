<?php
    class connectDB extends PDO
	{
		private $dsn = "mysql:dbname=deofora;host=localhost";
		private $user = "root";
		private $pass = "";

		public function __construct()
		{
                    parent::__construct($this->dsn, $this->user, $this->pass);
                    parent::exec("SET CHARACTER SET utf8");
		}
	}
        
?>