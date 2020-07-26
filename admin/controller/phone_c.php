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
					$month = date('m');
					$date = getdate();
					$year = $date['year'];
					$countCustomer = $this->phone->CountCustomer();
					$countPrice = $this->phone->CountTotal_Price($month, $year);
					$countOrder = $this->phone->CountOrder($month, $year); 
					$rs = $this->phone->get_TOP5_ORDER();
					$CUSTOMER = $this->phone->get_Customer();
					$STATUS = $this->phone->get_status();
					include_once 'views/dashboard.php';
					break;
				case 'listphone':
					$detailPhone = $this->phone->Getdetail_phone();
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
							$_SESSION['NotidelFirm2'] = 1;
							header("Location: index.php?method=listfirm");
						}
						
						
					}
					break;
				case 'addfirm':
					if (isset($_POST['submit'])) {
						$name = $_POST['name'];
						$img = $_FILES["logo"];
						$fileExt = explode('.', $_FILES["logo"]["name"]);
						$fileActualExt = strtolower(end($fileExt));
						$allowed = array('jpg', 'jpeg', 'png');


						if (in_array($fileActualExt, $allowed)) {
							$nameFile = $this->phone->changeTitle($_FILES["logo"]["name"]);
							$tmpFile = $_FILES["logo"]["tmp_name"];
							move_uploaded_file($tmpFile, "public/img/logo/".$nameFile);
							if ($this->phone->addFirm($name, $nameFile) == 1) {
								$_SESSION['NotiaddFirm']= 1;
								header("Location: index.php?method=listfirm");
							}else{
								echo "<script>alert('Thêm không thành công!')</script>";
							}
						}else{
							echo "<script>alert('File không đúng định dạng!')</script>";
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
							
							$fileExt = explode('.', $_FILES["logo"]["name"]);
							$fileActualExt = strtolower(end($fileExt));
							$allowed = array('jpg', 'jpeg', 'png');


							if (in_array($fileActualExt, $allowed)) {
								$nameFile = $this->phone->changeTitle($_FILES["logo"]["name"]);
								$tmpFile = $_FILES["logo"]["tmp_name"];
								move_uploaded_file($tmpFile, "public/img/logo/".$nameFile);
								if ($this->phone->editFirm($id, $name,$nameFile) == 1) {
									$_SESSION['NotieditFirm']= 1;
									header("Location: index.php?method=listfirm");
								}else{
									echo "<script>alert('Thêm không thành công!')</script>";
								}
							}else{
								echo "<script>alert('File không đúng định dạng!')</script>";
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
						

						$fileExt = explode('.', $_FILES["logo"]["name"]);
						$fileActualExt = strtolower(end($fileExt));
						$allowed = array('jpg', 'jpeg', 'png');


						if (in_array($fileActualExt, $allowed)) {
							$nameFile = $this->phone->changeTitle($_FILES["logo"]["name"]);
							$tmpFile = $_FILES["logo"]["tmp_name"];
							move_uploaded_file($tmpFile, "public/img/phone/".$nameFile);
							if ($this->phone->addPhone($Name, $Price, $Color_id, $nameFile, $Memory_id, $Firm_id) == 1) {
								$_SESSION['NotiaddPhone']= 1;
								header("Location: index.php?method=listphone");
							}else{
								echo "<script>alert('Thêm không thành công!')</script>";
							}
						}else{
							echo "<script>alert('File không đúng định dạng!')</script>";
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
							

						$fileExt = explode('.', $_FILES["logo"]["name"]);
						$fileActualExt = strtolower(end($fileExt));
						$allowed = array('jpg', 'jpeg', 'png');


						if (in_array($fileActualExt, $allowed)) {
							$nameFile = $this->phone->changeTitle($_FILES["logo"]["name"]);
							$tmpFile = $_FILES["logo"]["tmp_name"];
							move_uploaded_file($tmpFile, "public/img/phone/".$nameFile);
							if ($this->phone->editPhone($id, $Name, $Price, $Color_id, $nameFile, $Memory_id, $Firm_id) == 1) {
								$_SESSION['NotieditPhone']= 1;
								header("Location: index.php?method=listphone");
							}else{
								echo "<script>alert('Sửa không thành công!')</script>";
							}
						}else{
							echo "<script>alert('File không đúng định dạng!')</script>";
							
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
							$_SESSION['NotidelPhone2']= 1;
							header("Location: index.php?method=listphone");
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
					
					//$detail=$this->get_order_detail_id($_GET['id_order']);
					if (isset($_GET['id_order'])) {
						$id = $_GET['id_order'];
						$customer = $this->phone->get_Customer();
						$Phone = $this->phone->get_Phone();
						$row = $this->phone->get_order();
						
						// $Details = $this->phone->get_order_detail_id($id);
						$Details = $this->phone->getOrder_detail_byID($id);
						if (isset($_GET['action'])) {
							$action = $_GET['action'];

							switch ($action) {
								case 'OK':
									$dtl = $this->phone->getOrder_detail();
									foreach ($dtl as $key => $dt) {
										if ($dt['Order_id'] == $id) {
											$phone_id = $dt['Phone_id'];
											$qty = $dt['Sale_quantity'];

											if ($this->phone->Orderconfirmation($phone_id, $qty) == 1) {
												if ($this->phone->ComfirmOrder($id, 3) == 1) {
													$_SESSION['notiOK'] = 1;

													header("Location: index.php?method=orderPhone");
												}else{
													$_SESSION['notiOKfail'] = 1;

													header("Location: index.php?method=orderPhone");
												}
											}else{
												$_SESSION['notiOKfail1'] = 1;

												header("Location: index.php?method=orderPhone");
											}

										}
									}

									
									
									
									
									break;
								case 'Comfirm':
									if ($this->phone->ComfirmOrder($id, 2) == 1) {
										
										foreach($row as $key => $value) 
										{
                                            if ($value['Order_id'] == $id) {
												$pws=$value['password'];
												$addres=$value['Delivery_addres'];
												$total=$value['Total_price'];
												foreach ($customer as $key => $cus)
												{
													if($cus['Customer_id']== $value['Customer_id'])
													{
														$phone_number=$cus['Customer_phone'];
														$customer_name=$cus['Customer_name'];
													}
												}
                                            }
										}
										// Tiến hành gửi email cho khách
										include_once '../PHPMailer/class.phpmailer.php';
										include_once '../PHPMailer/class.smtp.php';
										include_once '../PHPMailer/Message.php';
										$email=$_GET['email'];
										$name=$_GET['name'];
										// Instantiation and passing `true` enables exceptions
										
											try {
												//Server settings
												$mail->SMTPDebug = 2; // đưa lên host để chỗ này = 0 nhé
												$mail = new PHPMailer(true);
												$mail->CharSet = "UTF-8";
												//$mail ->charSet = "utf8"; //chữ c không viết hoa, lát test lại nhé
												$mail->isSMTP();                                            // Send using SMTP
												$mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
												$mail->SMTPAuth   = true;                                   // Enable SMTP 
									
												$mail->Username   = 'redralogro@gmail.com';                     // SMTP username
												$mail->Password   = '26091999';  // SMTP password
												$mail->SMTPSecure = 'tls';         // Enable TLS encryption; 
												$mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
									
												//Recipients
												$mail->setFrom('support@ustora.com', 'Thông báo đơn hàng mới');
												$mail->addAddress($email, $name);     // Add a recipient
									
												// Content
												$mail->isHTML(true);                                  // Set email format to HTML
												$mail->Subject = 'Thông báo đơn hàng mới';
												$mail->Body    = $message	;
									
												$mail->send();
												echo 'Message has been sent';
											} catch (Exception $e) {
												echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
											}

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
								case 'Del':
									if (isset($_GET['id_order'])) {
										$Order_id = (int)$_GET['id_order'];
										if ($this->phone->Del_oder($Order_id) == 1) {
											$_SESSION['notiDel'] = 1;
											header("Location: index.php?method=orderPhone");
										}else{
											$_SESSION['notiDel'] = 2;
											header("Location: index.php?method=orderPhone");
										}
										
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
						$detail_order = $this->phone->getOrder_detail();
						$ODERPHONE = $this->phone->get_order_id($id);
						$ODERDETAIL = $this->phone->getOrder_detail_byID($id);
						$CUSTOMER = $this->phone->get_Customer();
						$PHONE = $this->phone->get_Phone();
						$STATUS = $this->phone->get_status();
						$deli =$this->phone->get_deliverer();
					}
					include_once 'views/detail_order.php';
				break;

				case 'infoUser':
					if (isset($_GET['id_User'])) {
						$id = $_GET['id_User'];

						$rs = $this->phone->getUserID($id);
					}
					include_once 'views/infoUser.php';
					break;

				case 'User':
					if ($_SESSION['status1'] != 1) {
						header('Location: index.php');
					}
					$rs = $this->phone->getUser1();
					include_once 'views/user.php';
					break;
				case 'addUser':
					if (isset($_POST['submit'])) {
						$name = $_POST['name'];
						$phone = $_POST['phone'];
						$email = $_POST['email'];
						$pass = $_POST['pass'];
						$acc = $_POST['acc'];
						$rs = $this->phone->getUser1();
						$check_pass=$_POST['check'];
						if($check_pass!=$pass){
								$_SESSION['errorPassEdit']="Mật khẩu không trùng khớp !!!";
								header("Location: index.php?method=addUser");
								die();
							}
						$nameFile = $this->phone->changeTitle($_FILES["user"]["name"]);
						$tmpFile = $_FILES["user"]["tmp_name"];
						

							if
							($this->phone->is_name($name)  == 0
							||$this->phone->is_email($email) == 0 
							||$this->phone->isVietnamesePhoneNumber($phone) == 0
							||$this->phone->checkPass($pass) ==0)
							{
								$_SESSION['errorAdd']="Vui lòng điền lại thông tin!!!";
								
							}
								$supported_image = array('gif','jpg','jpeg','png');
								$ext = strtolower(pathinfo($_FILES["user"]["name"], PATHINFO_EXTENSION));

								if (!in_array($ext, $supported_image))

								{
									$_SESSION['errorImage']="Ảnh không đúng định dạng!!";
									
                                   
								}

								foreach 
								($rs as $key => $val) {
								if ($val['number_phone'] == $phone)
										{
										$_SESSION['errorPhone']="Tồn tại số điện thoại!!";
												
								      }
										}
								foreach ($rs as $key => $valu)
								 {
										if ($valu['Email'] == $email) {
											$_SESSION['errorEmail']="Tồn tại email !!!";
											
										}
								}
								if(isset($_SESSION['errorAdd'])||isset($_SESSION['errorImage'])||isset($_SESSION['errorPhone'])||isset($_SESSION['errorEmail']))
								{
									header("Location: index.php?method=addUser");
									die();
								}
	
								{$pass=md5($pass);
									move_uploaded_file($tmpFile, "public/img/user/".$nameFile);
	
									if ($this->phone->addUSER($email, $phone, $pass, $name, $nameFile, $acc) ) {
										$_SESSION['NotiAddUser']= 1;
										header("Location: index.php?method=User");
									}else{
										echo "<script>alert('Thêm thất bại')</script>";
									}}
					
	
					}
					include_once 'views/addUser.php';
					break;
					case 'editUser':
						$id_user = $_GET['id_user'];
						$rs = $this->phone->getUserID($id_user);
						$getuse = $this->phone->getUser1();
						$id=$rs['User_id']; 
                        if (isset($_POST['submit'])) {
                            $name = $_POST['name'];
                            $number_phone = $_POST['phone'];
                            $Email = $_POST['email'];
                            $pass = $_POST['pass'];
                            $acc = $_POST['acc'];
                            $check_pass=$_POST['check'];
                            $logo = $_FILES['user_im']['name'];
                            $nameFile = $this->phone->changeTitle($_FILES["user_im"]["name"]);
                            $tmpFile = $_FILES["user_im"]["tmp_name"];
                            $id=$rs['User_id']; 
                            if($check_pass!=$pass){
								$_SESSION['errorPassEdit']="Mật khẩu không trùng khớp !!!";
								header("Location: index.php?method=editUser&id_user=".$rs['User_id']." ");
								die();
							}
                            if ($this->phone->is_name($name)  == 0
                                ||$this->phone->is_email($Email) == 0
                                ||$this->phone->isVietnamesePhoneNumber($number_phone) == 0
                                ||$this->phone->checkPass($pass) ==0) {
                                $_SESSION['errorEdit']="Vui lòng điền lại thông tin!!!";
                            }
                            $supported_image = array('gif','jpg','jpeg','png');
                            $ext = strtolower(pathinfo($_FILES["user_im"]["name"], PATHINFO_EXTENSION));
    
                            if (!in_array($ext, $supported_image)) {
                                $_SESSION['errorImageEdit']="Ảnh không đúng định dạng!!";
                            }
    
                                if ($number_phone != $rs['number_phone']) {
                                	foreach ($getuse as $key => $gu) {
                                		if ($number_phone == $gu['number_phone']) {
                                			$_SESSION['errorPhoneEdit']="Tồn tại số điện thoại!!";
                                		}
                                	}
                                	
                                }
                            
                                if ($Email != $rs['Email']) {
                                    foreach ($getuse as $key => $gu) {
                                		if ($Email == $gu['Email']) {
                                			$_SESSION['errorEmailEdit']="Email đã tồn tại !!!";
                                		}
                                	}
                                }
                            
                            if (isset($_SESSION['errorEdit'])||isset($_SESSION['errorImageEdit'])||isset($_SESSION['errorPhoneEdit'])||isset($_SESSION['errorEmailEdit'])) {
								header("Location: index.php?method=editUser&id_user=".$rs['User_id']." ");
                                die();
                            }
        
                            $pass=md5($pass);
                                        move_uploaded_file($tmpFile, "public/img/user/".$nameFile);
            
                                        if ($this->phone->updateUser($id_user, $Email, $number_phone, $pass, $name, $nameFile, $acc)) {
                                            $_SESSION['NotiEditUser']= 1;
                                            header("Location: index.php?method=User");
                                        } else {
                                        	$_SESSION['NotiEditUser1']= 1;
                                            header("Location: index.php?method=User");
                                            
                                        }
                        }
						include_once 'views/editUser.php';
						break;
					case 'deltuser':
						if(isset($_GET['id_user']))
						{
							$id_user = $_GET['id_user'];
							if($this->phone->deletesql("user", "User_id=".$id_user))
							{
								$_SESSION['NotiUser']= 1;
								header("Location: index.php?method=User");
							}
							else
							{
								echo "<script>alert('Xóa thất bại')</script>";	
							}
						}
						

						break;	
				case 'banner':
					$showbanner = $this->phone->getBanner();
					if (isset($_POST['OK'])) {
						$banner = $_FILES["logo"];
						$fileExt = explode('.', $_FILES["logo"]["name"]);
						$fileActualExt = strtolower(end($fileExt));
						$allowed = array('jpg', 'jpeg', 'png');

						if (in_array($fileActualExt, $allowed)) {
							$nameFile = $this->phone->changeTitle($_FILES["logo"]["name"]);
							$tmpFile = $_FILES["logo"]["tmp_name"];
							move_uploaded_file($tmpFile, "public/img/banner/".$nameFile);
							if ($this->phone->addBanner($nameFile)  == 1) {
								$_SESSION['notiBanner'] = 1;
							
							}else{
								echo "<script>alert('Thêm banner không thành công!')</script>";
							}
						}else{
							echo "<script>alert('File không đúng định dạng!')</script>";
						}

						


					}
					include_once 'views/banner.php';
					break;
				case 'Search':
					$detailPhone = $this->phone->Getdetail_phone();
					$rs_phone = $this->phone->get_Phone();
           			$rs_Color = $this->phone->get_Color();
           			$rs_Firm = $this->phone->get_Firm();
          			$rs_Memory = $this->phone->get_Memory();
          			$rs_search = $this->phone->SearchData();
          			include_once 'views/search.php';
         			break;
      
				case 'delBanner':
					if (isset($_GET['id_banner'])) {
						$id = (int)$_GET['id_banner'];
						if ($this->phone->delBanner($id) == 1) {
							$_SESSION["notidel"] = 1;
							header("Location: index.php?method=banner");
						}
						
					}
					break;
				case 'phone_firm':
					if (isset($_GET['id_firm'])) {
						$id_fi = (int)$_GET['id_firm'];
						$rs_phone = $this->phone->getPhone_firm1($id_fi);
						$detailPhone = $this->phone->Getdetail_phone();
						$rs_Color = $this->phone->get_Color();
						$rs_Firm = $this->phone->get_Firm();
						$rs_Memory = $this->phone->get_Memory();
					}
					
					
					include_once 'views/firm.php';
					
					
					break;
				default:
					# code...
					break;
			}

		}
	}

?>