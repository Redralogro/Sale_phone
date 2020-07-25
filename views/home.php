<?php 

// $result = $db->getAllData('phones');
// $detail=$db->execute('SELECT Phone_id,Promotion_price FROM detail_phones');
?>





<div class="slider-area">
        <!-- Slider -->
        <div class="block-slider block-slider4">
            <ul class="" id="bxslider-home4">
                <?php
                    foreach ($banner as $key => $bn) {
                ?>
                    <li>
                        <img src="admin/public/img/banner/<?php echo $bn['image_banner'] ?>" alt="Slide">
                    </li>
                <?php
                      }  
                ?>
                
            </ul>
        </div>
        <!-- ./Slider -->
    </div>
    <!-- End slider area -->

    <div class="promo-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo1">
                        <i class="fa fa-refresh"></i>
                        <p>30 Days return</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo2">
                        <i class="fa fa-truck"></i>
                        <p>Free shipping</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo3">
                        <i class="fa fa-lock"></i>
                        <p>Secure payments</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo4">
                        <i class="fa fa-gift"></i>
                        <p>New products</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End promo area -->

    <div class="maincontent-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="latest-product">
                        <h2 class="section-title">Latest Products</h2>
                       
                        <div class="row">
                                    <?php 
                                            foreach ($result as $row)
                                            {
                                            ?>  
                                <div class="col-md-3  col-sm-6 col-lx-4 col-xl-3">
                                    <div class="single-shop-product">
                                        <div class="product-upper" style="text-align: center;">
                                            <a href="index.php?page=single-product&id=<?php echo  $row['Phone_id']?>"><img style="height:300px;" src="admin/public/img/phone/<?php echo  $row['Image'] ?>" alt="Điện thoại đẹp"></a>
                                        </div>
                                        <h2 style=" text-align: center; white-space: nowrap; overflow: hidden;text-overflow: ellipsis; "><a  href="index.php?page=single-product&id=<?php echo  $row['Phone_id']?>"><?php echo $row['Name'] ?></a></h2>
                                        <div class="product-carousel-price" style="text-align: center; white-space: nowrap; overflow: hidden;text-overflow: ellipsis;">
                    
                                            <ins><?php echo number_format($row['Price'])  ?> VNĐ</ins> <del>
                                                <?php
                                             foreach ($detail as $key => $value) {
                                                if ($value['Phone_id'] == $row['Phone_id']) {
                                                    echo number_format($value['Promotion_price'])."VNĐ";
                                                }
                                             }
                                            ?></del>
                                        </div>  
                                        
                                        <div  class="product-option-shop" style="text-align: center; "  >
                                            <a <?php foreach ($detail as $key => $value) {
                                                if ($value['Phone_id'] == $row['Phone_id']) {
                                                   if ($value['Quatity'] < 1) {
                                                       echo "style='display: none;'";
                                                   }
                                                }} ?> class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="./views/Cart_method/Order.php?id_item=<?php echo $row['Phone_id']?>">Add to cart</a>
                                                <a ><?php foreach ($detail as $key => $value) {
                                                if ($value['Phone_id'] == $row['Phone_id']) {
                                                   if ($value['Quatity'] < 1) {
                                                       echo "<span style='color: gray; '>Đã bán hết</span>";
                                                   }
                                                }} ?></a> 
                                        </div>                       
                                    </div>
                                </div>


                               <?php }?>
                        </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End main content area -->

    <div class="brands-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="brand-wrapper">
                        <div class="brand-list">
                            <?php
                                foreach ($firm as $key => $fir) {
                            ?>  <a href="index.php?page=phones&active=firm&id=<?php echo $fir['Firm_id'];?>">
                                    <img style="height: 100px;" src="admin/public/img/logo/<?php echo $fir['Logo']?>" alt="">
                                </a>
                                
                            <?php
                                  }  
                            ?>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    