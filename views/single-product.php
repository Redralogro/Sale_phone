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
                        <li  ><a href="index.php?page=shop">Shop page</a></li>
                        <!-- <li class="active"><a href="index.php?page=single-product">Single product</a></li> -->
                        <li ><a href="index.php?page=cart">Cart</a></li>
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
                                    <div class="product-main-img">
                                        <img style="height: 500px;" src="admin/public/img/phone/<?php
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
                                    <h2 class="product-name"><?php 
                                    foreach($phone1 as $key => $phone1)
                                    { if($phone1['Phone_id']==$_GET['id'])
                                        {
                                            echo $phone1['Name'];

                                        }
                                        
                                    }
                                     ?></h2>
                                    <div class="product-inner-price">
                                        <ins>$700.00</ins> <del>$100.00</del>
                                    </div>    
                                    
                                    <form action="" class="cart">
                                        
                                        <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="./views/Cart_method/Order.php?id_item=<?php echo $_GET['id']?>">Add to cart</a>
                                    </form>   
                                    
                                    <div class="product-inner-category">
                                        <p>Category: <a href="">Summer</a>. Tags: <a href="">awesome</a>, <a href="">best</a>, <a href="">sale</a>, <a href="">shoes</a>. </p>
                                    </div> 
                                    
                                    <div role="tabpanel">
                                        <ul class="product-tab" role="tablist">
                                            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Description</a></li>
                                            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Reviews</a></li>
                                        </ul>
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane fade in active" id="home">
                                                <h2>Mô tả sản phẩm</h2>  
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
                                            <div role="tabpanel" class="tab-pane fade" id="profile">
                                                <h2>Reviews</h2>
                                                <div class="submit-review">
                                                    <p><label for="name">Name</label> <input name="name" type="text"></p>
                                                    <p><label for="email">Email</label> <input name="email" type="email"></p>
                                                    <div class="rating-chooser">
                                                        <p>Your rating</p>

                                                        <div class="rating-wrap-post">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                    </div>
                                                    <p><label for="review">Your review</label> <textarea name="review" id="" cols="30" rows="10"></textarea></p>
                                                    <p><input type="submit" value="Submit"></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        
                        
                        <div class="related-products-wrapper">
                            <h2 class="related-products-title">Related Products</h2>
                            <div class="related-products-carousel">
                                <div class="single-product">
                                    <div class="product-f-image">
                                        <img src="img/product-1.jpg" alt="">
                                        <div class="product-hover">
                                            <a href="" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                            <a href="" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                        </div>
                                    </div>

                                    <h2><a href="">Sony Smart TV - 2015</a></h2>

                                    <div class="product-carousel-price">
                                        <ins>$700.00</ins> <del>$100.00</del>
                                    </div> 
                                </div>
                                <div class="single-product">
                                    <div class="product-f-image">
                                        <img src="img/product-2.jpg" alt="">
                                        <div class="product-hover">
                                            <a href="" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                            <a href="" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                        </div>
                                    </div>

                                    <h2><a href="">Apple new mac book 2015 March :P</a></h2>
                                    <div class="product-carousel-price">
                                        <ins>$899.00</ins> <del>$999.00</del>
                                    </div> 
                                </div>
                                <div class="single-product">
                                    <div class="product-f-image">
                                        <img src="img/product-3.jpg" alt="">
                                        <div class="product-hover">
                                            <a href="" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                            <a href="" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                        </div>
                                    </div>

                                    <h2><a href="">Apple new i phone 6</a></h2>

                                    <div class="product-carousel-price">
                                        <ins>$400.00</ins> <del>$425.00</del>
                                    </div>                                 
                                </div>
                                <div class="single-product">
                                    <div class="product-f-image">
                                        <img src="img/product-4.jpg" alt="">
                                        <div class="product-hover">
                                            <a href="" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                            <a href="" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                        </div>
                                    </div>

                                    <h2><a href="">Sony playstation microsoft</a></h2>

                                    <div class="product-carousel-price">
                                        <ins>$200.00</ins> <del>$225.00</del>
                                    </div>                            
                                </div>
                                <div class="single-product">
                                    <div class="product-f-image">
                                        <img src="img/product-5.jpg" alt="">
                                        <div class="product-hover">
                                            <a href="" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                            <a href="" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                        </div>
                                    </div>

                                    <h2><a href="">Sony Smart Air Condtion</a></h2>

                                    <div class="product-carousel-price">
                                        <ins>$1200.00</ins> <del>$1355.00</del>
                                    </div>                                 
                                </div>
                                <div class="single-product">
                                    <div class="product-f-image">
                                        <img src="img/product-6.jpg" alt="">
                                        <div class="product-hover">
                                            <a href="" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                            <a href="" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                        </div>
                                    </div>

                                    <h2><a href="">Samsung gallaxy note 4</a></h2>

                                    <div class="product-carousel-price">
                                        <ins>$400.00</ins>
                                    </div>                            
                                </div>                                    
                            </div>
                        </div>
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