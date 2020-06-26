


<div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Product</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <?php 
        if(isset($_GET['id']))
        {
        ?>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                <div class="product-images">
                                    <h2 style="text-align: center;"><?php  foreach($phone1 as $key => $phones)
                                         {
                                             if ($phones['Phone_id']==$_GET['id'])
                                             {
                                                 echo $phones['Name'];
                                                 
                                             }
                                         }?></h2>
                                    <div class="product-main-img" style="text-align: center;">
                                        <img  src="admin/public/img/phone/<?php
                                         foreach($phone as $key => $phone)
                                         {
                                             if ($phone['Phone_id']==$_GET['id'])
                                             {
                                                 echo $phone['Image'];
                                             }
                                         }
                                         ?>" alt=" Điện Thoại">
                    
                                    </div>
                                    
                                    <div class="product-gallery">
                                        <img src="img/product-thumb-1.jpg" alt="">
                                        <img src="img/product-thumb-2.jpg" alt="">
                                        <img src="img/product-thumb-3.jpg" alt="">
                                    </div>
                                </div>
                </div>
                
                <div class="col-md-8">
                    <div class="product-content-right">
                        <div class="product-breadcroumb">
                            <a href="">Home</a>
                            <a href=""><?php
                                         foreach($phone1 as $key => $ph)
                                         {
                                             if ($ph['Phone_id']==$_GET['id'])
                                             {
                                                foreach($firm as $key => $firm)
                                                {
                                                    if ($ph['Firm_id']==$firm['Firm_id']) {
                                                        echo $firm['Firm_name'];
                                                    }
                                                }
                                             }
                                         }
                                         ?></a>
                            <a href=""><?php  foreach($phone1 as $key => $phones)
                                         {
                                             if ($phones['Phone_id']==$_GET['id'])
                                             {
                                                 echo $phones['Name'];
                                                 
                                             }
                                         }?></a>
                        </div>
                        
                        <div class="row">
                            <div class="col-sm-6">
                            <table class="table table-hover table-inverse">
                        <thead>
                            <tr>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th >KÍCH THƯỚC MÀN HÌNH</th>
                                <td><?php echo $row['Size']; ?></td>
                            </tr>
                            <tr>
                                <th >TRỌNG LƯỢNG</th>
                                <td><?php echo $row['Weight']; ?></td>
                            </tr>
                            <tr>
                                <th >HỆ ĐIỀU HÀNH</th>
                                <td><?php echo $row['Os']; ?></td>
                            </tr>
                            <tr>
                                <th >Bộ nhớ trong / Ram</th>
                                <td>
                                    <?php  foreach($phone1 as $key => $phones)
                                         {
                                             if ($phones['Phone_id']==$_GET['id'])
                                             {
                                                foreach ($ram as $key => $rm) {
                                                    if ($phones['Memory_id'] == $rm['Memory_id']) {
                                                        echo $rm['Memory'];
                                                    }
                                                }
                                                 
                                                 
                                             }
                                         }?>
                                </td>
                            </tr>
                            <tr>
                                <th >TỐC ĐỘ CPU</th>
                                <td><?php echo $row['Cpu_speed']; ?></td>
                            </tr>
                            <tr>
                                <th >CAMERA</th>
                                <td><?php echo $row['Camera_primary']; ?></td>
                            </tr>
                            <tr>
                                <th >PIN</th>
                                <td><?php echo $row['Bettery']; ?></td>
                            </tr>
                            <tr>
                                <th >BẢO HÀNG</th>
                                <td><?php echo $row['Warranty']; ?></td>
                            </tr>
                            <tr>
                                <th >BLUETOOTH</th>
                                <td><?php echo $row['Bluetooth']; ?></td>
                            </tr>
                            <tr>
                                <th >WLAN</th>
                                <td><?php echo $row['Wlan']; ?></td>
                            </tr>
                        
                        </tbody>
                    </table>
                            </div>
                            
                            <div class="col-sm-6">
                                <div class="product-inner">
                                    <h2 class="product-name" style="text-align: center;"><?php 
                                    foreach($phone1 as $key => $phone1)
                                    { if($phone1['Phone_id']==$_GET['id'])
                                        {
                                            echo $phone1['Name'];

                                        }
                                        
                                    }
                                     ?></h2>
                                    <div class="product-inner-price" style="text-align: center;">
                                        <ins><?php echo number_format($phoneID['Price']);
                                         ?> VNĐ</ins>
                                    </div>    
                                    
                                    <form action="" class="cart" style="text-align: center;">
                                        
                                        <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="./views/Cart_method/Order.php?id_item=<?php echo $_GET['id']?>">Add to cart</a>
                                    </form>   
                                    
                                    
                                    <div class="sale-box" style="border: 1px solid #cecece; border-radius: 10px;">
                                        <p class="sale-box-title">Khuyến mãi</p>
                                        <ul>
                                            <li><p>1. Tặng:&nbsp;<span style="color: #ff0000;">Cường lực&nbsp;-</span>&nbsp;<span style="color: #ff0000;">Ốp lưng&nbsp;- Tai nghe</span> </p></li>
                                            <li><p>2. Giảm:&nbsp;<span style="color: #ff0000;">100K</span> áp dụng HSSV tại <span style="color: #ff0000;">398 Cầu Giấy</span></p></li>
                                            <li><p>3. Mua: Dán cường lực 5D chỉ <span style="color: #ff0000;">99K</span></p></li>
                                            
                                            
                                        </ul>
                                    </div>
                                    
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                        
                        
                <div class="col-md-12">
                     <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane fade in active" id="home"><br>
                                                <h1>Mô tả sản phẩm</h1>
                                                <hr style="border: 1px solid ">
                                                  
                                               <?php 
                                               foreach ($details as $key => $details)
                                               {
                                                   if($details['Phone_id']==$_GET['id'])
                                                   {
                                                       echo $details['Description'];
                                                   }

                                               }
                                               ?>
                                            </div>
                                            
                                        </div>
                </div>
            </div>
            <hr style="border: 1px solid ">
            <h2>Bình luận</h2>
            <div id="fb-root"></div>
            <script>
                // Xem ở đâu mà nhúng fb lằng nhằng thế
              window.fbAsyncInit = function() {
                FB.init({
                  appId      : '291115715297696',
                  xfbml      : true,
                  version    : 'v7.0'
                });
                FB.AppEvents.logPageView();
              };

              (function(d, s, id){
                 var js, fjs = d.getElementsByTagName(s)[0];
                 if (d.getElementById(id)) {return;}
                 js = d.createElement(s); js.id = id;
                 js.src = "https://connect.facebook.net/en_US/sdk.js";
                 fjs.parentNode.insertBefore(js, fjs);
               }(document, 'script', 'facebook-jssdk'));
            </script>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <?php
                        function getCurURL() {
                            // Kiểm tra xem giao thức web là http hay https
                            if (isset($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] == "on") {
                                $pageURL = "https://";
                            } else {
                              $pageURL = 'http://';
                            }

                            // Lấy url hiện tại, cái lúc trước bị thiếu cái $_SERVER["REQUEST_URI"];
                            if (isset($_SERVER["SERVER_PORT"]) && $_SERVER["SERVER_PORT"] != "80") {
                                $pageURL .= $_SERVER["SERVER_NAME"] . ":" . $_SERVER["SERVER_PORT"] . $_SERVER["REQUEST_URI"];
                            } else {
                                $pageURL .= $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
                            }
                                return $pageURL;
                            }

                            // Đưa cả hàm getCurURL sang model mà gọi hàm hoặc để ở đây cũng dc
                        ?>


                        <div class="fb-comments" data-href="<?php echo getCurURL(); ?>" data-numposts="5" data-width="100%"></div>
                    </div>
                </div>
            </div>
            
        </div>

        <?php 
         }
         else
         {?>
            <div class="alert alert-danger col-sm-8">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong>Thông báo!</strong> Không có sản phẩm bạn đang tìm kiếm
            <a href="index.php">
                <button class="btn btn-info">Quay lại</button>
            </a>
            </div>  
         <?php }
        ?>

    </div>
    