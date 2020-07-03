<?php  
	include_once 'model/phone_m.php';
	
	class phone_c extends phone_m
	{
		private $phone;

		function __construct()
		{
			$this->phone = new phone_m();
		}

		
		public function phone()
		{
			if (isset($_GET['method'])) {
				$method = $_GET['method'];
			}else{
				$method = 'dashboard';
			}

			switch ($method) {
				case 'dashboard':
					include_once 'views/dashboard.php';
					break;
				case 'listphone':
					$rs_phone = $this->phone->get_Phone();
					$rs_Color = $this->phone->get_Color();
					$rs_Firm = $this->phone->get_Firm();
					$rs_Memory = $this->phone->get_Memory();
					include_once 'views/listphone.php';
					break;
				case 'listfirm':
					$rs_Firm = $this->phone->get_Firm();
					include_once 'views/listfirm.php';
					break;
				case 'del_firm':
					if (isset($_GET['id_firm'])) {
						$id = $_GET['id_firm'];
						if ($this->phone->del_firm($id) == 1) {
							echo "<script>alert('Xóa thành công')</script>";
							header("Location: index.php?method=listfirm");
						}else{
							echo "<script>alert('Xóa thất bại')</script>";
						}
						
						
					}
					break;
				case 'addfirm':
					if (isset($_POST['submit'])) {
						$name = $_POST['name'];
						$img = base64_encode(file_get_contents($_FILES['logo']['tmp_name']));
						if ($this->phone->addFirm($name, $img) == 1) {
							echo "<script>alert('Thêm thành công')</script>";
							header("Location: index.php?method=listfirm");
						}else{
							echo "<script>alert('Thêm thất bại')</script>";
						}
						
						
					}
					include_once 'views/addFirm.php';
					break;
				case 'editfirm':
					if (isset($_GET['id_firm'])) {
						$id = $_GET['id_firm'];
						$row = $this->phone->get_Firm_ID($id);

						if (isset($_POST['submit'])) {
							$Firm_name = $_POST['name'];
							$logo = base64_encode(file_get_contents($_FILES['logo']['tmp_name']));
							if ($this->phone->editFirm($id, $Firm_name,$logo) == 1) {
								
								header("Location: index.php?method=listfirm");
								
							}else{
								echo "<script>alert('Sửa thất bại')</script>";
							}
						}

					}
					
					include_once 'views/editFirm.php';
					break;
				case 'addphone':
					$color = $this->phone->get_Color();
					$firm = $this->phone->get_Firm();
					$ram = $this->phone->get_Memory();
					if (isset($_POST['submit'])) {
						$Name = $_POST['name'];
						$Price = $_POST['price'];
						$Color_id = $_POST['color'];
						$Memory_id = $_POST['ram'];
						$Firm_id = $_POST['firm'];
						$Image = base64_encode(file_get_contents($_FILES['img']['tmp_name']));
						// $this->phone->addPhone($Name, $Price, $Color_id, $Image, $Memory_id, $Firm_id);
						if ($this->phone->addPhone($Name, $Price, $Color_id, $Image, $Memory_id, $Firm_id) == 1) {
							echo "<script>alert('Thêm thành công')</script>";
							header("Location: index.php?method=listphone");
						}else{
							echo "<script>alert('Thêm thất bại')</script>";
						}

					}
					include_once 'views/addphone.php';
					break;
				case 'editphone':
					if (isset($_GET['id_phone'])) {
						$id = (int)$_GET['id_phone'];
						$phones = $this->phone->getphone_id($id);
						$color = $this->phone->get_Color();
						$firm = $this->phone->get_Firm();
						$ram = $this->phone->get_Memory();
						if (isset($_POST['submit'])) {
							$Name = $_POST['name'];
							$Price = $_POST['price'];
							$Color_id = $_POST['color'];
							$Memory_id = $_POST['ram'];
							$Firm_id = $_POST['firm'];
							$Image = base64_encode(file_get_contents($_FILES['img']['tmp_name']));
							if ($this->phone->editPhone($id, $Name, $Price, $Color_id, $Image, $Memory_id, $Firm_id) == 1) {
								echo "<script>alert('Sửa thành công')</script>";
								header("Location: index.php?method=listphone");
							}else{
								echo "<script>alert('Sửa thất bại')</script>";
							}

						}
					}
					
					include_once 'views/editphone.php';
					break;
				case 'del_phone':
					if (isset($_GET['id_phone'])) {
						$id = (int)$_GET['id_phone'];

						if ($this->phone->del_phone($id) == 1) {
							header("Location: index.php?method=listphone");
						}else{
							echo "<script>alert('Lỗi không xóa được')</script>";
						}
						
					}
					break;
				case 'detail_phone':
					if (isset($_GET['id_phone'])) {
						$id = (int)$_GET['id_phone'];
						$row = $this->phone->detail_phone($id);
						$rs = $this->phone->getphone_id($id);
						$r = $this->phone->detail_phone_rows($id);
					}
					include_once 'views/detail_phone.php';
					break;

				case 'del_detailphone':
					if (isset($_GET['id_phone'])) {
						$id = (int)$_GET['id_phone'];
						$this->phone->del_detailphone($id);
						// header("Location: index.php?method=");
						
					}
					include_once 'views/detail_phone.php';
					break;
				case 'update_detailPhone':
					if (isset($_GET['id_phone'])) {
						$id = (int)$_GET['id_phone'];
						$detail = $this->phone->detail_phone($id);
						if (isset($_POST['OK'])) {
							$Description = $_POST['Description'];
							$Quatity = (int)$_POST['Quatity'];
							$Size =$_POST['Size'];
							$Weight =$_POST['Weight'];
							$Os =$_POST['Os'];
							$Cpu_speed =$_POST['Cpu_speed'];
							$Camera_primary =$_POST['Camera_primary'];
							$Bettery =$_POST['Bettery'];
							$Warranty =$_POST['Warranty'];
							$Bluetooth =$_POST['Bluetooth'];
							$Wlan =$_POST['Wlan'];
							$Promotion_price =$_POST['Promotion_price'];
							$this->phone->Update_detailPhone($id, $Description, $Quatity,$Size,$Weight,$Os,$Cpu_speed,$Camera_primary,$Bettery,$Warranty,$Bluetooth,$Wlan,$Promotion_price);
							if ($this->phone->Update_detailPhone($id, $Description, $Quatity,$Size,$Weight,$Os,$Cpu_speed,$Camera_primary,$Bettery,$Warranty,$Bluetooth,$Wlan,$Promotion_price)==1) {
								echo "<script>alert('Update thành công')</script>";
								header("Location: index.php?method=detail_phone&id_phone=$id");

							}else{
								echo "<script>alert('Update thất bại')</script>";
							}

						}
					
					}
					include_once 'views/updateDetailPhone.php';
					break;
				case 'orderPhone':
					$customer = $this->phone->get_Customer();
					$deliverer = $this->phone->get_deliverer();
					$status = $this->phone->get_status();
					$row = $this->phone->get_order();
					include_once 'views/orderphone.php';
					break;
				case 'ComfirmOrder':
					if (isset($_GET['id_order'])) {
						$id = $_GET['id_order'];
						if (isset($_GET['action'])) {
							$action = $_GET['action'];

							switch ($action) {
								case 'OK':
									if ($this->phone->ComfirmOrder($id, 3) == 1) {
										echo "<script>alert('Đã giao')</script>";
									}
									
									break;
								case 'Comfirm':
									if ($this->phone->ComfirmOrder($id, 2) == 1) {
											echo "<script>alert('Đã xác nhận đơn hàng')</script>";
										}
									
									break;
								case 'Cancel':
									if ($this->phone->ComfirmOrder($id, 4) == 1) {
											echo "<script>alert('Hủy thành công')</script>";
										}
									
									break;
								default:
									# code...
									break;
							}
						}
					}
					break;
				case 'detail_order':
					
					if (isset($_GET['id_Order'])) {
						$id = $_GET['id_Order'];

						$ODERPHONE = $this->phone->get_order_id($id);
						$ODERDETAIL = $this->phone->get_order_detail_id($id);
						$CUSTOMER = $this->phone->get_Customer();
						$PHONE = $this->phone->get_Phone();
						$STATUS = $this->phone->get_status();
						$deli =$this->phone->get_deliverer();
					}
					include_once 'views/detail_order.php';
					break;
				default:
					# code...
					break;
			}

		}
	}

?>