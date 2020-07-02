<?php
	include_once '../config/Connect.php'; 
	/**
	 * 
	 */
	class phone_m extends Connect
	{
		
		function __construct()
		{
			parent::__construct(); // Luôn tồn tại $this->conn để kết nối tới csdl
		}

		public function get_Phone()
		{
			$sql = "SELECT *FROM phones";
			$query = mysqli_query($this->conn, $sql);
			$result = array();

			while ($row =  mysqli_fetch_array($query)) {
				$result[] = $row;
			}

			return $result;
		}

		public function get_Firm()
		{
			$sql = "SELECT *FROM firm";
			$query = mysqli_query($this->conn, $sql);
			$result = array();

			while ($row =  mysqli_fetch_array($query)) {
				$result[] = $row;
			}

			return $result;
		}

		public function get_Firm_ID($id)
		{
			$sql = "SELECT *FROM firm where Firm_id = $id";
			$query = mysqli_query($this->conn, $sql);
			$row = mysqli_fetch_array($query);
			return $row;
		}

		public function get_Memory()
		{
			$sql = "SELECT *FROM memory";
			$query = mysqli_query($this->conn, $sql);
			$result = array();

			while ($row =  mysqli_fetch_array($query)) {
				$result[] = $row;
			}

			return $result;
		}

		public function get_Color()
		{
			$sql = "SELECT *FROM color";
			$query = mysqli_query($this->conn, $sql);
			$result = array();

			while ($row =  mysqli_fetch_array($query)) {
				$result[] = $row;
			}

			return $result;
		}

		public function del_phone($id)
		{
			$sql1 = "DELETE FROM detail_phones WHERE Phone_id = $id";
			$query = mysqli_query($this->conn, $sql1);
			$sql = "DELETE FROM phones WHERE Phone_id = $id";
			$query = mysqli_query($this->conn, $sql);
		}

		public function getphone_id($id)
		{
			$sql = "SELECT *FROM phones where Phone_id = $id";
			$query = mysqli_query($this->conn, $sql);
			$result = mysqli_fetch_array($query);
			return $result;
		}

		public function detail_phone($id)
		{
			$sql = "SELECT * FROM detail_phones WHERE Phone_id = $id";
			$query = mysqli_query($this->conn, $sql);
			$row = mysqli_fetch_array($query);
			return $row;
		}

		public function del_firm($id)
		{
			$sql = "DELETE FROM phones WHERE Firm_id = $id";
			$query = mysqli_query($this->conn, $sql);
			$sql1 = "DELETE FROM firm WHERE Firm_id = $id";
			$query = mysqli_query($this->conn, $sql1);
		}

		public function addFirm($name, $b)
		{
			$sql = "INSERT INTO firm(Firm_name, logo) values('$name', '$b')";
			$query = mysqli_query($this->conn, $sql);
			if ($query) {
				return 1;
			}
			else{
				return 0;
			}
		}

		public function getUSER($username,$password)
		{
		 $sql="SELECT * FROM user WHERE "."Email = '$username' and password = '$password' ";
		$result = mysqli_query($this->conn, $sql) or die(mysqli_error($this->conn));
        $data = [];
        if ($result) {
            while ($num = mysqli_fetch_assoc($result)) {
                $data[] = $num;
            }
        }
        return $data;
		}
	}

	
?>