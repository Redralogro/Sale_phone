<?php  
	session_start();
	$id = $_POST['id'];
	$qty = $_POST['qty'];

	if ($qty <= 0) {
		unset($_SESSION['phone_cart'][$id]);
	}else{
		$_SESSION['phone_cart'][$id]['qty'] = $qty;
		echo "Cập nhật thành công!";
	}
?>