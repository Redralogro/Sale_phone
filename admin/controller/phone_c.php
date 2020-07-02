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
						$this->phone->del_firm($id);
					}
					break;
				case 'addfirm':
					// if (isset($_POST['submit'])) {
					// 	$name = $_POST['name'];
					// 	$a=$_FILES['inpavatar']['tmp_name'];
					// 	$b=$_FILES['inpavatar']['name'];
						
					// 	// $a=addcslashes(file_get_contents($_FILES['logo']['tmp_name']));
					// 	$this->phone->addFirm($name, $b);
					// 	if ($this->phone->addFirm($name, $b) == 1) {
					// 		header('Location: index.php');
					// 	}
					// }
					include_once 'views/addFirm.php';
					break;
				case 'editfirm':
					if (isset($_GET['id_firm'])) {
						$id = $_GET['id_firm'];
						$row = $this->phone->get_Firm_ID($id);
					}
					
					include_once 'views/editFirm.php';
					break;
				case 'addphone':
					$color = $this->phone->get_Color();
					$firm = $this->phone->get_Firm();
					$ram = $this->phone->get_Memory();
					include_once 'views/addphone.php';
					break;
				case 'editphone':
					if (isset($_GET['id_phone'])) {
						$id = (int)$_GET['id_phone'];
						$phones = $this->phone->getphone_id($id);
						$color = $this->phone->get_Color();
						$firm = $this->phone->get_Firm();
						$ram = $this->phone->get_Memory();
					}
					
					include_once 'views/editphone.php';
					break;
				case 'del_phone':
					if (isset($_GET['id_phone'])) {
						$id = (int)$_GET['id_phone'];
						$this->phone->del_phone($id);
						$_SEESION['noti_del'] = 1;
					}
					break;
				case 'detail_phone':
					if (isset($_GET['id_phone'])) {
						$id = (int)$_GET['id_phone'];
						$row = $this->phone->detail_phone($id);
						$rs = $this->phone->getphone_id($id);
					}
					include_once 'views/detail_phone.php';
					break;
				
				default:
					# code...
					break;
			}
		}
	}
?>