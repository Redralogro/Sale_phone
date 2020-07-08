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
					$rs = $this->phone->get_TOP5_ORDER();
					$CUSTOMER = $this->phone->get_Customer();
					$STATUS = $this->phone->get_status();
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
							$_SESSION['NotidelFirm'] = 1;
							header("Location: index.php?method=listfirm");
						}else{
							echo "<script>alert('Xóa thất bại')</script>";
						}
						
						
					}
					break;
				case 'addfirm':
					if (isset($_POST['submit'])) {
						$name = $_POST['name'];
						$img = $_FILES["logo"];
						$nameFile = $this->phone->changeTitle($_FILES["logo"]["name"]);
						$tmpFile = $_FILES["logo"]["tmp_name"];
						move_uploaded_file($tmpFile, "public/img/logo/".$nameFile);
						if ($this->phone->addFirm($name, $nameFile) == 1) {
							$_SESSION['NotiaddFirm']= 1;
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
							$name = $_POST['name'];
							$img = $_FILES["logo"];
							$nameFile = $this->phone->changeTitle($_FILES["logo"]["name"]);
							$tmpFile = $_FILES["logo"]["tmp_name"];
							move_uploaded_file($tmpFile, "public/img/logo/".$nameFile);
							if ($this->phone->editFirm($id, $name,$nameFile) == 1) {
								$_SESSION['NotieditFirm']= 1;
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
						$img = $_FILES["logo"];
						$nameFile = $this->phone->changeTitle($_FILES["logo"]["name"]);
						$tmpFile = $_FILES["logo"]["tmp_name"];
						move_uploaded_file($tmpFile, "public/img/phone/".$nameFile);
						
						if ($this->phone->addPhone($Name, $Price, $Color_id, $nameFile, $Memory_id, $Firm_id) == 1) {
							$_SESSION['NotiaddPhone']= 1;
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
							$img = $_FILES["logo"];
							$nameFile = $this->phone->changeTitle($_FILES["logo"]["name"]);
							$tmpFile = $_FILES["logo"]["tmp_name"];
							move_uploaded_file($tmpFile, "public/img/phone/".$nameFile);
							if ($this->phone->editPhone($id, $Name, $Price, $Color_id, $nameFile, $Memory_id, $Firm_id) == 1) {
								$_SESSION['NotieditPhone']= 1;
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
							$_SESSION['NotidelPhone']= 1;
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
								$_SESSION['NotiUpdateDetailPhone']= 1;
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
										$_SESSION['notiOK'] = 1;
										header("Location: index.php?method=orderPhone");
									}
									
									break;
								case 'Comfirm':
									if ($this->phone->ComfirmOrder($id, 2) == 1) {
											$_SESSION['notiComfirm'] = 1;
											header("Location: index.php?method=orderPhone");
										}
									
									break;
								case 'Cancel':
									if ($this->phone->ComfirmOrder($id, 4) == 1) {
											$_SESSION['notiCancel'] = 1;
											header("Location: index.php?method=orderPhone");
										}
									
									break;
								default:
									# code...
									break;
							}
						}
					}
				break;

				case 'editOrderPhone':

					if (isset($_GET['id_OrderPhone'])) {
						$id = $_GET['id_OrderPhone'];
						$row = $this->phone->get_order_id($id);
						if (isset($_POST['OK'])) {
							$Delivery_addres = $_POST['Delivery_addres'];
							$Note = $_POST['Note'];

							if ($this->phone->update_OrderPhone($id, $Delivery_addres, $Note) == 1) {
								$_SESSION['notiUpdateOrderPhone'] = 1;
								header('Location: index.php?method=orderPhone');
 							}
						}
						

					}
					include_once 'views/editOrderPhone.php';
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