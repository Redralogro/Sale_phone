
<div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Shop</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <?php 
    
    if (!empty($phone)) {
        ?>
    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <?php 
                foreach ($phone as $key => $phne) {
                    ?>
                <div class="col-md-3 col-sm-6 ">
                                    <div class="single-shop-product">
                                        <div class="product-upper" style="text-align: center;">
                                            <a href="index.php?page=single-product&id=<?php echo  $phne['Phone_id']?>"><img style="height:300px;" src="admin/public/img/phone/<?php echo  $phne['Image'] ?>" alt="Điện thoại đẹp"></a>
                                        </div>
                                        <h2 style="text-align: center;white-space: nowrap; overflow: hidden;text-overflow: ellipsis;"><a href="index.php?page=single-product&id=<?php echo  $phne['Phone_id']?>"><?php echo $phne['Name'] ?></a></h2>
                                        
                                        <div class="product-carousel-price" style="text-align: center;">
                    
                                            <ins><?php echo number_format($phne['Price'])  ?></ins> <del>
                                                <?php
                                             foreach ($details as $key => $value) {
                                                if ($value['Phone_id'] == $phne['Phone_id']) {
                                                    echo number_format($value['Promotion_price']);
                                                }
                                             }
                                            ?></del>
                                        </div>  
                                        
                                        <div class="product-option-shop" style="text-align: center;">
                                            <a <?php foreach ($details as $key => $value) {
                                                if ($value['Phone_id'] == $phne['Phone_id']) {
                                                   if ($value['Quatity'] < 1) {
                                                       echo "style='display: none;'";
                                                   }
                                                }} ?> class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="./views/Cart_method/Order.php?id_item=<?php echo $phne['Phone_id']?>">Add to cart</a>
                                                <a ><?php foreach ($details as $key => $value) {
                                                if ($value['Phone_id'] == $phne['Phone_id']) {
                                                   if ($value['Quatity'] < 1) {
                                                       echo "<span style='color: gray; '>Đã bán hết</span>";
                                                   }
                                                }} ?></a> 
                                        </div>                       
                                    </div>
                                </div>
            <?php
                }
            ?>
            </div>
            
            <div class="row">
                <div class="col-md-12">
                    <div class="product-pagination text-center">
                        <nav>
                          <ul class="pagination">
                            <li>
                              <a href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                              </a>
                            </li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li>
                              <a href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                              </a>
                            </li>
                          </ul>
                        </nav>                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    }
     else
     {?>
        <div class="alert alert-danger col-sm-12">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <strong>Thông báo!</strong> Sản phẩm tìm kiếm theo từ khóa:  <?php if (isset($keyword)) {
           echo $keyword;
        } ?> , không có !!!!
        <a href="index.php">
            <button class="btn btn-info">Quay lại</button>
        </a>
        </div> 
   <?php  }
    ?>
