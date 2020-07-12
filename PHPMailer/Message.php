

<?php $message='<!DOCTYPE html>
<html lang="">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Email gửi khách hàng</title>

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

          <h3>Kính gửi Anh/Chị:'.$customer_name.'</h3>
          <p>Số điện thoại: '.$phone_number.'</p>
          <p>Địa chỉ nhận hàng:'.$addres.'
          </p>
          <p>
            Hệ thống xin được xác nhận lại các thông tin về đơn hàng:
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
              '

?>
                <?php 
                foreach ($Details  as $key => $dtls)
                {
                  $message.=' <tr>
                  <td class="text-center">
                    '.$dtls['Phone_id'].'
                  </td>
                  <td class="text-center"><img src="" width="80" 
                  alt="'; 
                  foreach($Phone as $key => $phone)
                  {
                    if($dtls['Phone_id']==$phone['Phone_id'])
                    {
                      $message.=$phone['Name'];
                    }
                  }
                  $message.='" title="ustora.com"></td>
                  <td class="text-center">
                  '.$dtls['Sale_quantity'].'
                  </td>
                  <td class="text-center">
                 '.number_format( $dtls['Sale_quantity']* $dtls['Price']).'
                  </td>
                </tr>';
                ?>
               <?php  }
               $message .='<tr>
               <th>Phụ kiện đi kèm</th>
                 <td colspan="4">Hộp đựng, sổ bảo hành, thẻ bảo hành, giấy chứng nhận,thẻ chọc sim,miếng dán màn hình siêu bền 
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
             </tr> <tr>
             <td colspan="5">
                            <p>
                              Tổng đơn hàng: <span><b>'.number_format($total).'</b></span>
                            </p>
                          </td>
                        </tr>
                    </table>
                  </div>
                </div>
              </div>
              <hr>   
              <p>Mật khẩu để kiểm tra đơn hàng của bạn: <b>'.$pws.'</b>(Vui Lòng không chia sẻ với ai)</p>
              <hr>
              <p>
                Cảm ơn Anh/Chị đã tin tưởng và đồng hành cùng ustora.com. Hy vọng hệ thống sẽ được tiếp đón Anh/Chị trong thời gian tới! <br>
                <hr>
                <b><i>Trân trọng!</i></b>
              </p>
        
            </div>
          </body>
        </html>';
               ?>

                
                
            