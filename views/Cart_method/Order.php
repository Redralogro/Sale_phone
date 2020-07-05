<?php 
ob_start();
session_start();
include_once '../../model/database.php';
include_once '../../Function/function.php';
$db = new Database();

if (isset($_GET['id_item'])) {
    $id_pro = (int)$_GET['id_item'];
    //$product =$db->getdata_where('phones',"Phone_id=".$id); // Lấy thông tin sản phẩm khách mua
       $product=getPro_Id($id_pro );
    //$_SESSION['cart']; // $cart lưu toàn bộ thông tin sản phẩm khách hàng mua
    
    if ($product) {
        if (!isset($_SESSION['phone_cart']) && empty($_SESSION['phone_cart'])) {
            $_SESSION['phone_cart'][$id_pro ] = $product;
            $_SESSION['phone_cart'][$id_pro ]['qty'] = 1;
        }else{
            if (array_key_exists($id_pro , $_SESSION['phone_cart'])) {
                $_SESSION['phone_cart'][$id_pro ]['qty'] += 1;
            }else{
                $_SESSION['phone_cart'][$id_pro ] = $product;
                $_SESSION['phone_cart'][$id_pro ]['qty'] = 1;
            }
        }
        $_SESSION['noti_cart'] = 1;
    }else{
        $_SESSION['noti_cart'] = 0;
    }
}else{
   
}
header("Location: ../../index.php");
?>