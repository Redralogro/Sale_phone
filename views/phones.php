<div class="mainmenu-area">
    <div class="container">
        <?php
        if (isset($_SESSION['noti_cart'])) {
            echo "<div class='alert alert-info'>
            <a class='close' data-dismiss='alert'>&times;</a>
            <strong>Nhắc nhở!</strong> Thêm vào giỏ hàng thành công.
            </div>";
            unset($_SESSION['noti_cart']);
        }    
        ?>  
        
    </div>
    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>PHONES</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <br>
        <div class="row">
            <?php include_once './views/filter/left.php'; ?>
            <div class="col-md-10">
                <?php

                if (isset($_GET['active'])) {
                   $active = $_GET['active'];
               }else{
                $active = 'listphone';
            }

            switch ($active) {
                case 'listphone':
                $result = $this->ult->getPhone();
                include_once 'listphone.php';
                break;
                case 'firm':
                if (isset($_GET['id'])) {
                    $id = (int)($_GET['id']);
                    $result = $this->ult->getPhoneFIRM($id);
                }
                
                include_once 'firm/firm.php';
                break;
                case 'price':
                if (isset($_GET['price'])) {
                    $price = (int)($_GET['price']);
                    $result = $this->ult->getPhone_price($price); 
                }
                include_once 'firm/firm.php';
                break;

                default:
                                # code...
                break;
            }
            ?>
            
            
        </div>
    </div>
    <div class="row">
        <div class="col-2"></div>
        <div class="col-10">
            <div class="product-pagination text-center" >
                <nav >
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
