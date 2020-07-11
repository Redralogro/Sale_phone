<div class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="user-menu">
                        <ul>
                            <li><a href="index.php?page=cart"><i class="fa fa-user"></i> Customer check</a></li>
                            <li><a href="index.php?page=cart"><i class="fa fa-shopping-cart"></i> My Cart</a></li>
                            <li><a href="index.php?page=checkout"><i class="fa fa-user"></i> Checkout</a></li>
                            <li><a href="admin\login.php"><i class="fa fa-university"  aria-hidden="true"></i>Admin Login</a></li>
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
                  <form action="" method="get">
                  <div class="col-sm-4" style="margin-top: 5%; display:block;">
                      <input type="Text" name="Seacrh" value="" placeholder ="Tìm Kiếm Sản Phẩm ...">
                      <i class="fa fa-search" aria-hidden="true"></i>
                  </div>
                  </form>
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