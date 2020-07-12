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
                        <li ><a href="index.php?page=shop">Shop page</a></li>
                        <!-- <li><a href="index.php?page=single-product">Single product</a></li> -->
                        <li ><a href="index.php?page=cart">Cart</a></li>
                        <li  class="active"><a href="index.php?page=checkout">Checkout</a></li>
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
    </div>
    
    
    <div class="single-product-area">
        <div class="container">
    
                <?php 
                  if (isset($_SESSION['phone_cart']) && !empty($_SESSION['phone_cart'])) {
                   
                  ?>
                <div class="clearfix">
                </div>
                        <div class="row">
                            <div class="col-md-8 col-sm-6">
                                <div class="shippingbox">
                                    
                                    <form action="views/Cart_method/Checkout_cart.php" method="POST" role="form">
                                        <legend style="color: red; font-size: 20px;">ĐẶT HÀNG</legend>
                                        <hr>
                                        <div class="form-group">
                                            <label for="name">Họ tên khách hàng</label>
                                            <input type="text" required="" name="name" class="form-control" id="name" placeholder="Họ tên...">
                                        </div>

                                        <div class="form-group">
                                            <label for="phone">Số điện thoại</label>
                                            <input type="number" required="" name="phone" class="form-control" id="phone">
                                        </div>

                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" name="email" class="form-control" id="email" placeholder="Email...">
                                        </div>

                                        <div class="form-group">
                                            <label for="addres">Địa chỉ giao hàng</label>
                                            <input type="text" name="addres" class="form-control" id="addres">
                                        </div>

                                        <div class="form-group">
                                            <label for="note">Ghi chú đơn hàng</label>
                                            <textarea class="form-control" name="note" id="note" cols="30" rows="5"></textarea>
                                        </div>
                                    
                                        <button type="submit" name="order" class="btn btn-primary">
                                            Đặt hàng
                                        </button>
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