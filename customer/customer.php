<?php
session_start();
ob_start();
include_once '../model/database.php';
$db = new Database;  
$Det=$db->getOrder_detail_byID($_SESSION['Order_id']);
$phone=$db->getAllData('phones');
$order=$db->get_order_id($_SESSION['Order_id']);
if (!isset($_SESSION['customer'])) {
    header('Location: ./login.php');
  
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check đơn hàng</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://file.hstatic.net/1000269795/file/bootstrap.min_cb2ae12a5c7f4c00af2b39a3753484e4.css" />
    <!-- jQuery -->
    <script src="https://file.hstatic.net/1000269795/file/jquery_2592a519f56f40e88defc18f795058a9.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="https://file.hstatic.net/1000269795/file/bootstrap.min_70e83d31f33946d4b9cfc66751002088.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">

            <h3>Xin chào Quý Khách:<?php echo $_SESSION['Customer_name'];?></h3>
          <p>Số điện thoại:<?php echo $_SESSION['customer'];?></p>
          <p>
          <p>Địa chỉ nhận hàng:<?php foreach ($order as $key => $ord)
          {echo $ord['Delivery_addres'];}?>
          </p>
            Đơn hàng của quí khách bao gồm các thông tin sau đây:
          </p>
          <div class="table-responsive">
            <table class="table table-bordered table-hover">
              <h4 style="font-weight: bold; margin-top: 20px;">Chi tiết đơn hàng</h4>
                <tr>
                <th class="text-center" style="width: 120px;">Mã sản phẩm</th>
                  <th class="text-center" style="width: 80px;">Hình ảnh</th>
                  <th class="text-center" style="width: 30px;">Số lượng</th>
                  <th class="text-center" style="width: 50px;">Tổng tiền</th>
                </tr>
                <?php  foreach($Det as  $val)
                {?>
                <tr>
                  <td class="text-center">
                    <?php echo $val['Phone_id']?>
                  </td>

                  <td class="text-center"><img src=" " width="80" alt="<?php 
                  foreach($phone as $key => $phone)
                  {
                    if($val['Phone_id']==$phone['Phone_id'])
                    {
                      echo $phone['Name'];
                    }
                  }?>" title="Donghochinhhang.com">
                
                  </td>

                  <td class="text-center">
                  <?php  echo number_format($val['Sale_quantity'])?>
                  </td>

                  <td class="text-center">
                   <?php  echo number_format($val['Sale_quantity']* $val['Price'])?>
                  </td>

                </tr>
               
                <?php }?>       
                <tr>
                  <th>Phụ kiện đi kèm</th>
                    <td colspan="4">Hộp đựng đồng hồ, sổ bảo hành, thẻ bảo hành, giấy chứng nhận, túi đựng sản phẩm
                  </td>
                </tr>
                <tr>
                  <th>Hình thức thanh toán</th>
                  <td colspan="4">
                    <p>Tiền mặt</p>
                  </td>
                </tr>
                <tr>
                  <th>Phí giao hàng</th>
                  <td colspan="4">
                    Miễn phí.
                  </td>
                </tr>
                
                <tr>
                  <td colspan="5">
                    <p>
                      Tổng đơn hàng: <span><b>
                    <?php 
                    foreach($order as  $or)
                    {
                        echo $or['Total_price'];
                    }  
                      ?></b></span>
                    </p>
                  </td>
                </tr>
            </table>
          </div>
            </div>
        </div>

    </div>
</body>
</html>