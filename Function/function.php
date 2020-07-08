<?php 
$conn = mysqli_connect("localhost:3307", "root", "", "phone") or die("Can't connect database!");
function to_slug($str) {
    $str = trim(mb_strtolower($str));
    $str = preg_replace('/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/', 'a', $str);
    $str = preg_replace('/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/', 'e', $str);
    $str = preg_replace('/(ì|í|ị|ỉ|ĩ)/', 'i', $str);
    $str = preg_replace('/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/', 'o', $str);
    $str = preg_replace('/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/', 'u', $str);
    $str = preg_replace('/(ỳ|ý|ỵ|ỷ|ỹ)/', 'y', $str);
    $str = preg_replace('/(đ)/', 'd', $str);
    $str = preg_replace('/[^a-z0-9-\s]/', '', $str);
    $str = preg_replace('/([\s]+)/', '-', $str);
    return $str;
}
function getPro_Id($id){
    global $conn;

    $sql = "SELECT *FROM phones WHERE Phone_id = $id";
    $query = mysqli_query($conn, $sql);
    $result = array();
    $result = mysqli_fetch_array($query);

    return $result;
}

// Lấy thông tin khách hàng đặt hàng
function addMember($name, $phone,$email){
    global $conn;

    $sql = "INSERT INTO customer(Customer_name, Customer_phone,  Customer_email) VALUES('$name', '$phone', '$email')";
    $query = mysqli_query($conn, $sql);
}

// Insert đơn hàng khách hàng đặt
function addOrder($id_member, $note){
    global $conn;

    $sql = "INSERT INTO order_phone(Customer_id, Note) VALUES($id_member, '$note')";
    $query = mysqli_query($conn, $sql);
}

// Lấy thông tin sản phẩm khách hàng muốn mua đưa vào detail order
function addPro_order($id_order, $id_product, $quantity, $price){
    global $conn;
    
    $sql = "INSERT INTO order_detail(Order_id,Phone_id, Sale_quantity, Price) VALUES($id_order, $id_product, $quantity, $price)";
    $query = mysqli_query($conn, $sql);
}
?>