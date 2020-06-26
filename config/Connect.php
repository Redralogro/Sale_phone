<?php  
	include_once '../autoload/autoload.php';
	class Connect
	{
		//private $localhost = $domain;
		private $user = "root";
		private $pass = "";
		private $db = "phone";	
		protected $conn = null;
		
		function __construct()
		{   global $domain;
			$local=$domain;
			$this->conn = mysqli_connect($local, $this->user, $this->pass, $this->db) or die("Can't connect db!");

			if ($this->conn) {
				mysqli_set_charset($this->conn, 'utf8');
			}else{
				exit();
			}
		}
	}


?>