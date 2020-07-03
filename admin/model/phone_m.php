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

		public function getphone_id($id)
		{
			$sql = "SELECT *FROM phones where Phone_id = $id";
			$query = mysqli_query($this->conn, $sql);
			$result = mysqli_fetch_array($query);
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
			if($query){
				return '1';
			}else{
				return '0';
			}
		}

		public function addPhone($Name, $Price, $Color_id, $Image, $Memory_id, $Firm_id)
		{
			$sql = "INSERT INTO phones(Name, Price, Color_id, Image, Memory_id, Firm_id) values('$Name', '$Price', '$Color_id', '$Image', '$Memory_id', '$Firm_id')";
			$query = mysqli_query($this->conn, $sql);
			if ($query) {
				$last_id = mysqli_insert_id($this->conn);
				$sql1 = "INSERT INTO detail_phones(Phone_id) values($last_id);";
				$query1 = mysqli_query($this->conn, $sql1);
				if ($query1) {
					return 1;
				}else{
					return 0;
				}
			}
			
		}

		public function editPhone($id, $Name, $Price, $Color_id, $Image, $Memory_id, $Firm_id)
		{
			$sql = "UPDATE phones SET 
											Name = '$Name',
											Price = '$Price',
											Color_id = $Color_id, 
											Image = '$Image', 
											Memory_id = $Memory_id, 
											Firm_id = $Firm_id
											WHERE Phone_id = $id";
			$query = mysqli_query($this->conn, $sql);
			if($query){
				return '1';
			}else{
				return '0';
			}
			
		}

		

		public function detail_phone($id)
		{
			$sql = "SELECT * FROM detail_phones WHERE Phone_id = $id";
			$query = mysqli_query($this->conn, $sql);
			$row = mysqli_fetch_array($query);
			return $row;
		}

		//Đếm số hàng trả ra
		public function detail_phone_rows($id)
		{
			$sql = "SELECT * FROM detail_phones WHERE Phone_id = $id";
			$query = mysqli_query($this->conn, $sql);
			$r = mysqli_num_rows($query);
			return $r;
		}

		public function Update_detailPhone($id, $Description, $Quatity,$Size,$Weight,$Os,$Cpu_speed,$Camera_primary,$Bettery,$Warranty,$Bluetooth,$Wlan,$Promotion_price)
		{
			$sql = "UPDATE detail_phones set 
										Description = '$Description', 
										Quatity = $Quatity,
										Size = '$Size',
										Weight = '$Weight',
										Os = '$Os',
										Cpu_speed = '$Cpu_speed',
										Camera_primary = '$Camera_primary',
										Bettery = '$Bettery',
										Warranty = '$Warranty',
										Bluetooth = '$Bluetooth',
										Wlan = '$Wlan',
										Promotion_price = '$Promotion_price'
										WHERE Phone_id = $id";
			$query = mysqli_query($this->conn, $sql);
			if($query){
				return '1';
			}else{
				return '0';
			}
			
			
		}

		public function del_detailphone($id)
		{
			$sql = "DELETE FROM detail_phones WHERE Phone_id = $id";
			$query = mysqli_query($this->conn, $sql);
		}

		public function del_firm($id)
		{
			$sql = "DELETE FROM phones WHERE Firm_id = $id";
			$query = mysqli_query($this->conn, $sql);
			$sql1 = "DELETE FROM firm WHERE Firm_id = $id";
			$query = mysqli_query($this->conn, $sql1);
			if ($query) {
				return 1;
			}
			else{
				return 0;
			}
		}

		public function addFirm($name, $img)
		{
			$sql = "INSERT INTO firm(Firm_name, logo) values('$name', '$img')";
			$query = mysqli_query($this->conn, $sql);
			if ($query) {
				return 1;
			}
			else{
				return 0;
			}
		}

		public function editFirm($id, $Firm_name,$logo)
		{
			$sql = "UPDATE firm set Firm_name = '$Firm_name', logo = '$logo' where Firm_id = $id";
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

		public function get_order()
		{
        	$sql = "SELECT *FROM order_phone";
			$query = mysqli_query($this->conn, $sql);
			$result = array();

			while ($row =  mysqli_fetch_array($query)) {
				$result[] = $row;
			}

			return $result;
		}

		public function get_order_id($id)
		{
        	$sql = "SELECT *FROM order_phone where Order_id = $id";
			$query = mysqli_query($this->conn, $sql);
			$row = mysqli_fetch_array($query);
			return $row;

		}

		public function get_order_detail_id($id)
		{
			$sql = "SELECT *FROM order_detail where Order_detail_id = $id";
			$query = mysqli_query($this->conn, $sql);
			$row = mysqli_fetch_array($query);
			return $row;
		}

		public function get_Customer()
		{
			
        	$sql = "SELECT *FROM customer";
			$query = mysqli_query($this->conn, $sql);
			$result = array();

			while ($row =  mysqli_fetch_array($query)) {
				$result[] = $row;
			}

			return $result;
		}

		public function get_deliverer()
		{
			
        	$sql = "SELECT *FROM deliverer";
			$query = mysqli_query($this->conn, $sql);
			$result = array();

			while ($row =  mysqli_fetch_array($query)) {
				$result[] = $row;
			}

			return $result;

		}

		public function get_status()
		{
			
        	$sql = "SELECT *FROM status";
			$query = mysqli_query($this->conn, $sql);
			$result = array();

			while ($row =  mysqli_fetch_array($query)) {
				$result[] = $row;
			}

			return $result;
		}


		public function ComfirmOrder($id, $id_status)
		{
			$sql = "UPDATE order_phone set Status_id = $id_status where Order_id = $id";
			$query = mysqli_query($this->conn, $sql);
			if ($query) {
				return 1;
			}else{
				return 0;
			}
		}
	}


	
?>