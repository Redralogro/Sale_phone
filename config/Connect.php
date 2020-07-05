<?php  
	
	class Connect
	{
		private $localhost = "localhost:3307";
		private $user = "root";
		private $pass = "";
		private $db = "phone";	
		protected $conn = null;
		
		function __construct()
		{
			$this->conn = mysqli_connect($this->localhost, $this->user, $this->pass, $this->db) or die("Can't connect db!");

			if ($this->conn) {
				mysqli_set_charset($this->conn, 'utf8');
			}else{
				exit();
			}
		}
	}


?>