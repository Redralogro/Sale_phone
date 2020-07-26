<div class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="user-menu">
                        <ul>
                            <li><a href="customer/customer.php"><i class="fa fa-user"></i> Customer Login</a></li>
                            <li><a href="index.php?page=cart"><i class="fa fa-shopping-cart"></i> My Cart</a></li>
                            <li><a href="index.php?page=checkout"><i class="fa fa-user"></i> Checkout</a></li>
                            <li><a href="admin\index.php"><i class="fa fa-university"  aria-hidden="true"></i>Admin Login</a></li>
                            <li><a style="text-decoration: none;">Số điện thoại: 0333968599</a></li>
                            <li><a style="text-decoration: none;">Email: ustoraMobile@gmail.com</a></li>
                            <li><a href="https://www.facebook.com/UStora-101535914986572/?modal=admin_todo_tour" style="text-decoration: none;">Facebook: UStora</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="site-branding-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="logo">
                        <h1>
                            <a href="./"><img src="./public/img/logo.png"></a>
                        </h1>
                    </div>
                </div>
                <div class="col-sm-4" style="margin-top: 5%; display:block;">
                  <form action="index.php?page=shop" method="POST" style="text-align: center;">
                  
                      <div class="row">
                      <input type="Text" style="border-radius: 25px; outline: none;" name="Seacrh" placeholder ="Tìm Kiếm Sản Phẩm ..." required="Điền tên điện thoại bạn muốn tìm" >
                      <button class="btn btn-primary mb-2"  style="border-radius: 25px" type="submit" name="submit" ><i class="fa fa-search" aria-hidden="true"></i></button>
                      </div>
                  
                  </form>
                </div>
                <div class="col-sm-4">
                    <div class="shopping-item">
                        <a href="index.php?page=cart">Cart <i class="fa fa-shopping-cart"></i> <span class="product-count"><?php if(isset($_SESSION['number_phone'])) {
                            echo $_SESSION['number_phone'];
                        }else{echo '0';}?></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    <div class="mainmenu-area">
        <div class="container">
            <?php
      if (isset($_SESSION['noti_cart'])) {
        echo "<div class='alert alert-danger'>
        <a class='close' data-dismiss='alert'>&times;</a>
        <strong>Nhắc nhở!</strong> Thêm vào giỏ hàng thành công.<a href='index.php?page=cart'><i class='fa fa-shopping-cart'></i> My Cart</a>
      </div>";
        unset($_SESSION['noti_cart']);
     }    

     if (isset($_SESSION['notiCartSussec'])) {
        echo "<div class='alert alert-danger'>
        <a class='close' data-dismiss='alert'>&times;</a>
        <strong>Nhắc nhở!</strong> Đặt hàng thành công.
      </div>";
        unset($_SESSION['notiCartSussec']);
     }    
    ?>  
            <div class="row fixed-top">
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
                        <!-- <li><a href="index.php?page=shop">Shop page</a></li> -->
                        <!-- <li><a href="index.php?page=single-product">Single product</a></li> -->
                        <li ><a href="index.php?page=cart">Cart</a></li>
                        <li><a href="index.php?page=checkout">Checkout</a></li>
                        <li ><a href="index.php?page=phones">PHONE</a></li>

                    </ul>
                </div>
            </div>
        </div>
</div>