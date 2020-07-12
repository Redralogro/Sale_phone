<div class="mainmenu-area">
        <div class="container">
            <div class="row">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li ><a href="index.php?page=home">Home</a></li>
                        <li><a href="index.php?page=shop">Shop page</a></li>
                        <!-- <li><a href="index.php?page=single-product">Single product</a></li> -->
                        <li class="active" ><a href="index.php?page=cart">Cart</a></li>
                        <li><a href="index.php?page=checkout">Checkout</a></li>
                    </ul>
                </div>
            </div>
        </div>
</div>

    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Shopping Cart</h2>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Page title area -->
    
    
    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">

                  <?php 
                  if (isset($_SESSION['phone_cart']) && !empty($_SESSION['phone_cart'])) {
                   
                  ?>
                <div class="col-md-10">
                    <div class="product-content-right">
                        <div class="woocommerce" id="table-x">
                            <form method="post" action="index.php?page=checkout">
                                <table cellspacing="0" class="shop_table cart" id="table-data">
                                    <thead>
                                        <tr>
                                            <th class="product-remove">&nbsp;</th>
                                            <th class="product-thumbnail">&nbsp;</th>
                                            <th class="product-name">Product</th>
                                            <th class="product-price">Price</th>
                                            <th class="product-quantity">Quantity</th>
                                            <th class="product-subtotal">Sum Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                         
                                        $_SESSION['phone_total_price'] = 0;
                                        $count=0;
                                        foreach ($_SESSION['phone_cart'] as $id => $product) {
                                    ?>
                                        <tr class="cart_item">
                                            <td class="product-remove">
                                                <a title="Remove this item" class="remove" href="./views/Cart_method/Delete_cart.php?id_item=<?php echo $product['Phone_id']?>" onclick="return confirm('Bạn có muốn xóa sản phẩm này khỏi giỏ hàng không?')">×</a> 
                                            </td>

                                            <td class="product-thumbnail">
                                                <a href="index.php?page=single-product"><img width="145" height="145" alt="poster_1_up" class="shop_thumbnail" src="./public/img/product-thumb-2.jpg"></a>
                                            </td>

                                            <td class="product-name">
                                                <a href="index.php?page=single-product"><?php echo $product['Name'];?></a> 
                                            </td>

                                            <td class="product-price">
                                                <span class="amount"><?php echo number_format( $product['Price'])?> Đ</span> 
                                            </td>

                                            <td class="product-quantity">
                                                <div class="quantity buttons_added">                                    
                                                    <input onchange="updateCart('<?php echo $product['Phone_id']; ?>')" id="<?php echo $product['Phone_id']; ?>" type="number" size="4" class="input-text qty text" title="Qty" value="<?php echo $product['qty']?>" min="1" step="1">
                                                </div>
                                            </td>

                                            <td class="product-subtotal">
                                                <span class="amount">
                                                <?php  
                                                    $sum_price = $product['Price'] * $product['qty'];
                                                    $_SESSION['phone_total_price'] += $sum_price;

                                                    echo number_format($sum_price);
                                                    $count+= $product['qty'];
										        ?>
                                                </span> 
                                            </td>
                                        </tr>
                                        
                                    <?php }
                                    $_SESSION['number_phone']=$count;
                                    
                                    ?>
                                    <tr>
                                            <td class="actions" colspan="6">
                                                <div class="coupon" style="margin-left: 7%;">
                                                    <label for="coupon_code">TOTAL:</label>
                                                    <span class="alert alert-info"><?php echo number_format($_SESSION['phone_total_price']) ." Đ"; ?></span>
                                                </div>
                                                <input type="submit" value="Update Cart" name="update_cart" class="button" style="margin-left: 10%;">
                                                <input type="submit" value="Checkout" name="checkout" class="checkout-button button alt wc-forward" style="float:right;">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </form>
                        </div>                        
                    </div>                    
                </div>
                    <?php
                    }else{
                    ?>
                    <div class="alert alert-danger col-sm-8">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <strong>Thông báo!</strong> Giỏ hàng của bạn đang trống
                    <a href="index.php">
                        <button class="btn btn-info">Quay lại</button>
                    </a>
                    </div>
                  <?php 
                  unset  ($_SESSION['number_phone']);
                   $_SESSION['phone_total_price']=0;
                   }
                  // unset($_SESSION['phone_cart']);
                   ?>
                   
            </div>
        </div>
    </div>