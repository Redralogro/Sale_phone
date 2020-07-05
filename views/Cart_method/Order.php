<?php 

session_start();
include_once '../../model/database.php';
$db = new Database();

if (isset($_GET['id_item'])) {
    $id = (int)$_GET['id_item'];
    $pro =$db->getdata_where('phones',"Phone_id=".$id); // Lấy thông tin sản phẩm khách mua

    //$_SESSION['cart']; // $cart lưu toàn bộ thông tin sản phẩm khách hàng mua
    
    if ($pro) {
        if (!isset($_SESSION['cart']) && empty($_SESSION['cart'])) {
            $_SESSION['cart'][$id] = $pro;
            $_SESSION['cart'][$id]['qty'] = 1;
            var_dump($_SESSION['cart'][$id]);
        }else{
            if (array_key_exists($id, $_SESSION['cart'])) {
                $_SESSION['cart'][$id]['qty'] += 1;
            }else{
                $_SESSION['cart'][$id] = $pro;
                $_SESSION['cart'][$id]['qty'] = 1;
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