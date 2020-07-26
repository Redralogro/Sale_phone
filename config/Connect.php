<?php  
	include_once __DIR__.'/../autoload/autoload.php';
	class Connect
	{
		private $localhost = "localhost";
		private $user = "root";
		private $pass = "";
		private $db = "phone";	
		protected $conn = null;
		
		function __construct()
		{   global $domain;
			$this->conn = mysqli_connect($domain, $this->user, $this->pass, $this->db) or die("Can't connect db!");

			if ($this->conn) {
				mysqli_set_charset($this->conn, 'utf8');
			}else{
				exit();
			}
		}
	}


?>