<?php 
ob_start();
session_start();
//date_default_timezone_set('UTC');
include_once '../../Function/function.php';
include_once '../../model/database.php';
$db= new Database();
	// Lấy thông tin khách hàng đặt hàng
	if (isset($_POST['order'])) {
		$name 	= $_POST['name'];
		$phone 	= $_POST['phone'];
		$email 	= $_POST['email'];
		$addres = $_POST['addres'];
		$note = $_POST['note'];
		$pawws  = substr(md5 (rand()),0,8);
		$today = ''.date("Y-m-d H:i:s").'' ; 
		
		$result=$db->execute("SELECT Deliverer_id FROM deliverer");
		//echo count($result);
		$deliverer_id= rand(1,count($result));
		$total= $_SESSION['phone_total_price'];
		 addMember($name, $phone, $email); // Lấy thông tin KH mua hàng
		$Customer_id = mysqli_insert_id($conn);
		//addOrder($Customer_id, $deliverer_id,$today,$total,$addres,$note,$pawws);
		addOrder($Customer_id, $deliverer_id,$today,$total,$addres,$note,$pawws);
		// // Lấy thông tin sản phẩm khách hàng mua
		$Order_id= mysqli_insert_id($conn);
		foreach ($_SESSION['phone_cart'] as $id => $product) {
			addPro_order($Order_id, $product['Phone_id'],  $product['Price'],$product['qty']);
		}
		
		// Tiến hành gửi email cho khách
		// include_once '../../PHPMailer/class.phpmailer.php';
		// include_once '../../PHPMailer/class.smtp.php';

		// // Instantiation and passing `true` enables exceptions
		// $mail = new PHPMailer(true);

		// try {
		//     //Server settings
		//     $mail->SMTPDebug = 2;                      // Enable verbose debug output
		//     $mail->CharSet = "UTF-8";
		//     $mail->isSMTP();                                            // Send using SMTP
		//     $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
		//     $mail->SMTPAuth   = true;                                   // Enable SMTP 

		//     $mail->Username   = 'redralogro@gmail.com';                     // SMTP username
		//     $mail->Password   = '26091999';  // SMTP password
		//     $mail->SMTPSecure = 'tls';         // Enable TLS encryption; 
		//     $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

		//     //Recipients
		//     $mail->setFrom('support@ustora.com', 'Thông báo đơn hàng mới');
		//     $mail->addAddress($email, $name);     // Add a recipient

		//     // Content
		//     $mail->isHTML(true);                                  // Set email format to HTML
		//     $mail->Subject = 'Thông báo đơn hàng mới';
		//     $mail->Body    = $message	;

		//     $mail->send();
		//     echo 'Message has been sent';
		// } catch (Exception $e) {
		//     echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
		// }
		unset($_SESSION['phone_cart']);
		unset( $_SESSION['phone_total_price']);
		unset( $_SESSION['number_phone']);
		$_SESSION['notiCartSussec'] = 1;
		header("Location: ../../index.php");
		
		
	}
?>