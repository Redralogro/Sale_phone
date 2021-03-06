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
			$sql = "SELECT *FROM phones ORDER BY phones.Phone_id DESC";
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

		public function addPhone($Name, $Price, $Color_id, $nameFile, $Memory_id, $Firm_id)
		{
			$sql = "INSERT INTO phones(Name, Price, Color_id, Image, Memory_id, Firm_id) values('$Name', '$Price', '$Color_id', '$nameFile', '$Memory_id', '$Firm_id')";
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

		public function editPhone($id, $Name, $Price, $Color_id, $nameFile, $Memory_id, $Firm_id)
		{
			$sql = "UPDATE phones SET 
											Name = '$Name',
											Price = '$Price',
											Color_id = $Color_id, 
											Image = '$nameFile', 
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

		public function Getdetail_phone()
		{
			$sql = "SELECT * FROM detail_phones";
			$query = mysqli_query($this->conn, $sql);
			$result = array();
			while ($row =  mysqli_fetch_array($query)) {
				$result[] = $row;
			}

			return $result;
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

		public function Orderconfirmation($phone_id, $qty)
		{
			$sql = "UPDATE detail_phones SET Quatity = (Quatity - $qty) WHERE Phone_id = $phone_id";
			$query = mysqli_query($this->conn, $sql);
			if ($query) {
				return 1;
			}else{
				return 0;
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
			$query1 = mysqli_query($this->conn, $sql1);
			if ($query1) {
				return 1;
			}
			else{
				return 0;
			}
		}

		public function addFirm($name, $nameFile)
		{
			$sql = "INSERT INTO firm(Firm_name, logo) values('$name', '$nameFile')";
			$query = mysqli_query($this->conn, $sql);
			if ($query) {
				return 1;
			}
			else{
				return 0;
			}
		}

		public function editFirm($id, $name,$nameFile)
		{
			$sql = "UPDATE firm set Firm_name = '$name', logo = '$nameFile' where Firm_id = $id";
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

		public function getUser1()
		{
			$sql="SELECT * FROM user";
			$query = mysqli_query($this->conn, $sql);
			$result = array();

			while ($row =  mysqli_fetch_array($query)) {
				$result[] = $row;
			}

			return $result;
		}
        public function deletesql($table, $sql)
		{
			$sql = "DELETE FROM {$table} WHERE " . $sql;
			// _debug($sql);die;
			mysqli_query($this->conn, $sql) or die(" Lỗi Truy Vấn delete   --- " . mysqli_error($this->conn));
			return mysqli_affected_rows($this->conn);
		}
		public function addUSER($Email, $number_phone, $pass, $name, $image, $status)
		{
			$sql = "INSERT INTO user(Email, number_phone, Password, Name, Image_user, status) values('$Email', '$number_phone', '$pass', '$name', '$image', '$status')";
			mysqli_query($this->conn, $sql) or die("Error Query Insert" . mysqli_error($this->conn));
            return mysqli_insert_id($this->conn);
			
		}
		function updateUser($id_user,$email,$number_phone,$password,$name,$image,$status)
		{
			$sql="UPDATE user
			SET Email='$email', number_phone='$number_phone',Password= '$password',Name= '$name',Image_user='$image',status='$status'
			WHERE User_id='$id_user';";
			$result = mysqli_query($this->conn, $sql) or die(mysqli_error($this->conn));
			return mysqli_affected_rows($this->conn);
		}
		public function getUserID($id)
		{
			$sql="SELECT * FROM user WHERE User_id = $id";
			$query = mysqli_query($this->conn, $sql);
			$row =  mysqli_fetch_array($query);
			return $row;
		}

		public function get_order()
		{
        	$sql = "SELECT * FROM order_phone ORDER BY order_phone.Order_id DESC";
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

		public function getOrder_detail()
		{
			$sql = "SELECT *FROM order_detail";
			$query = mysqli_query($this->conn, $sql);
			while ($row =  mysqli_fetch_array($query)) {
				$result[] = $row;
			}

			return $result;
		}
		public function getOrder_detail_byID($id)
		{
			$sql = "SELECT *FROM order_detail where Order_id = $id";
			$query = mysqli_query($this->conn, $sql);
			while ($row =  mysqli_fetch_array($query)) {
				$result[] = $row;
			}

			return $result;
		}

		public function get_order_detail_id($id)
		{
			$sql = "SELECT *FROM order_detail where Order_id = $id";
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

		public function get_TOP5_ORDER()
		{
			$sql = "SELECT  *FROM order_phone order by Order_id DESC LIMIT 5";
			$query = mysqli_query($this->conn, $sql);
			$result = array();

			while ($row =  mysqli_fetch_array($query)) {
				$result[] = $row;
			}

			return $result;
		}

		public function update_OrderPhone($id, $Delivery_addres, $Note)
		{
			$sql = "UPDATE order_phone SET Delivery_addres = '$Delivery_addres', Note = '$Note' WHERE Order_id = $id";
			$query = mysqli_query($this->conn, $sql);
			if ($query) {
				return 1;
			}else{
				return 0;
			}
		}


		public function changeTitle($str){
		  if(!$str) return false;
		  $unicode = array(
		        'a'=>'á|à|ả|ã|ạ|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ',
		        'A'=>'Á|À|Ả|Ã|Ạ|Ă|Ắ|Ằ|Ẳ|Ẵ|Ặ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',
		        'd'=>'đ',
		        'D'=>'Đ',
		        'e'=>'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ',
		        'E'=>'É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',
		        'i'=>'í|ì|ỉ|ĩ|ị',
		        'I'=>'Í|Ì|Ỉ|Ĩ|Ị',
		        'o'=>'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ',
		        'O'=>'Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',
		        'u'=>'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự',
		        'U'=>'Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',
		        'y'=>'ý|ỳ|ỷ|ỹ|ỵ',
		        'Y'=>'Ý|Ỳ|Ỷ|Ỹ|Ỵ',
		        '.' =>'?|(|)|[|]|{|}|#|%|-|–|<|>|,|:|;|.|&|"|“|”|/',
		        '-'=>' '
		  );
		  foreach($unicode as $khongdau=>$codau) {
		     $arr=explode("|",$codau);
		     $str = str_replace($arr,$khongdau,$str);
		  }
		  return $str;
		}

		//Check định dạng mail
		public function is_email($str) {
			$regex="/^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i";
		    return (preg_match($regex, $str));
		}

		public function is_name($fullname)
		{
			$regex="/^[a-zA-Z_ÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ]+(([ ][a-zA-Z_ÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ ])?[a-zA-Z_ÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ]*)*$/";
			return (preg_match($regex,$fullname));
		}

		function isVietnamesePhoneNumber($number) {
			$regex="/^(0|\+84)(\s|\.)?((3[2-9])|(5[689])|(7[06-9])|(8[1-689])|(9[0-46-9]))(\d)(\s|\.)?(\d{3})(\s|\.)?(\d{3})$/";
			return (preg_match($regex,$number));
		  
		}

		public function checkPass($password)
		{
			$regex="/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/";
			return (preg_match($regex,$password));
			
		}
		////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

		////////////////////////////////////////////////////////////////////////////////////////////////

		public function CountOrder($month, $year)
		{
			$sql = "SELECT COUNT(Order_id) FROM order_phone WHERE Create_date LIKE '$year-$month-%' AND Status_id=3";
			$query = mysqli_query($this->conn, $sql);
			$count = mysqli_fetch_array($query);
			return $count;
		}

		public function CountTotal_Price($month, $year)
		{
			$sql = "SELECT SUM(Total_price) FROM order_phone WHERE Create_date LIKE '$year-$month-%' AND Status_id=3";
			$query = mysqli_query($this->conn, $sql);
			$count = mysqli_fetch_array($query);
			return $count;
		}

		public function CountCustomer()
		{
			$sql = "SELECT COUNT(customer_id) FROM customer ";
			$query = mysqli_query($this->conn, $sql);
			$count = mysqli_fetch_array($query);
			return $count;
		}

		public function addBanner($nameFile)
		{
			$sql = "INSERT INTO banner(image_banner) values('$nameFile')";
			$query = mysqli_query($this->conn, $sql);
			if ($query) {
				return 1;
			}else{
				return 0;
			}
		}

		public function getBanner()
		{
			$sql = "SELECT *from banner ";
			$query = mysqli_query($this->conn, $sql);
			$result = array();

			while ($row =  mysqli_fetch_array($query)) {
				$result[] = $row;
			}

			return $result;
		}
		public function SearchData()
		{
			{
			$search = addslashes($_GET['tukhoa']);
			$sql = "SELECT *FROM phones where Name like '%$search%'";
			$query = mysqli_query($this->conn, $sql);
			$result = array();

			while ($row =  mysqli_fetch_array($query)) {
				$result[] = $row;
			}

			return $result;
		}
		
	}
		public function delBanner($id)
		{
			$sql = "DELETE FROM banner WHERE banner_id = $id";
			$query = mysqli_query($this->conn, $sql);
			if ($query) {
				return 1;
			}else{
				return 0;
			}
		}

		public function getPhone_firm1($id)
		{
			$sql = "SELECT  *FROM phones where Firm_id = $id";
	        $query = mysqli_query($this->conn, $sql);
	        while ($row =  mysqli_fetch_array($query)) {
	             $result[] = $row;
	        }

		    if (!empty($result)) {
		      return $result;
		    }else{
		      return 0;
		    }
		}

		public function Del_oder($Order_id)
		{
			$sql = "DELETE FROM order_detail WHERE Order_id = $Order_id";
			$query = mysqli_query($this->conn, $sql);
			$sql1 = "DELETE FROM order_phone WHERE Order_id  = $Order_id";
			$query1 = mysqli_query($this->conn, $sql1);
			if ($query1) {
				return 1;
			}else{
				return 0;
			}
		}
		
	}


	
?>