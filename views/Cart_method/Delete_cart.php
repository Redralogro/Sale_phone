<?php 
ob_start();
session_start();
	if (isset($_GET['id_item'])) {
         $id_pro = (int)$_GET['id_item'];
         unset( $_SESSION['phone_cart'][$id_pro ]);
        //unset( $_SESSION['phone_cart']);
	}
	header("Location: ../../index.php?page=cart");
?>