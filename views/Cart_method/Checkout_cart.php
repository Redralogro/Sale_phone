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
		unset($_SESSION['phone_cart']);
		unset( $_SESSION['phone_total_price']);
		unset( $_SESSION['number_phone']);
		$_SESSION['notiCartSussec'] = 1;
		header("Location: ../../index.php");
		
		
	}
?>