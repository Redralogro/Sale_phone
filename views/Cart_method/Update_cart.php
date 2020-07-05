<?php  
	if (isset($_POST['submit_cart'])) {

		unset($_POST['submit_cart']);

		foreach ($_POST as $id_pro => $qty) {
			if ($qty <= 0) {
				unset($_SESSION['phone_cart'][$id_pro]);
			}else{
				$_SESSION['phone_cart'][$id_pro]['qty'] = $qty;
			}
			header("Location: ../../index.php?page=cart");
		}
	}
?>